<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$APPLICATION->SetTitle($arResult["PROPERTIES"]["TITLE"]["VALUE"]);
?>
<?
$APPLICATION->SetPageProperty("keywords", $arResult["PROPERTIES"]["KEYWORDS"]["VALUE"]);
?>
<?
$APPLICATION->SetPageProperty("description", $arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]);
?>

<h1><? echo $arResult["NAME"];?></h1>
<div class="photo-holder clearfix">
    <ul class="photo-small">
<!--        --><?// foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>
            <li <?=$key==0?"class='active'":"";?>><a href="#"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="100" height="100" alt="" /></a><span></span></li>
<!--        --><?// } ?>
    </ul>
    <div class="main-photo">
<!--        --><?// foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>
            <a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" rel="fancybox" <?=$key==0?"":"style='display:none;'";?>><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="607" height="332" alt="" /></a>
<!--        --><?// } ?>
        <span></span>
    </div>
</div>
<div class="block-1">
    <h2>ОПИСАНИЕ</h2>
    <?echo $arResult["DETAIL_TEXT"];?>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $(".photo-small a").click(function() {
            var index = $(this).parents("li").index();
            $(".photo-small .active").removeClass("active");
            $(this).parents("li").addClass("active");
            $(".main-photo a").hide();
            $(".main-photo a").eq(index).show();
            return false;
        });

        $(".main-photo span").click(function() {
            $(".main-photo a:visible").click();
        });

    });
</script>