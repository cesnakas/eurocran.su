</div>
		</section>
	</div>
	<footer>
		<div class="cont row">
			<div class="logo">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="">
				<div class="name"><?$APPLICATION->IncludeFile(SITE_DIR."include/area/name.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?></div>
				<div class="desc"><?$APPLICATION->IncludeFile(SITE_DIR."include/area/desc.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?></div>
			</div>

			<div class="links">
				<div class="title">КЛИЕНТАМ</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "Y",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "main",
						"USE_EXT" => "N"
					)
				);?>
			</div>

			<div class="links">
				<div class="title">ТЕХНИКА</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "Y",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "equipment",
						"USE_EXT" => "N"
					)
				);?>
			</div>

			<div class="links">
				<div class="title">УСЛУГИ</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "Y",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "services",
						"USE_EXT" => "N"
					)
				);?>
			</div>

			<div class="contacts">
				<div class="title">КОНТАКТЫ</div>

				<?$APPLICATION->IncludeFile(SITE_DIR."include/area/phone.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?>
			</div>

			<div class="copyright">&copy; 2011-<?=date('Y')?> Все права защищены</div>
		</div>
	</footer>
</div>
<?use \Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.5.0.min.js',true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.min.js',true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/inputmask.min.js',true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/ion.rangeSlider.min.js',true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.validate.js',true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scripts.js',true);?>

<?CModule::IncludeModule("iblock");
$pureURI = $_SERVER["REQUEST_URI"];
if (substr_count($pureURI, "?")) {
	$pos = strpos($pureURI, "?");
	$pureURI = substr($pureURI, 0, $pos);
}
$arURI = explode("/", $pureURI);
if ($arURI[1] == "tehnika" && strlen($arURI[2]) > 0) {
	$q = CIBlockSection::GetList(Array(), Array("IBLOCK_ID"=>1, "CODE"=>$arURI[2]), false, Array("UF_TITLE", "UF_DESCRIPTION", "UF_KEYWORDS"));
	if ($a = $q->GetNext()) {
		if ($a["UF_TITLE"]) { $APPLICATION->SetPageProperty("title", $a["UF_TITLE"]); }
		if ($a["UF_DESCRIPTION"]) { $APPLICATION->SetPageProperty("description", $a["UF_DESCRIPTION"]); }
		if ($a["UF_KEYWORDS"]) { $APPLICATION->SetPageProperty("keywords", $a["UF_KEYWORDS"]); }
	}
	if (strlen($arURI[3]) > 0) {
		$q = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>1, "CODE"=>$arURI[3]), false, Array("nTopCount"=>1), Array("ID", "PROPERTY_TITLE", "PROPERTY_DESCRIPTION", "PROPERTY_KEYWORDS"));
		if ($a = $q->GetNext()) {
			if ($a["PROPERTY_TITLE_VALUE"]) { $APPLICATION->SetPageProperty("title", $a["PROPERTY_TITLE_VALUE"]); }
			if ($a["PROPERTY_DESCRIPTION_VALUE"]) { $APPLICATION->SetPageProperty("description", $a["PROPERTY_DESCRIPTION_VALUE"]); }
			if ($a["PROPERTY_KEYWORDS_VALUE"]) { $APPLICATION->SetPageProperty("keywords", $a["PROPERTY_KEYWORDS_VALUE"]); }
		}
	}
}?>
</body>
</html>