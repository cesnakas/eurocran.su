<?

class CWatermark
{
    // Срабатывает при создании и изменении элемента
    function ImageUpdate(&$arFields)
    {
        // Указываем нужные ИБ
        if ($arFields["IBLOCK_ID"] == 1 || $arFields["IBLOCK_ID"] == 2)
        {
            // Если заполнено изображение анонса
            if (!empty($arFields["PREVIEW_PICTURE"]["tmp_name"]))
            {
                CWatermark::PostWaterMark($arFields["PREVIEW_PICTURE"]["tmp_name"]);
            }

            // Если заполнено детальное изображение
            if (!empty($arFields["DETAIL_PICTURE"]["tmp_name"]))
            {
                CWatermark::PostWaterMark($arFields["DETAIL_PICTURE"]["tmp_name"]);
            }

            // Дополнительные фото из свойств ИБ (ID=8)
           /*  foreach ($arFields["PROPERTY_VALUES"][8] as $key=>$moreimg)
           {
                CWatermark::PostWaterMark($arFields["PROPERTY_VALUES"][8][$key]['tmp_name']);
            }

            // Дополнительные фото из свойств ИБ (ID=10)
            foreach ($arFields["PROPERTY_VALUES"][10] as $key=>$moreimg)
            {
                CWatermark::PostWaterMark($arFields["PROPERTY_VALUES"][10][$key]['tmp_name']);
            } */
        }
    }

    function PostWaterMark(&$_image)
    {
        $WatermarkFile = $_SERVER["DOCUMENT_ROOT"].'/upload/watermark/watermark.png';

        // Узнаем размеры загружаемого изображения
        $image_orig = imagecreatefromjpeg($_image);
        $width_orig = imagesx($image_orig);
        $height_orig = imagesy($image_orig);

        // Не обрабатываем изображения меньше 500x500
        if ($width_orig <= 500 && $height_orig <= 500) return;

        // Уменьшаем изображение водяного знака
        if (1)
        {
            // Вычисляем ширину конечного изображения
            if ($height_orig > $width_orig && ($height_orig > 1200 || $width_orig > 1200)) {
                $result_width = 1200 * $width_orig / $height_orig;
            } else if ($width_orig > 1200) {
                $result_width = 1200;
            } else {
                $result_width = $width_orig;
            }

            // Масштабируем водяной знак, т.к. размеры картинок у нас разные
            // Узнаем размер будущего водяного знака (70% от ширины конечного изображения)
            $watermarkSize = ceil(0.7 * $result_width);

            // файл лежит здесь: /upload/watermark/watermark.png
            $arWatermarkFile = Array('FILE_NAME'=>'watermark.png', 'SUBDIR' =>'watermark', 'WIDTH'=>1000, 'HEIGHT'=>500, 'CONTENT_TYPE'=>'image/png');

            $arWatermarkResize = CFile::ResizeImageGet(
                $arWatermarkFile,
                array("width" => $watermarkSize, "height" => $watermarkSize),
                BX_RESIZE_IMAGE_PROPORTIONAL_ALT
            );

            // если новый размер изображения водяного знака больше исходного, то ResizeImageGet вернёт false
            if (!$arWatermarkResize["src"]) {
                $arWatermarkResize["src"] = '/upload/watermark/watermark.png';
            }

            $WatermarkFile = $_SERVER['DOCUMENT_ROOT'] . $arWatermarkResize["src"];
        }

        // Водяной знак с коофициентом растяжения 0.7 от изображения.
        // Если изображение меньше водяного знака, то водяной знак не обрезается, а также уменьшается с этим коофициентом. - Не работает, пришлось в этом случае предварительно уменьшать изображение водяного знака.
        // Если изображение больше водяного знака, то водяной знак принимает свои истиные размеры.
        // Таким образом, если мы хотим чтобы водяной знак всегда был размерами 70% от картинки, то водяной знак нужно сделать примерно размерами равными самой большой загружаемой  картинки. Но т.к. мы уменьшаем изображение до 1200px, то изображение водяного знака с шириной в 1000px нас устроит.
        $arWaterMark = array(
            "name" => "watermark",
            "type" => "image",
            "position" => "center",
            "coefficient" => 0.7,
            "alpha_level" => 60,
            "file" => $WatermarkFile
        );

        // Указаем физический адрес для временного изображения
        $destinationFile = $_SERVER['DOCUMENT_ROOT'] . "/" . $_upload_dir . "/tmp/" . md5(microtime()) . ".jpg";;

        // Получаем уменьшенное временное изображение с наложенным водяным знаком
        CFile::ResizeImageFile(
            $_image,
            $destinationFile,
            array('width' => 1200, 'height' => 1200),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
            $arWaterMark,
            95,
            true
        );

        // Удаляем исходный физический файл
        unlink($_image);

        // Копируем итоговое уменьшенное изображение с водяным знаком из временного файла в исходный файл.
        if (copy($destinationFile, $_image))
        {
            // Удаляем временный файл
            unlink($destinationFile);
        }
    }
}
?>