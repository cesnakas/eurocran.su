<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="objects-single">
    <div class="container">

        <h1><?=$arResult["NAME"]?></h1>

        <p><?=$arResult["PREVIEW_TEXT"]?></p>

        <div class="objects-single__arrows"></div>
        <div class="objects-single__slider" id="objects-single__slider">
			<? if(count($arResult["PROPERTIES"]["PHOTO"]["VALUE"]) > 0 && intval($arResult["PROPERTIES"]["PHOTO"]["VALUE"][0]) > 0):?>
				<? foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo): ?>
                    <div class="objects-single__item">
                        <img src="<?=CFile::GetPath($photo)?>">
                    </div>
				<?endforeach;?>
			<?endif;?>
        </div>

        <div class="objects-single__nav" id="objects-single__nav">
			<?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
                <div class="objects-single__nav-item">
                    <img src="<?=CFile::GetPath($photo)?>"/>
                </div>
			<?endforeach;?>
        </div>

		<?=$arResult["DETAIL_TEXT"];?>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"objects-slider",
			array(
				"IBLOCK_TYPE" => "objekty",
				"IBLOCK_ID" => "2",
				"NEWS_COUNT" => "9",
				"SORT_BY1" => 'ID',
				"SORT_ORDER1" => 'ASC',
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "ID",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "DESCRIPTION",
					2 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/objekty/#ELEMENT_CODE#/", // "~detail.php?ELEMENT_ID=#ELEMENT_ID#",
				"AJAX_MODE" => "Y",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "Y",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => '',
				"PARENT_SECTION_CODE" => "",

				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"INCLUDE_SUBSECTIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_TEMPLATE" => "show-more",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"PAGER_BASE_LINK_ENABLE" => "Y",
				"SET_STATUS_404" => "Y",
				"SHOW_404" => "Y",
				"MESSAGE_404" => "",
				"PAGER_BASE_LINK" => "",
				"PAGER_PARAMS_NAME" => "arrPager",
				"COMPONENT_TEMPLATE" => "",
				"STRICT_SECTION_CHECK" => "N",
				"FILE_404" => ""
			),
			false
		);?>

    </div>
</div>
