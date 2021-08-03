<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arReturn = array(
	''         => GetMessage("SS_IMAGER_MODULE_OPTIONS"),
	'template' => GetMessage("SS_IMAGER_RETURN_1"),
	'src'      => GetMessage("SS_IMAGER_RETURN_2"),
	'array'    => GetMessage("SS_IMAGER_RETURN_3"),
);

$arMode = array(
	''  => GetMessage("SS_IMAGER_MODULE_OPTIONS"),
	'1' => GetMessage("SS_IMAGER_MODE_1"),
	'2' => GetMessage("SS_IMAGER_MODE_2"),
	'3' => GetMessage("SS_IMAGER_MODE_3"),
	'4' => GetMessage("SS_IMAGER_MODE_4"),
	'5' => GetMessage("SS_IMAGER_MODE_5"),
	'6' => GetMessage("SS_IMAGER_MODE_6"),
	'7' => GetMessage("SS_IMAGER_MODE_7"),
);

$arPosition = array(
	''   => GetMessage("SS_IMAGER_MODULE_OPTIONS"),
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
	''               => GetMessage("SS_IMAGER_MODULE_OPTIONS"),
	'N'              => GetMessage("SS_IMAGER_NOT_USE"),
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

$arUse = array(
	''  => GetMessage("SS_IMAGER_MODULE_OPTIONS"),
	'Y' => GetMessage("SS_IMAGER_USE"),
	'N' => GetMessage("SS_IMAGER_NOT_USE"),
);

$arComponentParameters = array(
	"GROUPS" => array(
		"MODE" => array(
			"NAME" => GetMessage("SS_IMAGER_MODE_GROUP"),
		),
		"CORNER" => array(
			"NAME" => GetMessage("SS_IMAGER_CORNER_GROUP"),
		),
		"WATERMARK" => array(
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_GROUP"),
		),
		"CACHE" => array(
			"NAME" => GetMessage("SS_IMAGER_CACHE_GROUP"),
		),
		"TEXT" => array(
			"NAME" => GetMessage("SS_IMAGER_TEXT_GROUP"),
		),
	),
	"PARAMETERS" => array(
		"MODE" => Array(
			"PARENT" => "MODE",
			"NAME" => GetMessage("SS_IMAGER_MODE"),
			"TYPE" => "LIST",
			"VALUES" => $arMode,
			"DEFAULT" => "1",
		),
		"RETURN" => Array(
			"PARENT" => "MODE",
			"NAME" => GetMessage("SS_IMAGER_RETURN"),
			"TYPE" => "LIST",
			"VALUES" => $arReturn,
			"DEFAULT" => "template",
		),
		"FILTERTYPE" => Array(
			"PARENT" => "MODE",
			"NAME" => GetMessage("SS_IMAGER_FILTERTYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arFiltertype,
			"DEFAULT" => "",
		),
		"RESIZE_SMALL" => Array(
			"PARENT" => "MODE",
			"NAME" => GetMessage("SS_IMAGER_RESIZE_SMALL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"IMAGE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_IMAGE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"SAVE_DIR" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_SAVE_DIR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"WIDTH" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"HEIGHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"BG" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_BG"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"QUALITY" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_QUALITY"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"FILE_NAME" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_IMAGER_FILE_NAME"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"ADD_WATERMARK" => Array(
			"PARENT" => "WATERMARK",
			"NAME" => GetMessage("SS_IMAGER_ADD_WATERMARK"),
			"TYPE" => "LIST",
			"VALUES" => $arUse,
			"DEFAULT" => "",
		),
		"WATERMARK_PATH" => Array(
			"PARENT" => "WATERMARK",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"WATERMARK_POSITION" => Array(
			"PARENT" => "WATERMARK",
			"NAME" => GetMessage("SS_IMAGER_WATERMARK_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"ADD_CORNER" => Array(
			"PARENT" => "CORNER",
			"NAME" => GetMessage("SS_IMAGER_ADD_CORNER"),
			"TYPE" => "LIST",
			"VALUES" => $arUse,
			"DEFAULT" => "",
		),
		"CORNER_PATH" => Array(
			"PARENT" => "CORNER",
			"NAME" => GetMessage("SS_IMAGER_CORNER_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"ADD_TEXT" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_ADD_TEXT"),
			"TYPE" => "LIST",
			"VALUES" => $arUse,
			"DEFAULT" => "",
		),
		"TEXT" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"TEXT_SIZE" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_SIZE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"TEXT_COLOR" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"TEXT_Y" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_Y"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"TEXT_X" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_X"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"TEXT_POSITION" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => $arPosition,
			"DEFAULT" => "",
		),
		"TEXT_ANGLE" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_TEXT_ANGLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"FONT_PATH" => Array(
			"PARENT" => "TEXT",
			"NAME" => GetMessage("SS_IMAGER_FONT_PATH"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"CACHE_IMAGE" => Array(
			"PARENT" => "CACHE",
			"NAME" => GetMessage("SS_IMAGER_CACHE_IMAGE"),
			"TYPE" => "LIST",
			"VALUES" => $arUse,
			"DEFAULT" => "",
		),
		"DEBUG" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("SS_IMAGER_DEBUG"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		)
	),
);
?>