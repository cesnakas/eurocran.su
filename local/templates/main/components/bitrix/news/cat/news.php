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
/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

$isFilter = ($arParams['USE_FILTER'] == 'Y');
?>

<?php
if ($isFilter)
{
	$arFilter = array(
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ACTIVE" => "Y",
		"GLOBAL_ACTIVE" => "Y",
	);
	if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
		$arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
	elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
		$arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];

	$obCache = new CPHPCache();
	if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog"))
	{
		$arCurSection = $obCache->GetVars();
	}
	elseif ($obCache->StartDataCache())
	{
		$arCurSection = array();
		if (Loader::includeModule("iblock"))
		{
			$dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID"));

			if(defined("BX_COMP_MANAGED_CACHE"))
			{
				global $CACHE_MANAGER;
				$CACHE_MANAGER->StartTagCache("/iblock/catalog");

				if ($arCurSection = $dbRes->Fetch())
					$CACHE_MANAGER->RegisterTag("iblock_id_".$arParams["IBLOCK_ID"]);

				$CACHE_MANAGER->EndTagCache();
			}
			else
			{
				if(!$arCurSection = $dbRes->Fetch())
					$arCurSection = array();
			}
		}
		$obCache->EndDataCache($arCurSection);
	}
	if (!isset($arCurSection))
		$arCurSection = array();
?>

<div class="container">

	<h1>Каталог техники</h1>

    <?php
    $filter = ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "IBLOCK_SECTION_ID" => $arResult["SECTION"]["PATH"][0]["ID"], "ACTIVE" => "Y"];
    $q = CIBlockElement::GetList(Array(), $filter, false, false, Array("ID", "PROPERTY_P1"));
    $arrFilter = Array();
    while ($a = $q->GetNext()) {
        if ($a["PROPERTY_P1_VALUE"]) {$arrFilter["p1"][] = $a["PROPERTY_P1_VALUE"];}
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
        <div>
            <a <?if(strpos($string, 'arrFilter_2_MIN='.$value.'&'.'arrFilter_2_MAX='.$value) !== false) {echo "class='active'";}?> href="<?=$section.'?arrFilter_2_MIN='.$value.'&arrFilter_2_MAX='.$value.'&set_filter=Показать'?>">
                <?=$value?> тонн
            </a>
        </div>
		<? } ?>
    </div><!-- /sub_cats -->

</div><!-- /container -->


<div class="cats__main">
    <div class="container">

<?php
$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter",
	"", // "another",
	Array(
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"FILTER_NAME" => '',
		"FILTER_VIEW_MODE" => "vertical",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"POPUP_POSITION" => "left",
		"PREFILTER_NAME" => "smartPreFilter",
		"SAVE_IN_SESSION" => "N",
		"SECTION_CODE" => "",
		"SECTION_CODE_PATH" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"]."f/#SMART_FILTER_PATH#/",
		"SECTION_DESCRIPTION" => "-",
		"SECTION_ID" => $arCurSection["ID"],
		"SECTION_TITLE" => "-",
		"SEF_MODE" => "Y",
		"SEF_RULE" => "",
		"SMART_FILTER_PATH" => $_REQUEST["f"],
		"TEMPLATE_THEME" => "yellow",
		"XML_EXPORT" => "N"
	),
	$component
);
}
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"", // "category",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		//"PARENT_SECTION" => "1",
		//"PARENT_SECTION_CODE" => "",
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"INCLUDE_SUBSECTIONS" => 'Y',
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	),
	$component
);?>

    </div>
</div>

<!--START PUT-THE-TECHNIQUE-->
<div class="put-the-technique">
    <div class="container">

        <div class="g-title">
            <h2>Нужна помощь в подборе?</h2>
        </div>

		<?php
		$APPLICATION->IncludeComponent(
			'cesnakas:main.feedback',
			'catalog.feedback',
			[
				'USE_CAPTCHA' => 'N',
				'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
				'EMAIL_TO' => 'evro-k@yandex.ru',
				'REQUIRED_FIELDS' => ['NAME', 'PHONE'],
				'EVENT_MESSAGE_ID' => ['7'],
			]
		);?>

    </div>
</div>
<!--END PUT-THE-TECHNIQUE-->

<!--END PUT-THE-TECHNIQUE-->
<div class="product-single__content">
    <div class="container">
		<?php
		$APPLICATION->IncludeFile(
			SITE_TEMPLATE_PATH.'/include/catalog/product-content.php',
			[],
			['SHOW_BORDER' => true, 'MODE' => 'html']
		);?>
    </div>
</div>
<!--END INFO-BLOCK-->

<!--START CONTACTS-B-->
<div class="contacts contacts--block">
    <div class="container">
        <div class="g-title">
            <h2>Контакты</h2>
        </div>
        <div class="row">
            <div class="contacts__info">

                <p>Ежедневно мы развиваемся и стараемся стать лучше для вас, поэтому всегда рады получить от вас
                    обратную связь с пожеланиями и идеями по улучшению наших продуктов!</p>
                <p>Если у вас остались вопросы или есть предложения как стать лучше пишите нам!</p>

                <div class="contacts__loc">
                    <i class="icon">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/location.svg"/>
                    </i>
                    <span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span>
                </div>

                <div class="contacts__row">
                    <div class="contacts__tel">
                        <i class="icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/phone.svg"/>
                        </i>
                        <span>
                            <a href="tel:+74999299666">+7 (499)929-96-66</a>
                            <a href="tel:+79853645518">+7 (985)364-55-18</a>
                            <a href="tel:+79852262030">+7 (985)226-20-30</a>
                        </span>
                    </div>
                    <div class="contacts__other">
                        <div class="contacts__mail">
                            <i class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/mail.svg"/>
                            </i>
                            <a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a>
                        </div>
                        <div class="contacts__schedule">
                            <i class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/clock.svg"/>
                            </i>
                            <span>10:00 - 17:00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts__form">

				<?php
				$APPLICATION->IncludeComponent(
					'cesnakas:main.feedback',
					'.default',
					[
						'USE_CAPTCHA' => 'N',
						'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
						'EMAIL_TO' => 'evro-k@yandex.ru',
						'REQUIRED_FIELDS' => Array('NAME','PHONE','EMAIL','MESSAGE'),
						'EVENT_MESSAGE_ID' => Array('7')
					]
				);?>

            </div>
        </div>
    </div>
</div>
<!--END CONTACTS-B-->

<!--START MAP-->
<div class="map"></div>
<!--END MAP-->