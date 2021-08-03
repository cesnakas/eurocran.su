<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

global $APPLICATION;

if($arParams['IMAGER_USE'] == 'Y')
{
	if($arParams['IMAGER_PREVIEW_USE'] == 'Y' && (is_array($arResult['PREVIEW_PICTURE']) || ($arResult['DETAIL_PICTURE'] && $arParams['IMAGER_PREVIEW_USE_DETAIL'] == 'Y')))
	{
		$arResult['PREVIEW_PICTURE'] = $APPLICATION->IncludeComponent("soulstream:imager", "", array(
				"MODE" => $arParams['IMAGER_PREVIEW_MODE'],
				"RETURN" => "array",
				"FILTERTYPE" => $arParams['IMAGER_PREVIEW_FILTERTYPE'],
				"RESIZE_SMALL" => $arParams['IMAGER_PREVIEW_RESIZE_SMALL'],
				"IMAGE" => $arParams['IMAGER_PREVIEW_USE_DETAIL'] == 'Y' ? $arResult['DETAIL_PICTURE']["SRC"] : $arResult['PREVIEW_PICTURE']["SRC"],
				"FILE_NAME" => "",
				"SAVE_DIR" => "",
				"WIDTH" => $arParams['IMAGER_PREVIEW_WIDTH'],
				"HEIGHT" => $arParams['IMAGER_PREVIEW_HEIGHT'],
				"BG" => $arParams['IMAGER_PREVIEW_BG'],
				"QUALITY" => $arParams['IMAGER_PREVIEW_QUALITY'],
				"ADD_WATERMARK" => $arParams['IMAGER_PREVIEW_ADD_WATERMARK'],
				"WATERMARK_PATH" => $arParams['IMAGER_PREVIEW_WATERMARK_PATH'],
				"WATERMARK_POSITION" => $arParams['IMAGER_PREVIEW_WATERMARK_POSITION'],
				"ADD_CORNER" => $arParams['IMAGER_PREVIEW_ADD_CORNER'],
				"CORNER_PATH" => $arParams['IMAGER_PREVIEW_CORNER_PATH'],
				"ADD_TEXT" => $arParams['IMAGER_PREVIEW_ADD_TEXT'],
				"TEXT" => $arParams['IMAGER_PREVIEW_TEXT'],
				"TEXT_SIZE" => $arParams['IMAGER_PREVIEW_TEXT_SIZE'],
				"TEXT_COLOR" => $arParams['IMAGER_PREVIEW_TEXT_COLOR'],
				"TEXT_Y" => $arParams['IMAGER_PREVIEW_TEXT_Y'],
				"TEXT_X" => $arParams['IMAGER_PREVIEW_TEXT_X'],
				"TEXT_POSITION" => $arParams['IMAGER_PREVIEW_TEXT_POSITION'],
				"TEXT_ANGLE" => $arParams['IMAGER_PREVIEW_TEXT_ANGLE'],
				"FONT_PATH" => $arParams['IMAGER_PREVIEW_FONT_PATH'],
			),
			false, array("HIDE_ICONS"=>"Y")
		);
	}
	
	if($arParams['IMAGER_DETAIL_USE'] == 'Y' && is_array($arResult['DETAIL_PICTURE']))
	{
		$arResult['DETAIL_PICTURE'] = $APPLICATION->IncludeComponent("soulstream:imager", "", array(
				"MODE" => $arParams['IMAGER_DETAIL_MODE'],
				"RETURN" => "array",
				"FILTERTYPE" => $arParams['IMAGER_DETAIL_FILTERTYPE'],
				"RESIZE_SMALL" => $arParams['IMAGER_DETAIL_RESIZE_SMALL'],
				"IMAGE" => $arResult['DETAIL_PICTURE']["SRC"],
				"FILE_NAME" => "",
				"SAVE_DIR" => "",
				"WIDTH" => $arParams['IMAGER_DETAIL_WIDTH'],
				"HEIGHT" => $arParams['IMAGER_DETAIL_HEIGHT'],
				"BG" => $arParams['IMAGER_DETAIL_BG'],
				"QUALITY" => $arParams['IMAGER_DETAIL_QUALITY'],
				"ADD_WATERMARK" => $arParams['IMAGER_DETAIL_ADD_WATERMARK'],
				"WATERMARK_PATH" => $arParams['IMAGER_DETAIL_WATERMARK_PATH'],
				"WATERMARK_POSITION" => $arParams['IMAGER_DETAIL_WATERMARK_POSITION'],
				"ADD_CORNER" => $arParams['IMAGER_DETAIL_ADD_CORNER'],
				"CORNER_PATH" => $arParams['IMAGER_DETAIL_CORNER_PATH'],
				"ADD_TEXT" => $arParams['IMAGER_DETAIL_ADD_TEXT'],
				"TEXT" => $arParams['IMAGER_DETAIL_TEXT'],
				"TEXT_SIZE" => $arParams['IMAGER_DETAIL_TEXT_SIZE'],
				"TEXT_COLOR" => $arParams['IMAGER_DETAIL_TEXT_COLOR'],
				"TEXT_Y" => $arParams['IMAGER_DETAIL_TEXT_Y'],
				"TEXT_X" => $arParams['IMAGER_DETAIL_TEXT_X'],
				"TEXT_POSITION" => $arParams['IMAGER_DETAIL_TEXT_POSITION'],
				"TEXT_ANGLE" => $arParams['IMAGER_DETAIL_TEXT_ANGLE'],
				"FONT_PATH" => $arParams['IMAGER_DETAIL_FONT_PATH'],
			),
			false, array("HIDE_ICONS"=>"Y")
		);
	}
	
	// More photo
	if($arParams['IMAGER_GALLERY_USE'] == 'Y' && $arParams['IMAGER_MORE_PHOTO_CODE'] && array_key_exists($arParams['IMAGER_MORE_PHOTO_CODE'], $arResult['PROPERTIES']))
	{
		$CODE = $arParams['IMAGER_MORE_PHOTO_CODE'];
		
		if($CODE && is_array($arResult['PROPERTIES'][$CODE]['VALUE']) && count($arResult['PROPERTIES'][$CODE]['VALUE']))
		{
			$arResult['GALLERY'] = array();
			$arResult['GALLERY_PREVIEW'] = array();
			
			foreach($arResult['PROPERTIES'][$CODE]['VALUE'] as $id)
			{
				$arImage = CFile::GetFileArray($id);
				
				$arResult['GALLERY'][] = $APPLICATION->IncludeComponent("soulstream:imager", "", array(
					"MODE" => $arParams['IMAGER_GALLERY_DETAIL_MODE'],
					"RETURN" => "array",
					"FILTERTYPE" => $arParams['IMAGER_GALLERY_DETAIL_FILTERTYPE'],
					"RESIZE_SMALL" => $arParams['IMAGER_GALLERY_DETAIL_RESIZE_SMALL'],
					"IMAGE" => $arImage["SRC"],
					"FILE_NAME" => "",
					"SAVE_DIR" => "",
					"WIDTH" => $arParams['IMAGER_GALLERY_DETAIL_WIDTH'],
					"HEIGHT" => $arParams['IMAGER_GALLERY_DETAIL_HEIGHT'],
					"BG" => $arParams['IMAGER_GALLERY_GALLERY_DETAIL_BG'],
					"QUALITY" => $arParams['IMAGER_GALLERY_DETAIL_QUALITY'],
					"ADD_WATERMARK" => $arParams['IMAGER_GALLERY_DETAIL_ADD_WATERMARK'],
					"WATERMARK_PATH" => $arParams['IMAGER_GALLERY_DETAIL_WATERMARK_PATH'],
					"WATERMARK_POSITION" => $arParams['IMAGER_GALLERY_DETAIL_WATERMARK_POSITION'],
					"ADD_CORNER" => $arParams['IMAGER_GALLERY_DETAIL_ADD_CORNER'],
					"CORNER_PATH" => $arParams['IMAGER_GALLERY_DETAIL_CORNER_PATH'],
					"ADD_TEXT" => $arParams['IMAGER_GALLERY_DETAIL_ADD_TEXT'],
					"TEXT" => $arParams['IMAGER_GALLERY_DETAIL_TEXT'],
					"TEXT_SIZE" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_SIZE'],
					"TEXT_COLOR" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_COLOR'],
					"TEXT_Y" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_Y'],
					"TEXT_X" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_X'],
					"TEXT_POSITION" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_POSITION'],
					"TEXT_ANGLE" => $arParams['IMAGER_GALLERY_DETAIL_TEXT_ANGLE'],
					"FONT_PATH" => $arParams['IMAGER_GALLERY_DETAIL_FONT_PATH'],
					),
					false, array("HIDE_ICONS"=>"Y")
				);
				
				$arResult['GALLERY_PREVIEW'][] = $APPLICATION->IncludeComponent("soulstream:imager", "", Array(
					"MODE" => $arParams['IMAGER_GALLERY_PREVIEW_MODE'],
					"RETURN" => "array",
					"FILTERTYPE" => $arParams['IMAGER_GALLERY_PREVIEW_FILTERTYPE'],
					"RESIZE_SMALL" => $arParams['IMAGER_GALLERY_GALLERY_PREVIEW_RESIZE_SMALL'],
					"IMAGE" => $arImage["SRC"],
					"FILE_NAME" => "",
					"SAVE_DIR" => "",
					"WIDTH" => $arParams['IMAGER_GALLERY_PREVIEW_WIDTH'],
					"HEIGHT" => $arParams['IMAGER_GALLERY_PREVIEW_HEIGHT'],
					"BG" => $arParams['IMAGER_GALLERY_PREVIEW_BG'],
					"QUALITY" => $arParams['IMAGER_GALLERY_PREVIEW_QUALITY'],
					"ADD_WATERMARK" => $arParams['IMAGER_GALLERY_PREVIEW_ADD_WATERMARK'],
					"WATERMARK_PATH" => $arParams['IMAGER_GALLERY_PREVIEW_WATERMARK_PATH'],
					"WATERMARK_POSITION" => $arParams['IMAGER_GALLERY_PREVIEW_WATERMARK_POSITION'],
					"ADD_CORNER" => $arParams['IMAGER_GALLERY_PREVIEW_ADD_CORNER'],
					"CORNER_PATH" => $arParams['IMAGER_GALLERY_PREVIEW_CORNER_PATH'],
					"ADD_TEXT" => $arParams['IMAGER_GALLERY_PREVIEW_ADD_TEXT'],
					"TEXT" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT'],
					"TEXT_SIZE" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_SIZE'],
					"TEXT_COLOR" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_COLOR'],
					"TEXT_Y" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_Y'],
					"TEXT_X" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_X'],
					"TEXT_POSITION" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_POSITION'],
					"TEXT_ANGLE" => $arParams['IMAGER_GALLERY_PREVIEW_TEXT_ANGLE'],
					"FONT_PATH" => $arParams['IMAGER_GALLERY_PREVIEW_FONT_PATH'],
					),
					false, array("HIDE_ICONS"=>"Y")
				);
			}
		}
	}
	
	unset($arResult["FIELDS"]["PREVIEW_PICTURE"]);
	unset($arResult["FIELDS"]["DETAIL_PICTURE"]);
	unset($arResult["DISPLAY_PROPERTIES"][$arParams['IMAGER_MORE_PHOTO_CODE']]);
}
?>