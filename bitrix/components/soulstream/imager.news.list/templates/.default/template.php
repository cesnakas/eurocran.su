<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'fancybox'):?>
<script type="text/javascript">
<!--//<![CDATA[
$().ready(function(){
	$('.gallery-fancybox').fancybox({'titleShow':false,'transitionIn':'elastic','transitionOut':'elastic'});
});
//]]>-->
</script>
<?endif?>

<?if($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'balupton' || $arParams['IMAGER_DETAIL_SCRIPT'] == 'balupton'):?>
<script type="text/javascript">
<!--//<![CDATA[
$().ready(function(){
	$.Lightbox.construct({
		show_helper_text:false,
		show_info:false,
		download_link:false,
		show_linkback:false,
		text:{
			image:'<?=GetMessage("IMAGER_ND_IMAGE")?>',
			of:'<?=GetMessage("IMAGER_ND_OF")?>',
			close:'<?=GetMessage("IMAGER_ND_CLOSE")?>'
		}
	});
});
//]]>-->
</script>
<?endif?>

<?if($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'highslide' || $arParams['IMAGER_DETAIL_SCRIPT'] == 'highslide'):?>
<script type="text/javascript">
<!--//<![CDATA[
hs.lang = {
	loadingText : '<?=GetMessage("IMAGER_ND_LOADING")?>',
	loadingTitle : '<?=GetMessage("IMAGER_ND_UNDO")?>',
	focusTitle : '<?=GetMessage("IMAGER_ND_FOCUS")?>',
	fullExpandTitle : '<?=GetMessage("IMAGER_ND_FULL_EXPAND_TITLE")?>',
	creditsText : '<?=GetMessage("IMAGER_ND_CREDITS")?>',
	creditsTitle : '<?=GetMessage("IMAGER_ND_CREDITS_TITLE")?>',
	previousText : '<?=GetMessage("IMAGER_ND_PREV")?>',
	nextText : '<?=GetMessage("IMAGER_ND_NEXT")?>', 
	moveText : '<?=GetMessage("IMAGER_ND_MOVE")?>',
	closeText : '<?=GetMessage("IMAGER_ND_CLOSE")?>',
	closeTitle : '<?=GetMessage("IMAGER_ND_CLOSE")?> (<?=GetMessage("IMAGER_ND_ESC")?>)',
	resizeTitle : '<?=GetMessage("IMAGER_ND_RESIZE")?>',
	playText : '<?=GetMessage("IMAGER_ND_SLIDESHOW")?>',
	playTitle : '<?=GetMessage("IMAGER_ND_SLIDESHOW")?> (<?=GetMessage("IMAGER_ND_SPACEBAR")?>)',
	pauseText : '<?=GetMessage("IMAGER_ND_PAUSE")?>',
	pauseTitle : '<?=GetMessage("IMAGER_ND_PAUSE")?> (<?=GetMessage("IMAGER_ND_SPACEBAR")?>)',
	previousTitle : '<?=GetMessage("IMAGER_ND_PREV")?> (<?=GetMessage("IMAGER_ND_ARROW_LEFT")?>)',
	nextTitle : '<?=GetMessage("IMAGER_ND_NEXT")?> (<?=GetMessage("IMAGER_ND_ARROW_RIGHT")?>)',
	moveTitle : '<?=GetMessage("IMAGER_ND_MOVE")?>',
	fullExpandText : '<?=GetMessage("IMAGER_ND_FULL_EXPAND")?>',
	number: '<?=GetMessage("IMAGER_ND_IMAGE")?> %1 <?=GetMessage("IMAGER_ND_OF")?> %2',
	restoreTitle : '<?=GetMessage("IMAGER_ND_IMAGE_TITLE")?>'
};
hs.graphicsDir = "/bitrix/components/soulstream/jquery/js/highslide/graphics/";
hs.showCredits = false;
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
hs.dimmingOpacity = 0.75;
hs.expandCursor = false;
hs.restoreCursor = false;
hs.addSlideshow({
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
//]]>-->
</script>
<?endif?>

<div class="imager-gallery-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<p class="news-item">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if($arParams['IMAGER_DETAIL_SCRIPT'] && is_array($arItem["DETAIL_PICTURE"])):?>
				<?if($arParams['IMAGER_DETAIL_SCRIPT'] == 'fancybox'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.preview-fancybox-<?=$arItem["ID"]?>').fancybox({'titleShow':false,'transitionIn':'elastic','transitionOut':'elastic'});
					});
					//]]>-->
					</script>
					<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["NAME"]?>" class="preview-fancybox-<?=$arItem["ID"]?>"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" /></a>
				<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'lightbox'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.preview-lightbox-<?=$arItem["ID"]?>').lightBox();
					});
					//]]>-->
					</script>
					<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem['NAME']?>" class="preview-lightbox-<?=$arItem["ID"]?>"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" /></a>
				<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'balupton'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.preview-lightbox-<?=$arItem["ID"]?>').lightbox();
					});
					//]]>-->
					</script>
					<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem['NAME']?>" class="preview-lightbox-<?=$arItem["ID"]?>"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" /></a>
				<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'highslide'):?>
					<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="highslide" onclick="return hs.expand(this, { slideshowGroup: 'preview-highslide-<?=$arItem['ID']?>' })"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" /></a>
				<?endif?>
			<?else:?>
				<?if($arParams["DISPLAY_DETAIL_LINK"] == "Y" && (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]))):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>" class=""><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" /></a>
				<?elseif(is_array($arItem["DETAIL_PICTURE"])):?>
					<?=CFile::Show2Images($arItem["PREVIEW_PICTURE"]['SRC'], $arItem["DETAIL_PICTURE"]['SRC'], false, false, ' class="preview_picture" border="0"')?>
				<?else:?>
					<img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" />
				<?endif;?>
			<?endif?>
		<?endif?>
		
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if($arParams["DISPLAY_DETAIL_LINK"] == "Y" && (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]))):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
		
		<?if(is_array($arItem['GALLERY']) && count($arItem['GALLERY'])):?>
			<div class="imager-gallery">
				<?if($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'fancybox'):?>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<a href="<?=$arItem['GALLERY'][$idx]['SRC']?>" title="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-fancybox" rel="gallery-fancybox-<?=$arItem['ID']?>"><img src="<?=$arItem['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arItem['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arItem['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
					<?endforeach;?>
				<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'lightbox'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.gallery-lightbox-<?=$arItem['ID']?>').lightBox();
					});
					//]]>-->
					</script>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<a href="<?=$arItem['GALLERY'][$idx]['SRC']?>" title="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-lightbox-<?=$arItem['ID']?>"><img src="<?=$arItem['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arItem['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arItem['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
					<?endforeach;?>
				<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'balupton'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.gallery-lightbox-<?=$arItem['ID']?>').lightbox();
					});
					//]]>-->
					</script>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<a href="<?=$arItem['GALLERY'][$idx]['SRC']?>" title="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-lightbox-<?=$arItem['ID']?>"><img src="<?=$arItem['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arItem['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arItem['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
					<?endforeach;?>
				<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'nflightbox'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.gallery-nflightbox-<?=$arItem['ID']?>').lightBox({ containerResizeSpeed: false });
					});
					//]]>-->
					</script>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<a href="<?=$arItem['GALLERY'][$idx]['SRC']?>" title="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-nflightbox-<?=$arItem['ID']?>"><img src="<?=$arItem['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arItem['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arItem['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
					<?endforeach;?>
				<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'highslide'):?>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<a href="<?=$arItem['GALLERY'][$idx]['SRC']?>" title="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" onclick="return hs.expand(this, { slideshowGroup: 'gallery-highslide-<?=$arItem['ID']?>' })"><img src="<?=$arItem['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arItem['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arItem['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
						<div class="highslide-caption"><?=$arItem['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?></div>
					<?endforeach;?>
				<?else:?>
					<?foreach($arItem['GALLERY'] as $idx=>$arImage):?>
						<?=CFile::Show2Images($arItem['GALLERY_PREVIEW'][$idx]['SRC'], $arItem['GALLERY'][$idx]['SRC'])?>
					<?endforeach;?>
				<?endif?>
			</div>
			<div style="clear:both"></div>
			<br />
		<?endif;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
