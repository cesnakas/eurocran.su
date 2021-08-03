<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
    <link rel="stylesheet" type="text/css" href="/bitrix/templates/eurokran/components/bitrix/menu/main_multilevel/style.css">
<style>
    .breadcrumb{
        display: none;
    }
</style>
<h1 style="text-align: center; margin-top: 60px">Страница не найдена</h1>
<div class="fof_img">
    <img src="/bitrix/templates/eurokran/images/404_2.png">
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>