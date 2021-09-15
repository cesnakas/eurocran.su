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

$this->setFrameMode(true);
?>

<div class="container">

    <h1>Каталог техники</h1>

    <div class="sub_cats row">
        <div><a href="">40 тонн</a></div>
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
        <div><a href="">750 тонн</a></div>
    </div>

    <div class="cats__main">
        <div class="container">

            <div class="filter-btn">
                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/filter1.svg"/>
            </div>

            <aside class="sidebar">
                <div class="sidebar__box">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.smart.filter",
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
                </div>
            </aside>

            <div class="cats__content">

                <form class="cats__filterbar" action="<?=$pureURI?>" method="GET">
                    <div class="cats__sort">

                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/sorting.svg"/>

                        <select name="">
                            <option value="0">По умолчанию</option>
                            <option value="1" <?=$_GET["type"]==1?"selected":"";?>>Мобильные краны</option>
                            <option value="2" <?=$_GET["type"]==2?"selected":"";?>>Гусеничные краны</option>
                            <option value="3" <?=$_GET["type"]==3?"selected":"";?>>Низкорамный трал</option>
                            <option value="4" <?=$_GET["type"]==4?"selected":"";?>>Модульные платформы</option>
                        </select>

                    </div>
                    <div class="cats__viev">

                        <div class="cats__viev--item cats__viev--tile active">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/viev--tile.svg"/>
                        </div>

                        <div class="cats__viev--item cats__viev--rows">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/viev--rows.svg"/>
                        </div>

                    </div>
                </form>

                <div class="cats__items">
                    <div class="catalog__row">



                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<!-- PUT-THE-TECHNIQUE -->
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
<!-- /PUT-THE-TECHNIQUE -->

<!-- product-single__content -->
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
<!-- /product-single__content -->

<!-- contacts -->
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
<!-- /contacts -->

<!-- map -->
<div class="map"></div>
<!-- /map -->