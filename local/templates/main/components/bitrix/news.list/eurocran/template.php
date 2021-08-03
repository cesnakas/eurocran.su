<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2 class="title_main"><? echo $arParams["~PAGER_TITLE"]; ?></h2>
<div class="isp-block">
	<div class="isp-block-wrap">
    	<ul class="carousel jcarousel-skin-simple">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$arFileTmp = CFile::ResizeImageGet(
		            $arItem["PREVIEW_PICTURE"],
		            array("width" => 300, "height" => 176),
		            BX_RESIZE_IMAGE_EXACT,
		            true,
		            false
		        );
				?>
				<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    	<span class="jc-img">
                    		<img src="<?=$arFileTmp['src']?>" alt="">
                    	</span>
                    	<span class="jc-title">
                    		<?=$arItem["NAME"]?>
                    	</span>
						<span class="jc-subtitle">
							<?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?>
						</span>
						<span class="jc-text">
							<?=$arItem["PREVIEW_TEXT"]?>
						</span>
                    </a>
				</li>
			<?endforeach;?>
	   </ul>
	</div>
</div>
<!-- 
<pre>
	<? //print_r($arItem); ?>
</pre> -->