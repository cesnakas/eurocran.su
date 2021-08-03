<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("main");
CModule::IncludeModule("iblock");

if ($_POST["action"] == "auth") {
	$result = $USER->Login($_POST["login"], $_POST["password"], "Y");
	if (!is_array($result)) {
		$USER->Authorize($USER->GetID());
		echo "ok";
	}
}

if ($_POST["action"] == "add_to_basket") {
	CModule::IncludeModule("catalog");
	CModule::IncludeModule("sale");
	
	$dbq = CIBlockElement::GetList(Array("ID"=>"ASC"), Array("IBLOCK_ID"=>1, "ID"=>$_POST["product"]), false, Array("nTopCount"=>1), Array("ID", "NAME"));
	if ($arq = $dbq->GetNext());
	$name = $arq["NAME"];
	
	$arPrice = GetCatalogProductPrice($_POST["product"], 1);
			
	$arFields = array(
		"MODULE" => "catalog",
		"PRODUCT_ID" => $_POST["product"],
		"PRODUCT_PRICE_ID" => 1,
		"PRICE" => $arPrice["PRICE"],
		"CURRENCY" => "RUB",
		"QUANTITY" => 1,
		"LID" => LANG,
		"DELAY" => "N",
		"CAN_BUY" => "Y",
		"NAME" => $arq["NAME"],
		"FUSER_ID"=>CSaleBasket::GetBasketUserID()
	);
	
	$result = CSaleBasket::Add($arFields);
	echo $result->LAST_ERROR;
	if ($result) {
		echo "done";
	} else {
		echo "error";
	}
	
}

if ($_POST["action"] == "recalc_qt") {
	if (intval($_POST["item"]) > 0) {
	CModule::IncludeModule("sale");
		$arFields = array(
		   "QUANTITY" => $_POST["qt"]
		);
		CSaleBasket::Update($_POST["item"], $arFields);
		echo 'ok';
	}
}

if ($_POST["action"] == "unset_item") {
	if (intval($_POST["item"]) > 0) {
	CModule::IncludeModule("sale");
		CSaleBasket::Delete($_POST["item"]);
		echo 'ok';
	}
}

if ($_POST["action"] == "bclear") {
	CModule::IncludeModule("sale");
	CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
}

if ($_POST["action"] == "update_basket") {
	CModule::IncludeModule("catalog");
	CModule::IncludeModule("sale");
	$dbq = CSaleBasket::GetList(Array(), Array("FUSER_ID"=>CSaleBasket::GetBasketUserID(), "ORDER_ID"=>false));
	$productCount = 0;
	$sum=0;
	while ($arq = $dbq->GetNext()) {
		$productCount = $productCount + $arq["QUANTITY"];
		$sum = $sum + ($arq["PRICE"]*$arq["QUANTITY"]);
	}
	$sum = intval($sum);
	
	if ($productCount > 0) { ?>
		<span class="basket-link"><?=$productCount?> товаров на сумму <?=$sum?> Р.</span>
	<? } else { ?>
		<span class="basket-link">товаров нет</span>
	<? }
}

