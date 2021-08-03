<?
// константы использующиеся в исходящих письмах
define("MY_ADMIN_EMAIL", COption::GetOptionString("main", "email_from"));
define("MY_SITE_NAME", COption::GetOptionString("main", "site_name"));
define("MY_SITE_URL", COption::GetOptionString("main", "server_name"));

/* Debug */
function p($str){?>
	<pre><?print_r($str);?></pre>
<?}

AddEventHandler("main", "OnBeforeProlog", "osh404");
function osh404()
{
    global $APPLICATION;
    $dir = $APPLICATION->GetCurDir();
    $dir_mass = explode("/", $dir);
    if($dir_mass[1]=="tehnika"){
        if(CModule::IncludeModule("iblock"))
        {
            $rsSections = CIBlockSection::GetList(array(),array('IBLOCK_ID' => 1, '=CODE' => $dir_mass[2], "ACTIVE"=>'Y'));
            if (!$arSection = $rsSections->Fetch())
            {
                GLOBAL $APPLICATION;
                $APPLICATION->RestartBuffer();
                require $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/'.SITE_TEMPLATE_ID.'/header.php';
                require $_SERVER['DOCUMENT_ROOT'].'/404.php';
                require $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/'.SITE_TEMPLATE_ID.'/footer.php';
            }
        }

    }

}

// echo "<pre>"; print_r($_SESSION); echo "</pre>";

/////////////////
/////////// функции
////////

// addToRequestURI
function addToRequestURI($pm, $val) {
	if (substr_count($_SERVER["REQUEST_URI"], "?")) {
		$arURI = explode("?", $_SERVER["REQUEST_URI"]);
		$pureURI = $arURI[0];
		$arRequests = explode("&", $arURI[1]);
		$arNewRequests = Array();
			foreach ($arRequests as $request) {
				$arTMP = explode("=", $request);
				if ($arTMP[0] != $pm) {
					$arNewRequests[] = $request;
				}
			}
			$arNewRequests[] = $pm."=".$val;
		return $pureURI."?".implode("&", $arNewRequests);
	} else {
		return $_SERVER["REQUEST_URI"]."?".$pm."=".$val;
	}
}

// addToRequestURIm
function addToRequestURIm($pm, $val) {
	if (substr_count($_SERVER["REQUEST_URI"], "?")) {
		$arURI = explode("?", $_SERVER["REQUEST_URI"]);
		$pureURI = $arURI[0];
		$arSORT = Array(
			0 => "sort_code=asc",
			1 => "sort_code=desc",
			2 => "sort_producer=asc",
			3 => "sort_producer=desc",
			4 => "sort_cost=asc",
			5 => "sort_cost=desc"
		);
		$arURI[1] = str_replace($arSORT, "", $arURI[1]);
		$arURI[1] = str_replace("&&", "&", $arURI[1]);
		$arRequests = explode("&", $arURI[1]);
		$arNewRequests = Array();
			foreach ($arRequests as $request) {
				$arTMP = explode("=", $request);
				if ($arTMP[0] != $pm) {
					$arNewRequests[] = $request;
				}
			}
			$arNewRequests[] = $pm."=".$val;
			
		$result = $pureURI."?".implode("&", $arNewRequests);
		$result = str_replace("&&", "&", $result);
			
		return $result;
	} else {
		
		$result = $_SERVER["REQUEST_URI"]."?".$pm."=".$val;
		$result = str_replace("&&", "&", $result);
		
		return $result;
	}
}

// ArrayClearing
function ArrayClearing($array) {
	$ret_arr = array();
	foreach($array as $val)
	{
		if (!empty($val))
		{
			$ret_arr[] = trim($val);
		}
	}
	return $ret_arr;
}

// isMAIN
function isMain() {
	$arURI = explode("/", $_SERVER["REQUEST_URI"]);
	if (substr_count($arURI[1], "?")) {
		$pos = strpos($arURI[1], "?");
		$arURI[1] = substr($arURI[1], 0, $pos);
	}
	if (substr_count($arURI[1], "index.php")) {
		return true;
	} elseif (count($arURI) > 1 && strlen(trim($arURI[1])) == 0) {
		return true;
	} else {
		return false;
	}
}

// editDATE
function editDATE($DATA) {
	$DATA = substr($DATA, 0, 10);
	$MES = array(
	"01" => "Января",
	"02" => "Февраля",
	"03" => "Марта",
	"04" => "Апреля",
	"05" => "Мая",
	"06" => "Июня",
	"07" => "Июля",
	"08" => "Августа",
	"09" => "Сентября",
	"10" => "Октября",
	"11" => "Ноября",
	"12" => "Декабря"
	);
	$arData = explode(".", $DATA);
	$d = ($arData[0] < 10) ? substr($arData[0], 1) : $arData[0];

	$newData = $d." ".$MES[$arData[1]]." ".$arData[2];
	return $newData;
}

// editDATE2
function editDATE2($DATA) {
	$DATA = substr($DATA, 0, 10);
	$MES = array(
	"01" => "Января",
	"02" => "Февраля",
	"03" => "Марта",
	"04" => "Апреля",
	"05" => "Мая",
	"06" => "Июня",
	"07" => "Июля",
	"08" => "Августа",
	"09" => "Сентября",
	"10" => "Октября",
	"11" => "Ноября",
	"12" => "Декабря"
	);
	$arData = explode(".", $DATA);
	$d = ($arData[0] < 10) ? substr($arData[0], 1) : $arData[0];

	$newData = $d." ".$MES[$arData[1]];
	return $newData;
}

// rIMG
function rIMG($image, $mode, $width, $height) {
	if (!$image) { $image = false; }
	if (!$mode) { $mode = "4"; }
	if (!$width) { $width = ""; }
	if (!$height) { $height = ""; }
	
	if (CModule::IncludeModule("imager") && $image) {
		global $APPLICATION;
		$image = $APPLICATION->IncludeComponent("soulstream:imager", "", Array(
			"MODE" => $mode,
			"RETURN" => "src",
			"RESIZE_SMALL" => "Y",
			"IMAGE" => CFile::GetPath($image),
			"FILE_NAME" => "",
			"WIDTH" => $width,
			"HEIGHT" => $height,
			"SAVE_DIR" => "",
			"BG" => "#ffffff",
			"QUALITY" => "90",
			"DEBUG" => "N",
			"FILTERTYPE" => "",
			"ADD_CORNER" => "N",
			"CORNER_PATH" => "",
			"ADD_WATERMARK" => "N",
			"WATERMARK_PATH" => "/bitrix/php_interface/watermark.png",
			"WATERMARK_POSITION" => "",
			"CACHE_IMAGE" => "Y",
			"ADD_TEXT" => "N",
			"TEXT" => "",
			"TEXT_SIZE" => "",
			"TEXT_COLOR" => "",
			"TEXT_Y" => "",
			"TEXT_X" => "",
			"TEXT_POSITION" => "",
			"TEXT_ANGLE" => "",
			"FONT_PATH" => ""
			),
			false, array("HIDE_ICONS"=>"Y")
		);
		return $image;
	}
}


// Подключаем файл с функциями наложения водяного знака
require_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/watermark.php');

// Создание элемента
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', array('CWatermark', 'ImageUpdate'));

// Изменение элемента
AddEventHandler('iblock', "OnBeforeIBlockElementUpdate", array('CWatermark', 'ImageUpdate'));
?>