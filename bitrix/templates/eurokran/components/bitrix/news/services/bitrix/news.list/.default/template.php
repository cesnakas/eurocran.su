<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<section class="services">-->
<!--    <div class="container">-->
        <h1 class="services_header">услуги</h1>
<?foreach($arResult["ITEMS"] as $i => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if($i==0):?>
        <div class="row">
    <?endif?>
    <?if($i == 3):?>
        <div class="row services_row_down">
    <?endif?>
        <?if($i>=0 && $i <= 2){?>
            <div class=" col-md-4 col-sm-4 services_wrap">
        <?}else{?>
            <div class=" col-md-6 col-sm-6 services_wrap">
        <?}?>

			<a class="services_link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
				<img class="services_img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
				<p class="services_text"><?=$arItem["NAME"]?></p>
			</a>
		</div>
    <?if($i==2 || $i == 4):?>
        </div>
    <?endif?>

<?endforeach;?>
            <div class="link-to-all-container">
                <a href="#callback" class="link-to-all">Заказать звонок</a>
            </div>
<!--    </div>-->
<!--</section>-->

