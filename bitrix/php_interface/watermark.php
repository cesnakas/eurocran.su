<?

class CWatermark
{
    // ����������� ��� �������� � ��������� ��������
    function ImageUpdate(&$arFields)
    {
        // ��������� ������ ��
        if ($arFields["IBLOCK_ID"] == 1 || $arFields["IBLOCK_ID"] == 2)
        {
            // ���� ��������� ����������� ������
            if (!empty($arFields["PREVIEW_PICTURE"]["tmp_name"]))
            {
                CWatermark::PostWaterMark($arFields["PREVIEW_PICTURE"]["tmp_name"]);
            }

            // ���� ��������� ��������� �����������
            if (!empty($arFields["DETAIL_PICTURE"]["tmp_name"]))
            {
                CWatermark::PostWaterMark($arFields["DETAIL_PICTURE"]["tmp_name"]);
            }

            // �������������� ���� �� ������� �� (ID=8)
           /*  foreach ($arFields["PROPERTY_VALUES"][8] as $key=>$moreimg)
           {
                CWatermark::PostWaterMark($arFields["PROPERTY_VALUES"][8][$key]['tmp_name']);
            }

            // �������������� ���� �� ������� �� (ID=10)
            foreach ($arFields["PROPERTY_VALUES"][10] as $key=>$moreimg)
            {
                CWatermark::PostWaterMark($arFields["PROPERTY_VALUES"][10][$key]['tmp_name']);
            } */
        }
    }

    function PostWaterMark(&$_image)
    {
        $WatermarkFile = $_SERVER["DOCUMENT_ROOT"].'/upload/watermark/watermark.png';

        // ������ ������� ������������ �����������
        $image_orig = imagecreatefromjpeg($_image);
        $width_orig = imagesx($image_orig);
        $height_orig = imagesy($image_orig);

        // �� ������������ ����������� ������ 500x500
        if ($width_orig <= 500 && $height_orig <= 500) return;

        // ��������� ����������� �������� �����
        if (1)
        {
            // ��������� ������ ��������� �����������
            if ($height_orig > $width_orig && ($height_orig > 1200 || $width_orig > 1200)) {
                $result_width = 1200 * $width_orig / $height_orig;
            } else if ($width_orig > 1200) {
                $result_width = 1200;
            } else {
                $result_width = $width_orig;
            }

            // ������������ ������� ����, �.�. ������� �������� � ��� ������
            // ������ ������ �������� �������� ����� (70% �� ������ ��������� �����������)
            $watermarkSize = ceil(0.7 * $result_width);

            // ���� ����� �����: /upload/watermark/watermark.png
            $arWatermarkFile = Array('FILE_NAME'=>'watermark.png', 'SUBDIR' =>'watermark', 'WIDTH'=>1000, 'HEIGHT'=>500, 'CONTENT_TYPE'=>'image/png');

            $arWatermarkResize = CFile::ResizeImageGet(
                $arWatermarkFile,
                array("width" => $watermarkSize, "height" => $watermarkSize),
                BX_RESIZE_IMAGE_PROPORTIONAL_ALT
            );

            // ���� ����� ������ ����������� �������� ����� ������ ���������, �� ResizeImageGet ����� false
            if (!$arWatermarkResize["src"]) {
                $arWatermarkResize["src"] = '/upload/watermark/watermark.png';
            }

            $WatermarkFile = $_SERVER['DOCUMENT_ROOT'] . $arWatermarkResize["src"];
        }

        // ������� ���� � ������������ ���������� 0.7 �� �����������.
        // ���� ����������� ������ �������� �����, �� ������� ���� �� ����������, � ����� ����������� � ���� ������������. - �� ��������, �������� � ���� ������ �������������� ��������� ����������� �������� �����.
        // ���� ����������� ������ �������� �����, �� ������� ���� ��������� ���� ������� �������.
        // ����� �������, ���� �� ����� ����� ������� ���� ������ ��� ��������� 70% �� ��������, �� ������� ���� ����� ������� �������� ��������� ������� ����� ������� �����������  ��������. �� �.�. �� ��������� ����������� �� 1200px, �� ����������� �������� ����� � ������� � 1000px ��� �������.
        $arWaterMark = array(
            "name" => "watermark",
            "type" => "image",
            "position" => "center",
            "coefficient" => 0.7,
            "alpha_level" => 60,
            "file" => $WatermarkFile
        );

        // ������� ���������� ����� ��� ���������� �����������
        $destinationFile = $_SERVER['DOCUMENT_ROOT'] . "/" . $_upload_dir . "/tmp/" . md5(microtime()) . ".jpg";;

        // �������� ����������� ��������� ����������� � ���������� ������� ������
        CFile::ResizeImageFile(
            $_image,
            $destinationFile,
            array('width' => 1200, 'height' => 1200),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
            $arWaterMark,
            95,
            true
        );

        // ������� �������� ���������� ����
        unlink($_image);

        // �������� �������� ����������� ����������� � ������� ������ �� ���������� ����� � �������� ����.
        if (copy($destinationFile, $_image))
        {
            // ������� ��������� ����
            unlink($destinationFile);
        }
    }
}
?>