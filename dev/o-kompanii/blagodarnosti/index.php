<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Благодарности наших клиентов");
$APPLICATION->SetTitle("Благодарноcти");?>
<h1>Благодарноcти</h1>
<a style="text-decoration: underline;" href="eurocran.pdf">КОМПАНИЯ ЕВРОКРАН - Презентация</a><br> <br> <br> <br>
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
		"IBLOCK_ID" => "8",
		"ROTATE_HOVER" => "N",
		"SCALE_HOVER" => "Y",
		"TITLE_HOVER" => "N",
		"VIEW_TYPE" => "grid"
	)
);?><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>