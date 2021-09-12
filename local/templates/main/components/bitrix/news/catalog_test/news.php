<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
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

// Filter
global $arFilter;
$arFilter = [];
$arParams["FILTER_NAME"] = "arFilter";

if ($_GET["TYPE"] && $_GET["TYPE"] != 0) {$arFilter["SECTION_ID"] = $_GET["TYPE"];}
if ($_GET["P1"] && $_GET["P1"] != 0) {$arFilter["PROPERTY_P1"] = $_GET["P1"];}
if ($_GET["P2"] && $_GET["P2"] != 0) {$arFilter["PROPERTY_P2"] = $_GET["P2"];}

$pureURI = $_SERVER["REQUEST_URI"];
if (substr_count($pureURI, "?")) {
	$pos = strpos($pureURI, "?");
	$pureURI = substr($pureURI, 0, $pos);
}
$arURI = explode("/", $pureURI);


if (isset($_GET['TYPE']) && $_GET['TYPE'] != 0) {

    // когда пользователь сам указывает параметры фильтра
	$filter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y", "SECTION_ID" => $_GET["TYPE"]);
} elseif (isset($arResult["SECTION"]["PATH"][0]['ID']) && $arResult["SECTION"]["PATH"][0]['ID'] != 0) {

	// когда пользователь заходит в конкретный раздел техники через меню
	$filter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y", "SECTION_ID"=>$arResult["SECTION"]["PATH"][0]['ID']);
} else {

	$filter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
}

$q = CIBlockElement::GetList(
    [], $filter, false, false, ["ID", "PROPERTY_P1", "PROPERTY_P2"]
);

while ($a = $q->GetNext()) {
	if ($a["PROPERTY_P1_VALUE"]) {$arFilter["p1"][] = $a["PROPERTY_P1_VALUE"];}
	if ($a["PROPERTY_P2_VALUE"]) {$arFilter["p2"][] = $a["PROPERTY_P2_VALUE"];}
}

$arFilter["P1"] = array_unique($arFilter["P1"]);
sort($arFilter["P1"], SORT_NUMERIC);
$arFilter["P2"] = array_unique($arFilter["P2"]);
sort($arFilter["P2"], SORT_NUMERIC);

$curpage = $APPLICATION->GetCurPage();
$string = $APPLICATION->GetCurPageParam();
$section = isset($arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"]) ? $arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"] : $arParams["IBLOCK_URL"];
?>

<div class="container">

    <h1>Каталог техники</h1>

    <div class="sub_cats row">

		<?foreach ($arFilter["P1"] as $value): ?>
        <div>
            <a href="<?=$section.'?arrFilter_2_MIN='.$value.'&arrFilter_2_MAX='.$value.'&set_filter=Показать'?>"><?=$value?> тонн</a>
        </div>
		<?endforeach;?>

        <!--<div><a href="">40 тонн</a></div>
        <div><a href="">50 тонн</a></div>
        <div><a href="">65 тонн</a></div>
        <div><a href="">68 тонн</a></div>
        <div><a href="">70 тонн</a></div>
        <div><a href="">82,5 тонн</a></div>
        <div><a href="">82,5 тонн</a></div>
        <div><a href="">84 тонн</a></div>
        <div><a href="">85 тонн</a></div>
        <div><a href="">90 тонн</a></div>
        <div><a href="">93,8 тонн</a></div>
        <div><a href="">95 тонн</a></div>
        <div><a href="">112,5 тонн</a></div>
        <div><a href="">120 тонн</a></div>
        <div><a href="">131,6 тонн</a></div>
        <div><a href="">150 тонн</a></div>
        <div><a href="">160 тонн</a></div>
        <div><a href="">200 тонн</a></div>
        <div><a href="">250 тонн</a></div>
        <div><a href="">280 тонн</a></div>
        <div><a href="">300 тонн</a></div>
        <div><a href="">350 тонн</a></div>
        <div><a href="">400 тонн</a></div>
        <div><a href="">500 тонн</a></div>
        <div><a href="">750 тонн</a></div>-->

    </div>

</div>

<div class="cats__main">
	<div class="container">

<?if ($arParams["USE_FILTER"] == "Y"): ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.filter",
        "",
        Array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FILTER_NAME" => $arParams["FILTER_NAME"],
            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        ),
        $component
    );?>
<? endif ?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
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
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	),
	$component
);
?>

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
