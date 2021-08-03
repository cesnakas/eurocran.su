<?
/*
	16.06.2016, автор Евгений Донич
	Скрипт массовой обработки инфоблоков "Наша техника" и "Наши объекты" (IBLOCK_ID = 1 и 2).
	Уменьшаем изображения PREVIEW_PICTURE, DETAIL_PICTURE, PROPERTY_PHOTO до 1200px и накладываем на них водяной знак.
*/
	
exit('Защита от случайного запуска.');

ini_set('display_errors', 1);
error_reporting(E_ALL^E_NOTICE);
	
$script_start = microtime();
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
	
if ($USER->GetID() == 1)
{
	$IBLOCK_ID = array(1, 2);
	if (CModule::IncludeModule('iblock'))
	{ 
		// получаем список элементов
		$res = CIBlockElement::GetList(
			array('ID' => 'ASC'),
			array('IBLOCK_ID' => $IBLOCK_ID/*, 'ID' => 108*/),
			false,
			array('iNumPage' => 24, 'nPageSize' => 5),
			array('ID', 'IBLOCK_ID', 'PREVIEW_PICTURE', 'DETAIL_PICTURE')
		);
		
		$el = new CIBlockElement;
		$i = 1;

        echo '<table width="100%">';
		while ($row = $res->GetNext())
		{
			echo '<tr><td colspan="2" bgcolor="#C0C0C0">'.$i.'. ID='.$row['ID'].', IBLOCK_ID='.$row['IBLOCK_ID'].'. </td></tr>';

            $PREVIEW_PICTURE = CFile::GetPath($row['PREVIEW_PICTURE']);
			if ($PREVIEW_PICTURE)
			{
			    $PREVIEW_PICTURE = $_SERVER['DOCUMENT_ROOT'].$PREVIEW_PICTURE;
			    CWatermark::PostWaterMark($PREVIEW_PICTURE);
			}

            $DETAIL_PICTURE = CFile::GetPath($row['DETAIL_PICTURE']);
			if ($DETAIL_PICTURE)
			{
			    $DETAIL_PICTURE = $_SERVER['DOCUMENT_ROOT'].$DETAIL_PICTURE;
			    CWatermark::PostWaterMark($DETAIL_PICTURE);
			}

			$el->Update(
				$row['ID'],
				array(
					'PREVIEW_PICTURE' => CFile::MakeFileArray($PREVIEW_PICTURE),
					'DETAIL_PICTURE' => CFile::MakeFileArray($DETAIL_PICTURE),
					'TIMESTAMP_X' => FALSE  // чтобы не менять дату изменения элемента
				),
				false, false, true, false
			);

            $res_prop = CIBlockElement::GetProperty($row['IBLOCK_ID'], $row['ID'], "sort", "asc", array("CODE" => "PHOTO"));
            while ($prop = $res_prop->GetNext())
            {
                $PHOTO = CFile::GetPath($prop['VALUE']);
                if ($PHOTO)
                {
			        $PHOTO = $_SERVER['DOCUMENT_ROOT'].$PHOTO;
 			        CWatermark::PostWaterMark($PHOTO);
                    $arFile = CFile::MakeFileArray($PHOTO);
                    // http://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=5534#value_file_upd
                    // старый файл удаляется, новый с водяным знаком добавляется
                    CIBlockElement::SetPropertyValueCode($row['ID'], 'PHOTO', Array($prop['PROPERTY_VALUE_ID'] => Array('VALUE' => $arFile)));
                }
            }

			$i++;
		}
        echo '</table>';

        $i--;
        echo '<br> Обработано элементов: <b>'.$i.'</b>.';
	}
	else { echo 'ERROR IBLOCK!'; }
}

function executionTime($start, $stop = false)
{
	if ($stop === false) $stop = microtime();
	$start = explode(" ", $start);
	$stop = explode(" ", $stop);
	$secs = $stop[1] - $start[1];
	$msecs = (float)($stop[0]) - (float)($start[0]);
	$result = round((float)$secs + (float)$msecs, 6);
	return $result;
}

$work_time = executionTime($script_start, microtime());
echo '<div style="position: absolute; top: 0; right: 0; margin: 20px; color: red;"> execution time: '.$work_time.' seconds.';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");	
?>