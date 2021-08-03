<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<aside>
<?$pureURI = $_SERVER["REQUEST_URI"];
if (substr_count($pureURI, "?")) {
	$pos = strpos($pureURI, "?");
	$pureURI = substr($pureURI, 0, $pos);
}
$arURI = explode("/", $pureURI);
CModule::IncludeModule("iblock");
$q = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "DEPTH_LEVEL"=>1, "ACTIVE"=>"Y"), false);
while ($a = $q->GetNext()) {?>
<div class="filter">
	<div class="item">
		<div class="name spoler_btn<?if($arParams["SECTION_ID"] == $a["ID"]) echo " active";?>"><?=$a["NAME"]?><div class="icon"></div></div>
		<div class="data"<?if($arResult["IBLOCK_SECTION_ID"] == $a["ID"]) echo " style='display:block'";?>>
			<? $qEl = CIBlockElement::GetList(Array("SORT" => "ASC"), Array("IBLOCK_ID" => 1, "SECTION_ID" => $a["ID"], "ACTIVE" => "Y"), false, false, Array("ID", "NAME", "DETAIL_PAGE_URL"));
				$qSec = CIBlockSection::GetList(Array("SORT" => "ASC"), Array("SECTION_ID" => $a["ID"], "ACTIVE" => "Y"), false);?>
			<? while ($aEl = $qEl->GetNext()) {?>
				<div><a<?if($arResult["ID"] == $aEl["ID"]) echo " class='active'";?> href="<?= $aEl["DETAIL_PAGE_URL"] ?>"><?= $aEl["NAME"] ?></a></div>
			<? } ?>
			<? while ($chA = $qSec->GetNext()) { ?>
				<div><a<?if($arResult["ID"] == $chA["ID"]) echo " class='active'";?> href="<?= $chA["SECTION_PAGE_URL"] ?>"><?= $chA["NAME"] ?></a></div>
			<? } ?>
		</div>
	</div>
</div>
<? } ?>
</aside>

<section class="content">
<div class="text clearfix">
<h1><?
if (strlen($arResult["PROPERTIES"]["H1_TITLE"]["VALUE"])) {
    echo $arResult["PROPERTIES"]["H1_TITLE"]["VALUE"];
} else {
    echo $arResult["NAME"];
}
?></h1>

<p class="desc"><?=$arResult["PROPERTIES"]["NAMEWIDE"]["VALUE"]?></p>

<div class="photo-holder clearfix">
	<ul class="photo-small">
		<? foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>
		<li <?=$key==0?"class='active'":"";?>><a href="#"><img src="<?=rIMG($value, 5, 100, 100)?>" width="100" height="100" title="<?=$arResult["NAME"]?>" alt="<?=$arResult["NAME"]?>" /></a><span></span></li>
		<? } ?>
	</ul>
	
	<div class="main-photo">
	<? foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $key=>$value) { ?>
		<a href="<?=CFile::GetPath($value)?>" rel="fancybox" <?=$key==0?"":"style='display:none;'";?>><img src="<?=rIMG($value, 5, 615, 340)?>" width="615" height="340" title="<?=$arResult["NAME"]?>" alt="<?=$arResult["NAME"]?>" /></a>
	<? } ?>
	<span></span></div>
</div>

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
	
	<?php if (!empty($arResult["PROPERTIES"]["PRICES_DET"]["VALUE"])): ?>
		<div class="item-prices">
			<span class="item-prices-label">Стоимость за смену без гуська / с гуськом: </span>
			<div class="item-prices-value new_price"><?=$arResult["PROPERTIES"]["PRICES_DET"]["VALUE"]?></div>
		</div>
	<?php else: ?>
		<div class="item-prices">
			<span class="item-prices-label">Стоимость за смену: </span>
			<div class="item-prices-value new_price">договорная</div>
		</div>
	<?php endif; ?>
	<div class="item-buy">
		<a data-fancybox data-animation-duration="700" data-src="#buy-form" onclick="yaCounter46722495.reachGoal('zakazotkr'); return true;" class="item-buy-button" rel="modal:open">Заказать</a>
	</div>
	
	<div id="buy-form" class="category_info" style="display:none;">
		<div class="action_form fmodal">
			<h2><?if (strlen($arResult["PROPERTIES"]["H1_TITLE"]["VALUE"])) {
				echo $arResult["PROPERTIES"]["H1_TITLE"]["VALUE"];
			} else {
				echo $arResult["NAME"];
			}
			?></h2>
			<form action="" method="post" class="form">
				<div class="line">
					<div class="field"><input type="text" name="name" class="input" placeholder="Ваше имя" required></div>
				</div>
				<div class="line">
					<div class="field"><input type="tel" name="phone" class="input" placeholder="Ваш телефон" required></div>
				</div>
				<p><input type="checkbox" class="agr"> Подтвердите свое <a href="#" class="pers">согласие</a> на обработку персональных данных</p>
				<input type="hidden" name="page" value="<?=$_SERVER['REQUEST_URI']?>">
				<input type="hidden" name="action" value="email_order">
				<div class="buy-form-messages success"></div>
				<div class="buy-form-messages error"></div>
				<div class="submit" onclick="yaCounter46722495.reachGoal('zakazotpr'); return true;"><button type="submit" class="submit_btn" disabled="disabled">Заказать</button></div>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(".fmodal .agr").click(function(){
				x=$(this).prop('checked');
				$tt=$(this).closest('form').find('button[type=submit]');
				if(x==true){
					$tt.attr('disabled',false);
				}
				else{
					$tt.attr('disabled',true);
				}
			});
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
</div>
</section>
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