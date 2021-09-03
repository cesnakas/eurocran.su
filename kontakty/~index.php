<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ООО \"Компания ЕвроКран\" ► Контакты");
$APPLICATION->SetPageProperty("title", "Контакты компании Еврокран, адрес и телефоны, время работы");
$APPLICATION->SetPageProperty("description", "ООО \"Компания ЕвроКран\" ► Москва, Россия, 117628, 🚇 Бульвар Дмитрия Донского, ул. Куликовская, 12. ☎ +7(495) 226-20-30 ✓ ☎ +7(495) 364-55-18 ✓ ☎ +7(495) 645-19-20 ✓.");
?> 
<h1 class="title_main">КОНТАКТЫ</h1>
<div class="contact-info clearfix top_contact">
    <? $APPLICATION->IncludeFile("inc/contacts_info.php", Array(), Array("MODE"=>"html")); ?>
</div>

<div class="overflow-hidden bottom_contact">

<?$APPLICATION->IncludeComponent("bitrix:map.yandex.view", ".default", array(
	"INIT_MAP_TYPE" => "MAP",
	"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.57217180386795;s:10:\"yandex_lon\";d:37.56353708701697;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.564031040384;s:3:\"LAT\";d:55.572242586205;s:4:\"TEXT\";s:42:\"ООО \"Компания ЕвроКран\"\";}}}",
	"MAP_WIDTH" => "100%",
	"MAP_HEIGHT" => "500",
	"CONTROLS" => array(
		0 => "ZOOM",
		1 => "MINIMAP",
		2 => "TYPECONTROL",
		3 => "SCALELINE",
	),
	"OPTIONS" => array(
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => ""
	),
	false
);?>


</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>