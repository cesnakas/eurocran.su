<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

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
<?endif;?>


<div class="imager-gallery-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N"):?>
		<?if($arParams['IMAGER_DETAIL_SCRIPT'] && is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])):?>
			<?if($arParams['IMAGER_DETAIL_SCRIPT'] == 'fancybox'):?>
				<script type="text/javascript">
				<!--//<![CDATA[
				$().ready(function(){
					$('.detail-fancybox-<?=$arResult["ID"]?>').fancybox({'titleShow':false,'transitionIn':'elastic','transitionOut':'elastic'});
				});
				//]]>-->
				</script>
				<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arResult["NAME"]?>" class="detail-fancybox-<?=$arResult["ID"]?>"><img class="detail_picture" border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" /></a>
			<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'lightbox'):?>
				<script type="text/javascript">
				<!--//<![CDATA[
				$().ready(function(){
					$('.detail-lightbox-<?=$arResult["ID"]?>').lightBox();
				});
				//]]>-->
				</script>
				<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arResult['NAME']?>" class="detail-lightbox-<?=$arResult["ID"]?>"><img class="detail_picture" border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" /></a>
			<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'balupton'):?>
				<script type="text/javascript">
				<!--//<![CDATA[
				$().ready(function(){
					$('.detail-lightbox-balupton-<?=$arResult["ID"]?>').lightbox();
				});
				//]]>-->
				</script>
				<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arResult['NAME']?>" class="detail-lightbox-balupton-<?=$arResult["ID"]?>"><img class="detail_picture" border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" /></a>
			<?elseif($arParams['IMAGER_DETAIL_SCRIPT'] == 'highslide'):?>
				<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="highslide" onclick="return hs.expand(this, { slideshowGroup: 'detail-highslide-<?=$arResult["ID"]?>' })"><img class="detail_picture" border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" /></a>
			<?endif?>
		<?else:?>
			<?if(is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])):?>
				<?=CFile::Show2Images($arResult["PREVIEW_PICTURE"]['SRC'], $arResult["DETAIL_PICTURE"]['SRC'], false, false, ' class="detail_picture" border="0"')?>
			<?elseif(is_array($arResult["DETAIL_PICTURE"])):?>
				<img class="detail_picture" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" />
			<?endif?>
		<?endif?>		
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<b><?=$arResult["NAME"]?></b><br />
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
 	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
 	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):?>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			<br />
	<?endforeach;?>
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;?>
	<?if(is_array($arResult['GALLERY']) && count($arResult['GALLERY'])):?>
		<div class="imager-gallery">
			<?if($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'fancybox'):?>
				<script type="text/javascript">
				<!--//<![CDATA[
				$().ready(function(){
					$('.gallery-fancybox-<?=$arResult["ID"]?>').fancybox({'titleShow':false,'transitionIn':'elastic','transitionOut':'elastic'});
				});
				//]]>-->
				</script>
				<?foreach($arResult['GALLERY'] as $idx=>$arImage):?>
					<a href="<?=$arResult['GALLERY'][$idx]['SRC']?>" title="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-fancybox-<?=$arResult["ID"]?>" rel="gallery-fancybox-<?=$arResult['ID']?>"><img src="<?=$arResult['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arResult['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arResult['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
				<?endforeach;?>
			<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'lightbox'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.gallery-lightbox-<?=$arResult["ID"]?>').lightBox();
					});
					//]]>-->
					</script>
				<?foreach($arResult['GALLERY'] as $idx=>$arImage):?>
					<a href="<?=$arResult['GALLERY'][$idx]['SRC']?>" title="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-lightbox-<?=$arResult["ID"]?>"><img src="<?=$arResult['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arResult['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arResult['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
				<?endforeach;?>
			<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'balupton'):?>
					<script type="text/javascript">
					<!--//<![CDATA[
					$().ready(function(){
						$('.gallery-lightbox-balupton-<?=$arResult["ID"]?>').lightbox();
					});
					//]]>-->
					</script>
				<?foreach($arResult['GALLERY'] as $idx=>$arImage):?>
					<a href="<?=$arResult['GALLERY'][$idx]['SRC']?>" title="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" class="gallery-lightbox-balupton-<?=$arResult["ID"]?>"><img src="<?=$arResult['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arResult['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arResult['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?>" border="0" /></a>
				<?endforeach;?>
			<?elseif($arParams['IMAGER_GALLERY_DETAIL_SCRIPT'] == 'highslide'):?>
				<?foreach($arResult['GALLERY'] as $idx=>$arImage):?>
					<a href="<?=$arResult['GALLERY'][$idx]['SRC']?>" title="<?=$arResult['NAME']?>" onclick="return hs.expand(this, { slideshowGroup: 'gallery-highslide-<?=$arResult['ID']?>' })"><img src="<?=$arResult['GALLERY_PREVIEW'][$idx]['SRC']?>" width="<?=$arResult['GALLERY_PREVIEW'][$idx]['WIDTH']?>" height="<?=$arResult['GALLERY_PREVIEW'][$idx]['HEIGHT']?>" alt="<?=$arResult['NAME']?>" border="0" /></a>
					<div class="highslide-caption"><?=$arResult['PROPERTIES'][$arParams['IMAGER_MORE_PHOTO_CODE']]['DESCRIPTION'][$idx]?></div>
				<?endforeach;?>
			<?else:?>
				<?foreach($arResult['GALLERY'] as $idx=>$arImage):?>
					<?=CFile::Show2Images($arResult['GALLERY_PREVIEW'][$idx]['SRC'], $arResult['GALLERY'][$idx]['SRC'], false, false, ' border="0"')?>
				<?endforeach;?>
			<?endif?>
		</div>
		<div style="clear:both"></div>
		<br />
	<?endif;?>
</div>