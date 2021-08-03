<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

global $MESS;
include_once(GetLangFileName(dirname(__FILE__)."/lang/", "/.parameters_imager.php"));

$arProperty_LNS = array();
$arProperty_LNS['-'] = "";
$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch()){
	if($arr["PROPERTY_TYPE"] == 'F' && $arr["MULTIPLE"] == 'Y'){
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}

$arMode = array(
	'1' => GetMessage("SS_IMAGER_MODE_1"),
	'2' => GetMessage("SS_IMAGER_MODE_2"),
	'3' => GetMessage("SS_IMAGER_MODE_3"),
	'4' => GetMessage("SS_IMAGER_MODE_4"),
	'5' => GetMessage("SS_IMAGER_MODE_5"),
	'6' => GetMessage("SS_IMAGER_MODE_6"),
	'7' => GetMessage("SS_IMAGER_MODE_7"),
);

$arPosition = array(
	'tl' => GetMessage("SS_IMAGER_POSITION_TL"),
	'tc' => GetMessage("SS_IMAGER_POSITION_TC"),
	'tr' => GetMessage("SS_IMAGER_POSITION_TR"),
	'ml' => GetMessage("SS_IMAGER_POSITION_ML"),
	'mc' => GetMessage("SS_IMAGER_POSITION_MC"),
	'mr' => GetMessage("SS_IMAGER_POSITION_MR"),
	'bl' => GetMessage("SS_IMAGER_POSITION_BL"),
	'bc' => GetMessage("SS_IMAGER_POSITION_BC"),
	'br' => GetMessage("SS_IMAGER_POSITION_BR"),
);

$arFiltertype = array(
	''               => GetMessage("SS_IMAGER_NOT_USE"),
	'negate'         => GetMessage("SS_IMAGER_FILTERTYPE_NEGATE"),
	'grayscale'      => GetMessage("SS_IMAGER_FILTERTYPE_GRAYSCALE"),
	'emboss'         => GetMessage("SS_IMAGER_FILTERTYPE_EMBOSS"),
	'blur'           => GetMessage("SS_IMAGER_FILTERTYPE_BLUR"),
	'brightness:25'  => GetMessage("SS_IMAGER_FILTERTYPE_BRIGHTNESS_25"),
	'brightness:50'  => GetMessage("SS_IMAGER_FILTERTYPE_BRIGHTNESS_50"),
	'brightness:75'  => GetMessage("SS_IMAGER_FILTERTYPE_BRIGHTNESS_75"),
	'brightness:100' => GetMessage("SS_IMAGER_FILTERTYPE_BRIGHTNESS_100"),
	'contrast:10'    => GetMessage("SS_IMAGER_FILTERTYPE_CONTRAST_10"),
	'contrast:20'    => GetMessage("SS_IMAGER_FILTERTYPE_CONTRAST_20"),
	'contrast:30'    => GetMessage("SS_IMAGER_FILTERTYPE_CONTRAST_30"),
	'contrast:40'    => GetMessage("SS_IMAGER_FILTERTYPE_CONTRAST_40"),
	'meanremoval'    => GetMessage("SS_IMAGER_FILTERTYPE_MEAN_REMOVAL"),
);

$arScript = array(
	''          => GetMessage("SS_IMAGER_NOT_USE"),
	'fancybox'  => GetMessage("SS_IMAGER_SCRIPT_FANCYBOX"),
	'highslide' => GetMessage("SS_IMAGER_SCRIPT_HIGHSLIDE"),
	'lightbox'  => GetMessage("SS_IMAGER_SCRIPT_LIGHTBOX"),
	'balupton'  => GetMessage("SS_IMAGER_SCRIPT_BALUPTON"),
);

$arImagerComponentParameters = array(
	'GROUPS' => array(
		"IMAGER_MAIN" => array(
			"NAME" => GetMessage("SS_IMAGER_GROUP_MAIN"),
		),
		"IMAGER_PREVIEW_PICTURE" => array(
			"NAME" => GetMessage("SS_IMAGER_GROUP_PREVIEW_PICTURE"),
		),
		"IMAGER_DETAIL_PICTURE" => array(
			"NAME" => GetMessage("SS_IMAGER_GROUP_DETAIL_PICTURE"),
		),
		"IMAGER_GALLERY_PREVIEW_PICTURE" => array(
			"NAME" => GetMessage("SS_IMAGER_GROUP_GALLERY_PREVIEW_PICTURE"),
		),
		"IMAGER_GALLERY_DETAIL_PICTURE" => array(
			"NAME" => GetMessage("SS_IMAGER_GROUP_GALLERY_DETAIL_PICTURE"),
		),
	),
	'PARAMETERS' => array(
	
		// IMAGER
		
		"IMAGER_USE" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_USE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"IMAGER_PREVIEW_USE" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_PREVIEW_USE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"IMAGER_DETAIL_USE" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_DETAIL_USE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"IMAGER_GALLERY_USE" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_GALLERY_USE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"IMAGER_MORE_PHOTO_CODE" => array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_MORE_PHOTO_CODE"),
			"TYPE" => "LIST",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "",
		),
		"IMAGER_INCLUDE_JQUERY" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_INCLUDE_JQUERY"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_INCLUDE_SCRIPT" => Array(
			"PARENT" => "IMAGER_MAIN",
			"NAME" => GetMessage("SS_IMAGER_INCLUDE_SCRIPT"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		
		// PREVIEW_PICTURE
		
		"IMAGER_PREVIEW_MODE" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_MODE"),
			"TYPE" => "LIST",
			"VALUES" => $arMode,
			"DEFAULT" => "1",
		),
		"IMAGER_PREVIEW_FILTERTYPE" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FILTERTYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arFiltertype,
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_RESIZE_SMALL" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_RESIZE_SMALL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_PREVIEW_WIDTH" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "150",
		),
		"IMAGER_PREVIEW_HEIGHT" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "150",
		),
		"IMAGER_PREVIEW_IMAGER_PREVIEW_BG" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_BG"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_QUALITY" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_QUALITY"),
			"TYPE" => "STRING",
			"DEFAULT" => "75",
		),
		"IMAGER_PREVIEW_ADD_WATERMARK" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_WATERMARK"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_PREVIEW_WATERMARK_PATH" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_WATERMARK_POSITION" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_ADD_CORNER" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_CORNER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_PREVIEW_CORNER_PATH" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_CORNER_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_ADD_TEXT" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_TEXT"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_PREVIEW_TEXT" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_SIZE" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_SIZE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_COLOR" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_Y" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_Y"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_X" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_X"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_POSITION" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_TEXT_ANGLE" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_ANGLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_FONT_PATH" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FONT_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_PREVIEW_USE_DETAIL" => Array(
			"PARENT" => "IMAGER_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_USE_DETAIL_PICTURE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		
		// DETAIL_PICTURE
		
		"IMAGER_DETAIL_MODE" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_MODE"),
			"TYPE" => "LIST",
			"VALUES" => $arMode,
			"DEFAULT" => "1",
		),
		"IMAGER_DETAIL_FILTERTYPE" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FILTERTYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arFiltertype,
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_RESIZE_SMALL" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_RESIZE_SMALL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_DETAIL_WIDTH" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "800",
		),
		"IMAGER_DETAIL_HEIGHT" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "600",
		),
		"IMAGER_DETAIL_IMAGER_DETAIL_BG" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_BG"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_QUALITY" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_QUALITY"),
			"TYPE" => "STRING",
			"DEFAULT" => "85",
		),
		"IMAGER_DETAIL_ADD_WATERMARK" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_WATERMARK"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"IMAGER_DETAIL_WATERMARK_PATH" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_WATERMARK_POSITION" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_ADD_CORNER" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_CORNER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_DETAIL_CORNER_PATH" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_CORNER_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_ADD_TEXT" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_TEXT"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_DETAIL_TEXT" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_SIZE" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_SIZE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_COLOR" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_Y" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_Y"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_X" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_X"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_POSITION" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_TEXT_ANGLE" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_ANGLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_FONT_PATH" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FONT_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_DETAIL_SCRIPT" => Array(
			"PARENT" => "IMAGER_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_SCRIPT"),
			"TYPE" => "LIST",
			"VALUES" => $arScript,
			"DEFAULT" => "",
		),
		
		// GALLERY_PREVIEW_PICTURE
		
		"IMAGER_GALLERY_PREVIEW_MODE" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_MODE"),
			"TYPE" => "LIST",
			"VALUES" => $arMode,
			"DEFAULT" => "1",
		),
		"IMAGER_GALLERY_PREVIEW_FILTERTYPE" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FILTERTYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arFiltertype,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_RESIZE_SMALL" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_RESIZE_SMALL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_PREVIEW_WIDTH" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "150",
		),
		"IMAGER_GALLERY_PREVIEW_HEIGHT" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "150",
		),
		"IMAGER_GALLERY_PREVIEW_IMAGER_GALLERY_PREVIEW_BG" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_BG"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_QUALITY" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_QUALITY"),
			"TYPE" => "STRING",
			"DEFAULT" => "75",
		),
		"IMAGER_GALLERY_PREVIEW_ADD_WATERMARK" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_WATERMARK"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_PREVIEW_WATERMARK_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_WATERMARK_POSITION" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_ADD_CORNER" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_CORNER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_PREVIEW_CORNER_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_CORNER_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_ADD_TEXT" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_TEXT"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_SIZE" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_SIZE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_COLOR" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_Y" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_Y"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_X" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_X"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_POSITION" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_TEXT_ANGLE" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_ANGLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_PREVIEW_FONT_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_PREVIEW_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FONT_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		
		// GALLERY_DETAIL_PICTURE
		
		"IMAGER_GALLERY_DETAIL_MODE" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_MODE"),
			"TYPE" => "LIST",
			"VALUES" => $arMode,
			"DEFAULT" => "1",
		),
		"IMAGER_GALLERY_DETAIL_FILTERTYPE" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FILTERTYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arFiltertype,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_RESIZE_SMALL" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_RESIZE_SMALL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_DETAIL_WIDTH" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "800",
		),
		"IMAGER_GALLERY_DETAIL_HEIGHT" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "600",
		),
		"IMAGER_GALLERY_DETAIL_BG" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_BG"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_QUALITY" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_QUALITY"),
			"TYPE" => "STRING",
			"DEFAULT" => "85",
		),
		"IMAGER_GALLERY_DETAIL_ADD_WATERMARK" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_WATERMARK"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"IMAGER_GALLERY_DETAIL_WATERMARK_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_WATERMARK_POSITION" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_ADD_CORNER" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_CORNER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_DETAIL_CORNER_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_CORNER_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_ADD_TEXT" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_ADD_TEXT"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"IMAGER_GALLERY_DETAIL_TEXT" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_SIZE" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_SIZE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_COLOR" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_Y" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_Y"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_X" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_X"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_POSITION" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_TEXT_ANGLE" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_TEXT_ANGLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_FONT_PATH" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_FONT_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"IMAGER_GALLERY_DETAIL_SCRIPT" => Array(
			"PARENT" => "IMAGER_GALLERY_DETAIL_PICTURE",
			"NAME" => GetMessage("SS_IMAGER_SCRIPT"),
			"TYPE" => "LIST",
			"VALUES" => $arScript,
			"DEFAULT" => "",
		),
	)
);


foreach($arImagerComponentParameters['PARAMETERS'] as $code=>$param)
{
	if(	($arCurrentValues["IMAGER_USE"] != 'Y' && $code != 'IMAGER_USE') ||
		($arCurrentValues["IMAGER_PREVIEW_USE"] != 'Y' && strpos($code, 'IMAGER_PREVIEW') !== false && $code != 'IMAGER_PREVIEW_USE') ||
		($arCurrentValues["IMAGER_DETAIL_USE"] != 'Y' && strpos($code, 'IMAGER_DETAIL') !== false && $code != 'IMAGER_DETAIL_USE') ||
		($arCurrentValues["IMAGER_GALLERY_USE"] != 'Y' && (strpos($code, 'IMAGER_GALLERY_PREVIEW') !== false || strpos($code, 'IMAGER_GALLERY_DETAIL') !== false || strpos($code, 'IMAGER_MORE_PHOTO_CODE') !== false) && $code != 'IMAGER_GALLERY_USE')	)
	{
		unset($arImagerComponentParameters['PARAMETERS'][$code]);
	}
}

$arComponentParameters = array_merge_recursive($arComponentParameters, $arImagerComponentParameters);
?>