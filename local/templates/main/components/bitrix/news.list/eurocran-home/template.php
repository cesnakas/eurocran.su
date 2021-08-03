<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2 class="title_main"><? echo $arParams["~PAGER_TITLE"]; ?></h2>
<ul class="catalog-tech clearfix">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$arFileTmp = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"],
            array("width" => 330, "height" => 200),
            BX_RESIZE_IMAGE_EXACT,
            true,
            false
        );
		?>
		<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>"> 
				<span class="catalog-tech-image">
					<img src="<?=$arFileTmp['src']?>" alt="<? echo $arItem['NAME']; ?>">
				</span> 
				<span class="catalog-tech-name"><? echo $arItem['NAME']; ?></span> 
			</a>
			<span class="catalog-tech-param clearfix"> 		 
				<span class="float-right"><? echo $arItem['PROPERTIES']['P1']['VALUE']; ?></span> 		 
				<span class="overflow-hidden"><? echo $arItem['PROPERTIES']['P1']['NAME']; ?></span> 	 
			</span> 	 
			<span class="catalog-tech-param clearfix"> 		 
				<span class="float-right"><? echo $arItem['PROPERTIES']['P2']['VALUE']; ?></span> 		 
				<span class="overflow-hidden"><? echo $arItem['PROPERTIES']['P2']['NAME']; ?></span> 	 
			</span> 	 
			<span class="catalog-tech-param clearfix"> 		 
				<span class="float-right"><? echo $arItem['PROPERTIES']['P3']['VALUE']; ?></span> 		 
				<span class="overflow-hidden"><? echo $arItem['PROPERTIES']['P3']['NAME']; ?></span> 	 
			</span> 
		</li>
	<?endforeach;?>
</ul>
<!-- <pre>
	<? //print_r($arItem); ?>
</pre> -->