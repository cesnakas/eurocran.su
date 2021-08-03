<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 

<div class="jcarousel">

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="slid">
<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
<div class="inline_text"><?=$arItem["PREVIEW_TEXT"]?></div>
</div>
<?endforeach;?>
</div>
<div class="slider slider_test consult_sld_btn" id="cons3"><a onclick="yaCounter46722495.reachGoal('otkkonsul'); return true;" class="item-callback-button button" href="#callback-form2" rel="modal:open" ><i class="arrow_info"></i>Получить консультацию</a> </div>
<script>
 $(document).ready(function(){
  $('.jcarousel').bxSlider({
    mode: 'fade',
    captions: true,
  });
 });
</script>