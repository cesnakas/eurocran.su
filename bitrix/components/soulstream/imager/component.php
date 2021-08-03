<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*************************************************************************
	 Include Modules
*************************************************************************/

if(!CModule::IncludeModule("imager"))
{
	ShowError(GetMessage("SS_IMAGER_MODULE_NOT_FOUND"));
	return;
}


/*************************************************************************
	 Received parameters
*************************************************************************/

$arParams['MODE']               = intval($arParams['MODE']);
$arParams['RETURN']             = strtolower($arParams['RETURN']);
$arParams['FILTERTYPE']         = $arParams['FILTERTYPE'];
$arParams['IMAGE']              = $arParams['IMAGE'];
$arParams['FILE_NAME']          = $arParams['FILE_NAME'];
$arParams['SAVE_DIR']           = $arParams['SAVE_DIR'];
$arParams['WIDTH']              = intval($arParams['WIDTH']);
$arParams['HEIGHT']             = intval($arParams['HEIGHT']);
$arParams['BG']                 = $arParams['BG'];
$arParams['QUALITY']            = $arParams['QUALITY'];
$arParams['CACHE_IMAGE']        = $arParams['CACHE_IMAGE'];
$arParams['DEBUG']              = $arParams['DEBUG'] == 'Y';
$arParams['ADD_WATERMARK']      = $arParams['ADD_WATERMARK'];
$arParams['WATERMARK_PATH']     = $arParams['WATERMARK_PATH'];
$arParams['WATERMARK_POSITION'] = $arParams['WATERMARK_POSITION'];
$arParams['ADD_CORNER']         = $arParams['ADD_CORNER'];
$arParams['CORNER_PATH']        = $arParams['CORNER_PATH'];
$arParams['ADD_TEXT']           = $arParams['ADD_TEXT'];
$arParams['TEXT']               = $arParams['TEXT'];
$arParams['TEXT_SIZE']          = $arParams['TEXT_SIZE'];
$arParams['TEXT_ANGLE']         = $arParams['TEXT_ANGLE'];
$arParams['TEXT_Y']             = $arParams['TEXT_Y'];
$arParams['TEXT_X']             = $arParams['TEXT_X'];
$arParams['TEXT_COLOR']         = $arParams['TEXT_COLOR'];
$arParams['FONT_PATH']          = $arParams['FONT_PATH'];
$arParams['TEXT_POSITION']      = $arParams['TEXT_POSITION'];
$arParams['RESIZE_SMALL']       = $arParams['RESIZE_SMALL'];


/*************************************************************************
	 Get default values
*************************************************************************/

$arParams = CImager::GetDefault($arParams);


/*************************************************************************
	Get file info
*************************************************************************/

if(is_numeric($arParams['IMAGE']))
{
	// Registered file. Get & process
	if($arImage = CFile::GetFileArray($arParams['IMAGE']))
	{
		$arResult['IMAGE'] = $arParams['IMAGE'] = CImager::GetFullPath($arImage['SRC']);
	}
}
else
{
	$arResult['IMAGE'] = CImager::GetFullPath($arParams['IMAGE']);
}

if(!is_file($arResult['IMAGE']))
{
	$arResult['ERROR'][] = GetMessage("SS_IMAGER_IMAGE_NOT_FOUND");
}	


/*************************************************************************
	Save path
*************************************************************************/

$arResult['FULL_SAVE_PATH'] =  CImager::GetFullPath($arParams['SAVE_DIR']);

if(!$arParams['SAVE_DIR'])
{
	$arResult['ERROR'][] = GetMessage("SS_IMAGER_SAVE_DIR_UNDEFINED");
}
else
{
	if(!is_dir($arResult['FULL_SAVE_PATH']))
	{
		$arResult['ERROR'][] = GetMessage("SS_IMAGER_SAVE_DIR_NOT_FOUND");
	}
}


/*************************************************************************
	Processing
*************************************************************************/

if(!count($arResult['ERROR']))
{
	// Init new file name
	if($arParams['FILE_NAME'])
	{
		$EXT = CImager::GetFileNameExt($arResult['IMAGE']);
		$hash_file_name = $arParams['FILE_NAME'].'.'.$EXT;
	}
	else
	{
		$hash_file_name = CImager::GetHashName($arParams, false);
	}
	
	if($hash_file_name)
	{
		// Full path for new file
		$new_file_path = CImager::GetPath($arResult['FULL_SAVE_PATH'].'/'.$hash_file_name);
		
		// Path for new file
		$new_file_url  = CImager::GetPath($arParams['SAVE_DIR'].'/'.$hash_file_name);
			
		// Check file exists
		if(!file_exists($new_file_path) || $arParams['CACHE_IMAGE'] != 'Y')
		{
			$arImagerParams = array(
				'MODE'               => $arParams['MODE'],
				'FILTERTYPE'         => $arParams['FILTERTYPE'],
				'PATH2SOURCE'        => $arResult['IMAGE'],
				'PATH2RESULT'        => $new_file_path,
				'WIDTH'              => $arParams['WIDTH'],
				'HEIGHT'             => $arParams['HEIGHT'],
				'BG'                 => $arParams['BG'],
				'QUALITY'            => $arParams['QUALITY'],
				'ADD_WATERMARK'      => $arParams['ADD_WATERMARK'],
				'WATERMARK_PATH'     => $arParams['WATERMARK_PATH'],
				'WATERMARK_POSITION' => $arParams['WATERMARK_POSITION'],
				'ADD_CORNER'         => $arParams['ADD_CORNER'],
				'CORNER_PATH'        => $arParams['CORNER_PATH'],
				'ADD_TEXT'           => $arParams['ADD_TEXT'],
				'TEXT'               => $arParams['TEXT'],
				'TEXT_SIZE'          => $arParams['TEXT_SIZE'],
				'TEXT_ANGLE'         => $arParams['TEXT_ANGLE'],
				'TEXT_Y'             => $arParams['TEXT_Y'],
				'TEXT_X'             => $arParams['TEXT_X'],
				'TEXT_POSITION'      => $arParams['TEXT_POSITION'],
				'TEXT_COLOR'         => $arParams['TEXT_COLOR'],
				'FONT_PATH'          => $arParams['FONT_PATH'],
				'RESIZE_SMALL'       => $arParams['RESIZE_SMALL'],
			);	
			
			if(CImager::Resize($arImagerParams) && !CImager::GetResizeError())
			{
				$arResult['IMAGER']['SRC'] = $new_file_url;
				list($arResult['IMAGER']['WIDTH'], $arResult['IMAGER']['HEIGHT']) = CImager::GetImageSize($new_file_url);
			}
			else
			{
				if(is_array($arResult['ERROR']))
				{
					$arResult['ERROR'] = array_merge($arResult['ERROR'], CImager::GetResizeError());
				}
				else
				{
					$arResult['ERROR'] = CImager::GetResizeError();
				}
			}
		}
		else
		{
			$arResult['IMAGER']['SRC'] = $new_file_url;
			list($arResult['IMAGER']['WIDTH'], $arResult['IMAGER']['HEIGHT']) = CImager::GetImageSize($new_file_url);
		}	
	}
}


/*************************************************************************
	Show Template
*************************************************************************/

switch($arParams['RETURN'])
{
	case 'src':
		return $arResult['IMAGER']['SRC'];
		break;
	case 'array':
		return $arResult['IMAGER'];
		break;
	default:
		$this->IncludeComponentTemplate();
	break;
}
?>