if ($_POST["action"] == "order") {

	CModule::IncludeModule("catalog");
	CModule::IncludeModule("sale");
	CModule::IncludeModule("iblock");
	
	$arFields = Array();
	$arTMP1 = explode('&', $_POST['data']);
	foreach ($arTMP1 as $item) {
		$arTMP2 = explode('=', $item);
		// $arTMP2[0] = strtolower($arTMP2[0]);
		$arFields[$arTMP2[0]] = urldecode($arTMP2[1]);
	}
	
	$dbq = CSaleBasket::GetList(Array(), Array("FUSER_ID"=>CSaleBasket::GetBasketUserID(), "ORDER_ID"=>false));
	$productCount = 0;
	$sum=0;
	while ($arq = $dbq->GetNext()) {
		
		$dbElement = CIBlockElement::GetList(Array("ID"=>"ASC"), Array("IBLOCK_ID"=>1, "ID"=>$arq["PRODUCT_ID"]), false, Array("nTopCount"=>1), Array("ID", "NAME", "PROPERTY_ARTICUL", "PROPERTY_QMAX", "PROPERTY_PRICE1", "PROPERTY_PRICE2", "PROPERTY_PRICE3"));
		$arElement = $dbElement->GetNext();
		
		$productCount = $productCount + $arq["QUANTITY"];
		
		if ($arElement["PROPERTY_QMAX_VALUE"]) {
			$sum = $sum + specificPrice($arq["QUANTITY"], $arElement["PROPERTY_QMAX_VALUE"], $arq["PRICE"], $arElement["PROPERTY_PRICE1_VALUE"], $arElement["PROPERTY_PRICE2_VALUE"], $arElement["PROPERTY_PRICE3_VALUE"]);
		} else {
			$sum = $sum + ($arq["PRICE"]*$arq["QUANTITY"]);
		}
		
	}
	
	$userID = 2;
	if ($arFields["register"] == "Y") {
		$dbq = CUser::GetByLogin($arFields["s2_email"]);
		if ($arq = $dbq->GetNext()) {
			
			$arResult = Array(
				"status" => "error",
				"id" =>  0
			);
			echo htmlspecialchars(json_encode($arResult), ENT_NOQUOTES);
			
			return;
		} else {
			$user = new CUser;
			$password = randString(6);
			$arUserFields = Array(
				"ACTIVE" => "Y",
				"LOGIN" => $arFields["s2_email"],
				"EMAIL" => $arFields["s2_email"],
				"PASSWORD" => $password,
				"CONFIRM_PASSWORD" => $password,
				"GROUP_ID" => Array(5),
				"UF_NAME" => $arFields["s2_name"],
				"UF_PHONE" => $arFields["s2_phone"],
				"UF_PHONE2" => $arFields["s2_phone2"]
			);
			$userID = $user->Add($arUserFields);
			if ($userID) {
				$arEventFields = Array(
					"NAME" => $arFields["s2_name"],
					"LOGIN" => $arFields["s2_email"],
					"EMAIL" => $arFields["s2_email"],
					"PASSWORD" => $password
				);
				CEvent::SendImmediate("SEND_PASSWORD", "s1", $arEventFields);
			} else {
				
				$arResult = Array(
					"status" => $user->LAST_ERROR,
					"id" =>  0
				);
				echo htmlspecialchars(json_encode($arResult), ENT_NOQUOTES);
				
			}
		}
	}
	
	if ($USER->IsAuthorized()) {
		$userID = $USER->GetID();
	}
	
	$arOrderFields = Array(
		"LID" => "s1",
		"PERSON_TYPE_ID" => 1,
		"DELIVERY_ID" => 1,
		"STATUS_ID" => "N",
		"PRICE" => $sum,
		"CURRENCY" => "RUB",
		"USER_ID" => $userID,
		"PAY_SYSTEM_ID" => $arFields["payment"]
	);
	$ORDER_ID = CSaleOrder::Add($arOrderFields);
	CSaleBasket::OrderBasket($ORDER_ID);
	
	$arRemind = Array();
	if (strlen($arFields["s2_remind1"]) > 0) { $arRemind[] = $arFields["s2_remind1"]; }
	if (strlen($arFields["s2_remind2"]) > 0) { $arRemind[] = $arFields["s2_remind2"]; }
	if (strlen($arFields["s2_remind3"]) > 0) { $arRemind[] = $arFields["s2_remind3"]; }
	
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>1, "NAME"=>"Фамилия, имя", "VALUE"=>$arFields["s1_name"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>2, "NAME"=>"E-mail", "VALUE"=>$arFields["s1_email"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>3, "NAME"=>"Телефон", "VALUE"=>$arFields["s1_phone"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>4, "NAME"=>"Дополнительный телефон", "VALUE"=>$arFields["s1_phone2"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>5, "NAME"=>"Город", "VALUE"=>$arFields["s1_city"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>6, "NAME"=>"Метро", "VALUE"=>$arFields["s1_metro"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>7, "NAME"=>"Улица", "VALUE"=>$arFields["s1_street"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>8, "NAME"=>"Дом", "VALUE"=>$arFields["s1_house"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>9, "NAME"=>"Корпус", "VALUE"=>$arFields["s1_building"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>10, "NAME"=>"Квартира (офис)", "VALUE"=>$arFields["s1_flat"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>11, "NAME"=>"Подъезд", "VALUE"=>$arFields["s1_porch"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>12, "NAME"=>"Этаж", "VALUE"=>$arFields["s1_floor"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>13, "NAME"=>"Код домофона", "VALUE"=>$arFields["s1_code"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>14, "NAME"=>"Желаемая дата доставки", "VALUE"=>$arFields["s1_time"]));
		CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>19, "NAME"=>"Желаемое время доставки", "VALUE"=>$arFields["s1_time2"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>15, "NAME"=>"Фамилия, имя", "VALUE"=>$arFields["s2_name"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>16, "NAME"=>"E-mail", "VALUE"=>$arFields["s2_email"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>17, "NAME"=>"Телефон", "VALUE"=>$arFields["s2_phone"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>18, "NAME"=>"Дополнительный телефон", "VALUE"=>$arFields["s2_phone2"]));
	CSaleOrderPropsValue::Add(Array("ORDER_ID"=>$ORDER_ID, "ORDER_PROPS_ID"=>20, "NAME"=>"Оповещение о доставке", "VALUE"=>implode(", ", $arRemind)));
	
	$userProps = '<h2>Данные получателя</h2>';
	if (strlen($arFields["s1_name"])) { $userProps .= '<p><b>Фамилия, имя</b>: '.$arFields["s1_name"].';</p>'; } ;
	if (strlen($arFields["s1_email"])) { $userProps .= '<p><b>E-mail</b>: '.$arFields["s1_email"].';</p>'; } ;
	if (strlen($arFields["s1_phone"])) { $userProps .= '<p><b>Телефон</b>: '.$arFields["s1_phone"].';</p>'; } ;
	if (strlen($arFields["s1_phone2"])) { $userProps .= '<p><b>Дополнительный телефон</b>: '.$arFields["s1_phone2"].';</p>'; } ;
	$userProps .= '<h2>Адрес доставки</h2>';
	
	if (strlen($arFields["s1_city"])) { $userProps .= '<p><b>Город</b>: '.$arFields["s1_city"].';</p>'; } ;
	if (strlen($arFields["s1_metro"])) { $userProps .= '<p><b>Метро</b>: '.$arFields["s1_metro"].';</p>'; } ;
	if (strlen($arFields["s1_street"])) { $userProps .= '<p><b>Улица</b>: '.$arFields["s1_street"].';</p>'; } ;
	if (strlen($arFields["s1_house"])) { $userProps .= '<p><b>Дом</b>: '.$arFields["s1_house"].';</p>'; } ;
	if (strlen($arFields["s1_building"])) { $userProps .= '<p><b>Корпус</b>: '.$arFields["s1_building"].';</p>'; } ;
	if (strlen($arFields["s1_flat"])) { $userProps .= '<p><b>Квартира</b>: '.$arFields["s1_flat"].';</p>'; } ;
	if (strlen($arFields["s1_porch"])) { $userProps .= '<p><b>Подъезд</b>: '.$arFields["s1_porch"].';</p>'; } ;
	if (strlen($arFields["s1_floor"])) { $userProps .= '<p><b>Этаж</b>: '.$arFields["s1_floor"].';</p>'; } ;
	if (strlen($arFields["s1_code"])) { $userProps .= '<p><b>Код домофона</b>: '.$arFields["s1_code"].';</p>'; } ;
	if (strlen($arFields["s1_time"])) { $userProps .= '<p><b>Желаемая дата доставки</b>: '.$arFields["s1_time"].';</p>'; } ;
	if (strlen($arFields["s1_time2"])) { $userProps .= '<p><b>Желаемое время доставки</b>: '.$arFields["s1_time2"].';</p>'; } ;
	$userProps .= '<h2>Данные плательщика</h2>';
	
	if (strlen($arFields["s2_name"])) { $userProps .= '<p><b>Фамилия, имя</b>: '.$arFields["s2_name"].';</p>'; } ;
	if (strlen($arFields["s2_email"])) { $userProps .= '<p><b>E-mail</b>: '.$arFields["s2_email"].';</p>'; } ;
	if (strlen($arFields["s2_phone"])) { $userProps .= '<p><b>Телефон</b>: '.$arFields["s2_phone"].';</p>'; } ;
	if (strlen($arFields["s2_phone2"])) { $userProps .= '<p><b>Дополнительный телефон</b>: '.$arFields["s2_phone2"].';</p>'; } ;
	if (count($arRemind)) { $userProps .= '<p><b>Оповещение о доставке</b>: '.implode(", ", $arRemind).';</p>'; } ;
	
	$dbq = CSaleBasket::GetList(Array(), Array("FUSER_ID"=>CSaleBasket::GetBasketUserID(), "ORDER_ID"=>$ORDER_ID));
	$sum = 0;
	$productCount = $dbq->SelectedRowsCount();
	$arProductsTable = '<table width="100%" border="1" cellpadding="4" cellspacing="4" style="border-collapse:collapse;">';
	$arProductsTable .= '<tr>
		<td><b>Позиция / Артикул</b></td>
		<td><b>Цена</b></td>
		<td><b>Кол-во</b></td>
		<td><b>Сумма</b></td>
	</tr>';
	$cnt=1;
	while ($arq = $dbq->GetNext()) {
		
		$dbElement = CIBlockElement::GetList(Array("ID"=>"ASC"), Array("IBLOCK_ID"=>1, "=ID"=>$arq["PRODUCT_ID"]), false, Array("nTopCount"=>1), Array("ID", "NAME", "PROPERTY_ARTICUL", "PROPERTY_QMAX", "PROPERTY_PRICE1", "PROPERTY_PRICE2", "PROPERTY_PRICE3"));
		$arElement = $dbElement->GetNext();
		
		$curSUM = 0;
		
		if ($arElement["PROPERTY_QMAX_VALUE"]) {
			$curSUM = specificPrice($arq["QUANTITY"], $arElement["PROPERTY_QMAX_VALUE"], $arq["PRICE"], $arElement["PROPERTY_PRICE1_VALUE"], $arElement["PROPERTY_PRICE2_VALUE"], $arElement["PROPERTY_PRICE3_VALUE"]);
			$sum = $sum + $curSUM;
		} else {
			$curSUM = $arq["PRICE"]*$arq["QUANTITY"];
			$sum = $sum + $curSUM;
		}
		
		$arProductsTable .= '<tr>
			<td>'.$arElement["NAME"].' / арт.'.$arElement["PROPERTY_ARTICUL_VALUE"].'</td>
			<td>'.intval($arq["PRICE"]).'</td>
			<td>'.intval($arq["QUANTITY"]).'</td>
			<td>'.intval($curSUM).'</td>
		</tr>';
		
	}
	$arProductsTable .= '</table>';
	
	$sum = number_format($sum, 0, "", " ");
	
	if (strlen($arFields["s2_email"]) > 0) {
		$arFields = Array(
			"NAME" => $arFields["s2_name"],
			"EMAIL" => $arFields["s2_email"],
			"ORDER_ID" => $ORDER_ID,
			"FIELDS" => $userProps,
			"TABLE" => $arProductsTable,
			"SUM" => $sum
		);
		CEvent::SendImmediate("ORDER_INFO", "s1", $arFields);
	}
	
	$arResult = Array(
		"status" => "ok",
		"id" =>  $ORDER_ID
	);
	echo htmlspecialchars(json_encode($arResult), ENT_NOQUOTES);
	
}

if ($_POST["action"] == "subscribe") {

	CModule::IncludeModule("subscribe");
	$dbSubscr = CSubscription::GetByEmail($_POST['email']);
	if ($dbSubscr->SelectedRowsCount() <= 0) {
		$subscr = new CSubscription;
		$arFields = Array(
			"USER_ID" => false,
			"FORMAT" => "html",
			"EMAIL" => $_POST['email'],
			"ACTIVE" => "Y",
			"CONFIRMED" => "Y",
			"RUB_ID" => Array(1),
			"SEND_CONFIRM" => "N"
		);
		$subscr = new CSubscription;
		$subscr->Add($arFields);
		echo 'done';
	} else {
		echo 'error';
	}

}

if ($_POST["action"] == "feedback") {

	$arEventFields = Array(
		"NAME" => $_POST["name"],
		"PHONE" => $_POST["phone"],
		"EMAIL" => $_POST["email"],
		"TEXT" => $_POST["text"]
	);
	CEvent::SendImmediate("FEEDBACK", "s1", $arEventFields);
	//mail('evgeny.donich@gmail.com', 'Test', $_POST["text"]);
	echo 'done';

}

if ($_POST["action"] == "email_order") {

	$arEventFields = Array(
		"NAME" => $_POST["name"],
		"PHONE" => $_POST["phone"],
		"PAGE" => $_POST["page"],
        "TOVAR" => $_POST["tover"]
	);
	CEvent::SendImmediate("EMAIL_ORDER", "s1", $arEventFields);
	//mail('evgeny.donich@gmail.com', 'Test', $_POST["text"]);
	echo 'done';

}

if ($_POST["action"] == "callback") {

	$arEventFields = Array(
		"NAME" => $_POST["name"],
		"PHONE" => $_POST["phone"],
	);
	CEvent::SendImmediate("CALLBACK", "s1", $arEventFields);
	//mail('evgeny.donich@gmail.com', 'Test', $_POST["text"]);
	echo 'done';

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>