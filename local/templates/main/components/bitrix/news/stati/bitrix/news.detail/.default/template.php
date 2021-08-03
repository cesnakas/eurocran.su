<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h1><?
if (strlen($arResult["PROPERTIES"]["H1_TITLE"]["VALUE"])) {
    echo $arResult["PROPERTIES"]["H1_TITLE"]["VALUE"];
} else {
    echo $arResult["NAME"];
}
?></h1>

<p class="desc"><?=$arResult["PROPERTIES"]["NAMEWIDE"]["VALUE"]?></p>


<?if($arResult["PROPERTIES"]["PHOTO"]["VALUE"]){?>
<div class="photo-holder clearfix">
	<ul class="photo-small">
		<? foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>

		<li <?=$key==0?"class='active'":"";?>><a href="#"><img src="<?=rIMG($value, 5, 100, 100)?>" width="100" height="100" alt="" /></a><span></span></li>
		<? } ?>
	</ul>
	
	<div class="main-photo">
	<? foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>
		<?// $file = CFile::ResizeImageGet($value, array('width'=>615, 'height'=>340), BX_RESIZE_IMAGE_PROPORTIONAL, true);                ?>
		<a href="<?=CFile::GetPath($value)?>" rel="fancybox" <?=$key==0?"":"style='display:none;'";?>><img src="<?=rIMG($value, 5, 615, 340)?>" width="615" height="340" alt="" /></a>
	<? } ?>
	<span></span></div>
</div>
<?}?>

<div class="block-1">
	<?=$arResult["PREVIEW_TEXT"]?>
	<?
	if ($arResult["PROPERTIES"]["PDF"]["VALUE"]) {
	$dbFile = CFile::GetByID($arResult["PROPERTIES"]["PDF"]["VALUE"]);
	$arFile = $dbFile->Fetch();
	$size = round($arFile["FILE_SIZE"]/1048576, 2);
	?>
		<p class="file"><a href="<?=CFile::GetPath($arResult["PROPERTIES"]["PDF"]["VALUE"])?>">Скачать характеристики</a> (PDF файл / размер <?=$size?> МБ)</p>
	<? } ?>
	<?
	if ($arResult["PROPERTIES"]["PDF2"]["VALUE"]) {
	$dbFile = CFile::GetByID($arResult["PROPERTIES"]["PDF2"]["VALUE"]);
	$arFile = $dbFile->Fetch();
	$size = round($arFile["FILE_SIZE"]/1048576, 2);
	?>
		<p class="file"><a href="<?=CFile::GetPath($arResult["PROPERTIES"]["PDF2"]["VALUE"])?>">Скачать презентацию</a> (PDF файл / размер <?=$size?> МБ)</p>
	<? } ?>
</div>

<div class="block-2">
	<h2>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2>
	
	<?php if (!empty($arResult["PROPERTIES"]["PRICES"]["VALUE"])): ?>
		<div class="item-prices">
			<span class="item-prices-label">Стоимость за смену без гуська / с гуськом: </span>
			<div class="item-prices-value new_price"><?=$arResult["PROPERTIES"]["PRICES"]["VALUE"]?></div>
		</div>
	<?php else: ?>
		<div class="item-prices">
			<span class="item-prices-label">Стоимость за смену: </span>
			<div class="item-prices-value new_price">договорная</div>
		</div>
	<?php endif; ?>
	<div class="item-buy">
		<a href="#buy-form" onclick="yaCounter46722495.reachGoal('zakazotkr'); return true;" class="item-buy-button" rel="modal:open">Заказать</a>
	</div>
	
	<div style="display: none" >
		<div id="buy-form" class="fmodal">
			<h2><?
				if (strlen($arResult["PROPERTIES"]["H1_TITLE"]["VALUE"])) {
					echo $arResult["PROPERTIES"]["H1_TITLE"]["VALUE"];
				} else {
					echo $arResult["NAME"];
				}
				?></h2>
			<form action="" method="post">
				<input type="text" name="name" placeholder="Ваше имя" required>
				<input type="text" name="phone" placeholder="Ваш телефон" required>				
				<p style="width:100% !Important"><input type="checkbox" class="agr">Подтвердите свое <a href="#" class="pers">согласие</a> на обработку персональных данных</p>
				<input type="hidden" name="page" value="<?=$_SERVER['REQUEST_URI']?>">
				<input type="hidden" name="action" value="email_order">
				<div class="buy-form-messages success"></div>
				<div class="buy-form-messages error"></div>
				<input type="submit" onclick="yaCounter46722495.reachGoal('zakazotpr'); return true;" style="padding: 5px 10px;width:100% !Important" value="Заказать">
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			var autoclose;
			$("#buy-form form").submit(function() {
				var form_data = $(this).serialize(); //собераем все данные из формы
				$.ajax({
					type: "POST", //Метод отправки
					url: "/include/functions.php", //путь до php фаила отправителя
					data: form_data,
					success: function(data) {
						if (data === 'done') {
							$('.buy-form-messages.success').text('Спасибо за заказ! С Вами скоро свяжутся');
							$('.buy-form-messages.success').show();
							$('.buy-form-messages.error').hide();
							$("#buy-form form")[0].reset();
							autoclose = setTimeout(function () {
								$.fancybox.close();
							}, 5000)
						} else {
							$('.buy-form-messages.error').text('Технические неполадки при отправке сообщения. Пожалуйста, свяжитесь с нами по телефону.');
							$('.buy-form-messages.success').hide();
							$('.buy-form-messages.error').show();
						}
					}
				});
				return false;
			});
			$('html').on('click', '#fancybox-close', function () {
				clearTimeout(autoclose);
			})
		});
	</script>
	<table>
	<? foreach ($arResult["PROPERTIES"]["PARAMS"]["VALUE"] as $key=>$value) { ?>
	<tr>
		<td class="name"><?=$value?></td>
		<td><?=$arResult["PROPERTIES"]["PARAMS"]["DESCRIPTION"][$key]?></td>
	</tr>
	<? } ?>
	</table>
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