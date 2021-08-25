<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Полезная документация (сертификаты, разрешения)");
$APPLICATION->SetTitle("Документация ООО \"Компания Еврокран\"");
?>
    <h1>Документация</h1>
<?$APPLICATION->IncludeComponent(
	"innova:iblockgallery",
	"",
	Array(
		"CACHE_TYPE" => "N",
		"COUNT_COLS" => "4",
		"COUNT_COLS_MOB" => "3",
		"COUNT_IMAGE" => "18",
		"COUNT_IMAGE_PAGE" => "6",
		"DESCRIPTION" => "N",
		"DESCRIPTION_MAX" => "200",
		"IBLOCK_ID" => "7",
		"ROTATE_HOVER" => "N",
		"SCALE_HOVER" => "Y",
		"TITLE_HOVER" => "N",
		"VIEW_TYPE" => "grid"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>