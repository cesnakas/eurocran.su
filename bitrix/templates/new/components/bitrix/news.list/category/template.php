<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$IBLOCK_ID = 2;
$ID = 10;
$i = 1;
?>
<section class="content">
	<?/*<h1 class="category_name"><?= isset($arResult["SECTION"]["PATH"][0]["NAME"]) ? $arResult["SECTION"]["PATH"][0]["NAME"] : $arResult["NAME"]?></h1>*/?>
	<? require($_SERVER['DOCUMENT_ROOT'].'/tehnika/meta.php');
	$page = $APPLICATION->GetCurPage();

	if($page=="/tehnika/") { ?>
		<h1 class="category_name">Аренда спецтехники</h1>
	<?} else {
		if (isset($seo_h1) && $seo_h1 != '') { ?>
			<h1 class="category_name"><? echo $seo_h1; ?></h1>
		<? } else { ?>
			<h1 class="category_name"><? echo $arResult["SECTION"]["PATH"][0]['NAME'];?></h1>
		<? }
	}

	$filter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "IBLOCK_SECTION_ID" => $arResult["SECTION"]["PATH"][0]["ID"], "ACTIVE"=>"Y");
	$q = CIBlockElement::GetList(Array(), $filter, false, false, Array("ID", "PROPERTY_P1"));
	$arrFilter = Array();
	while ($a = $q->GetNext()) {
		if ($a["PROPERTY_P1_VALUE"]) { $arrFilter["p1"][] = $a["PROPERTY_P1_VALUE"]; }
	}
	$arrFilter["p1"] = array_unique($arrFilter["p1"]);
	sort($arrFilter["p1"], SORT_NUMERIC);
	?>
	<div class="sub_cats row">
		<?$curpage = $APPLICATION->GetCurPage();
		$string = $APPLICATION->GetCurPageParam();
		/*$pattern = '/(arrFilter_2_MIN=)([a-zA-Z0-9\-_]+)&(arrFilter_2_MAX=)([a-zA-Z0-9\-_]+)/';
		$replacement = '${1}'.$value.'&${3}'.$value;
		$repo = preg_replace($pattern, $replacement, $another);*/
		$section = isset($arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"]) ? $arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"] : $arParams["IBLOCK_URL"];
		?>
		<?foreach ($arrFilter["p1"] as $value) {
		//$min = min($arrFilter["p1"]);?>
		<div><a<?if(strpos($string, 'arrFilter_2_MIN='.$value.'&'.'arrFilter_2_MAX='.$value) !== false){echo " class='active'";}?> href="<?=$section.'?arrFilter_2_MIN='.$value.'&arrFilter_2_MAX='.$value.'&set_filter=Показать'?>"><?=$value?> тонн</a></div>
		<?}?>
	</div>

	<div class="products">
		<div class="row">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="product">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="thumb">
						<img src="<?=$arItem["PICTURE"]["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" />
					</a>
				<?endif?>
				<div class="price"><?=$arItem["PRICES"]["VALUE"] ? $arItem["PRICES"]["VALUE"] : 'договорная' ?></div>

				<div class="name">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
					<?else:?>
						<?echo $arItem["NAME"]?>
					<?endif;?>
				<?endif;?>
				</div>

				<div class="features">
					<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
						<div>
							<div><?=$arProperty["NAME"]?></div>
						<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
							<div><?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?></div>
						<?else:?>
							<div><?=$arProperty["DISPLAY_VALUE"];?>&nbsp;<?=($arProperty["ID"] == '2') ? 'тонн' : 'метров'?></div>
						<?endif?>
						</div>
					<?endforeach;?>
				</div>

				<div class="links">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="details_link">ПОДРОБНЕЕ</a>
					<a data-fancybox data-animation-duration="700" data-src="#buy-form" data-name="<?=$arItem["NAME"]?>" data-modal="true" href="javascript:;" class="rent_link">АРЕНДОВАТЬ</a>
				</div>
			</div>
		<?endforeach;?>
		</div>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif;?>
	</div>

	<div id="buy-form" class="category_info" style="display:none;">
		<div class="action_form fmodal">
			<div class="block_title"><?echo $arItem["NAME"];?></div>
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
				<div class="submit"><button type="submit" class="submit_btn" disabled="disabled">Заказать</button></div>
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
				var form_data = $(this).serialize();
				$.ajax({
					type: "POST", //Метод отправки
					url: "/include/functions.php",
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

	<?$APPLICATION->IncludeFile(SITE_DIR."include/waiting_call.php", Array(), Array("SHOW_BORDER" => false, "MODE" => "text"));?>

	<div class="text_block">
		<?//=$ar_sect['DESCRIPTION'];?><?=$arResult["SECTION"]["PATH"][0]["DESCRIPTION"]?>
	</div>

	<div class="photo_gallery">
		<div class="block_title">Фото нашей спецтехники на объектах:</div>

		<div class="row">
		<?$rs = CIBlockElement::GetList(Array("RAND" => "ASC"), Array("IBLOCK_ID" => $IBLOCK_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"), false, Array("nTopCount" => 3), Array("NAME","PREVIEW_PICTURE","DETAIL_PAGE_URL","PROPERTY_ADRESS"));
		while($ar = $rs->GetNextElement()){
			$arPhoto = $ar->GetFields();
			$pic = CFile::ResizeImageGet($arPhoto['PREVIEW_PICTURE'], array('width' => 262, 'height' => 170), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, false);
			$realy = (isset($pic['src'])) ? $pic['src'] : SITE_TEMPLATE_PATH.'/images/no-photo.png';?>
			<div class="item">
				<div class="thumb">
					<a href="<?=$arPhoto['DETAIL_PAGE_URL']?>"><img src="<?=$realy?>" alt="<?=$arPhoto['NAME']?>" /></a>
				</div>
				<div class="name"><?=$arPhoto['NAME']?></div>
				<div class="location">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/ic_location.svg" alt="">
					<span><?=$arPhoto['PROPERTY_ADRESS_VALUE']?></span>
				</div>
			</div>
		<?}?>
		</div>
	</div>

	<?if(!empty($arResult["SECTION"]["PATH"][0]["ID"]) && !empty($arItem["SECTION_VALUE"])):?>
	<?$res = CIBlockElement::GetList(Array("NAME"=>"ASC","RAND"=>"ASC"), Array("IBLOCK_ID"=>$ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"), false, Array(), Array("NAME", "PREVIEW_TEXT", "PROPERTY_CATALOG_SECTION"));?>
	<div class="faq accordion">
		<div class="block_title">Популярные вопросы</div>
		<?while($ob = $res->GetNextElement()){
			$arFields = $ob->GetFields();
			if($arFields["PROPERTY_CATALOG_SECTION_VALUE"] == $arResult["SECTION"]["PATH"][0]["ID"]):
			?>
			<div class="item<?if($i == 1):?> active<?endif;?>">
				<div class="head">
					<div class="title"><?=$arFields['NAME']?></div>
					<div class="icon"></div>
				</div>
				<div class="data"<?if($i == 1):?> style="display:block"<?endif;?>>
					<?=$arFields['PREVIEW_TEXT']?>		
				</div>
			</div>
			<?$i++;
			endif;
		}
		?>
	</div>
	<?endif;?>
</section>