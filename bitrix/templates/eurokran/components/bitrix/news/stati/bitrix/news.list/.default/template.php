<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?// require($_SERVER['DOCUMENT_ROOT'].'/tehnika/meta.php'); ?>
<?/* if (isset($seo_h1) && $seo_h1 != '') { ?>
        <h1><? echo $seo_h1; ?></h1>
<? } else { ?>
        <h1><? echo $arResult["NAME"]; ?></h1>
<? } */?>

<?
// $input_text - исходная строка
// $limit = 50 - количество слов по умолчанию
// $end_str - символ/строка завершения. Вставляется в конце обрезанной строки
function words_limit($input_text, $limit = 50, $end_str = '...') {
	$input_text = strip_tags($input_text);
	$words = explode(' ', $input_text); // создаём из строки массив слов
	if ($limit < 1 || sizeof($words) <= $limit) { // если лимит указан не верно или количество слов меньше лимита, то возвращаем исходную строку
		return $input_text;
	}
	$words = array_slice($words, 0, $limit); // укорачиваем массив до нужной длины
	$out = implode(' ', $words);
	return $out.$end_str; //возвращаем строку + символ/строка завершения
}
?>



<div class="stati-news">
	<? foreach($arResult["ITEMS"] as $arItem) { ?>
		<div class="containers section">
			<div class="row news-list-page">
				<div class="col-12">
					<div class="news-item media">
						<div class="preview-piture-wrapper">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<?if($arItem["PREVIEW_PICTURE"]){?>
									<? $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array('width'=>94, 'height'=>94), BX_RESIZE_IMAGE_PROPORTIONAL, true);                ?>
									<img class="preview_picture mr-3" src="<?=$file["src"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?> | Статьи «Еврокран»">
								<?} else {?>
									<img class="preview_picture mr-3" src="<?=SITE_TEMPLATE_PATH?>/images/Eurocrane.w140.jpg" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?> | Статьи «Еврокран»">
								<?}?>
							</a>
						</div><!-- .preview-piture-wrapper -->
						<div class="content-wrapper media-body">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="entry-title"><?=$arItem["NAME"]?></h2></a>
							<div class="date"><?=$arItem["ACTIVE_FROM"]?></div>
							<p class="descr">
								<?if($arItem["PREVIEW_TEXT"]){?>
									<?
									echo words_limit($arItem["PREVIEW_TEXT"]);
									?>

								<?}?>
							</p>
						</div><!-- .content-wrapper -->
					</div><!-- .news-item -->
					<hr class="mb-5">
				</div>
			</div>
		</div>
	<?}?>
</div>

<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
	<?=$arResult["NAV_STRING"]?>
<? } ?>


