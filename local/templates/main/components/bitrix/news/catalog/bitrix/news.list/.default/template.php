<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?/*
<div class="objects">
	<div class="container">

		<!--<h1>Работа спецтехники от Компании Еврокран</h1>-->

		<div class="row">

			<?foreach($arResult["ITEMS"] as $arItem):?>

				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

			<a class="objects__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">

				<picture>
					<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" alt="">
				</picture>

				<div class="objects__info">
					<h2><?=$arItem["NAME"]?></h2>
					<p><?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?></p>
				</div>

			</a>
			<?endforeach;?>

			<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
				<?=$arResult["NAV_STRING"]?>
			<? } ?>

        </div>

		<!--<a class="btn btn--empty" href="">Загрузить ещё</a>-->

	</div>
</div>
*/?>

<div class="cats__main">
    <div class="container">
        <div class="filter-btn"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/filter1.svg"/>
        </div>
        <!--START SUB_CATS-->
        <accide class="sidebar">
            <div class="sidebar__box">
                <div class="sidebar__title">Параметры</div>
                <div class="sidebar__item">
                    <div class="sidebar__body"><strong>Вид техники</strong>
                        <label class="checkbox">
                            <input type="checkbox" name="">
                            <div class="input"> Мобильные краны</div>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="">
                            <div class="input"> Гусеничные краны</div>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="">
                            <div class="input"> Низкорамные тралы</div>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="">
                            <div class="input"> Модульные платформы</div>
                        </label>
                    </div>
                    <div class="sidebar__body"><strong>Грузоподъемность т.</strong>
                        <div class="ranges">
                            <div class="ranges__inputs">
                                <div class="amount-min">
                                    <input type="number" value="75">
                                </div>
                                <div class="amount-max">
                                    <input type="number" value="300">
                                </div>
                            </div>
                            <div class="slider-range" data-min="40" data-max="750" data-val="[75, 300]"></div>
                        </div>
                    </div>
                    <div class="sidebar__body"><strong>Высота подъема, м.</strong>
                        <div class="ranges">
                            <div class="ranges__inputs">
                                <div class="amount-min">
                                    <input type="number" value="15">
                                </div>
                                <div class="amount-max">
                                    <input type="number" value="70">
                                </div>
                            </div>
                            <div class="slider-range" data-min="10" data-max="84" data-val="[15, 70]"></div>
                        </div>
                        <strong>Высота подъема, м.</strong>
                        <div class="ranges">
                            <div class="ranges__inputs">
                                <div class="amount-min">
                                    <input type="number" value="50">
                                </div>
                                <div class="amount-max">
                                    <input type="number" value="60">
                                </div>
                            </div>
                            <div class="slider-range" data-min="50" data-max="60" data-val="[50, 60]"></div>
                        </div>
                        <label class="btn btn--clear"><span>Очистить фильтр</span>
                            <input type="submit" value="Очистить фильтр">
                        </label>
                        <label class="btn btn--dark"><span>Показать</span>
                            <input type="submit" value="Показать">
                        </label>
                    </div>
                </div>
            </div>
            <div class="sidebar__box">
                <div class="sidebar__title">Парк техники</div>
                <div class="sidebar__item">
                    <div class="sidebar__body">
                        <h3 class="active">Мобильные краны Liebherr LTM</h3>
                        <ul class="active">
                            <li><a href="">LTM 1040 (40 т.)</a></li>
                            <li><a href="">LTM 1050 (50 т.)</a></li>
                            <li><a href="">LTM 1070 (70 т.)</a></li>
                            <li><a href="">LTM 1090 (90 т.)</a></li>
                            <li><a href="">LTM 1095 (95 т.)</a></li>
                            <li><a href="">LTM 1120 (120 т.)</a></li>
                            <li><a href="">LTM 1250 (250 т.)</a></li>
                            <li><a href="">LTM 1300 (300 т.)</a></li>
                            <li><a href="">LTM 1400 (400 т.)</a></li>
                            <li><a href="">LTM 1500 (500 т.)</a></li>
                            <li><a href="">LTM 1750 (750 т.)</a></li>
                        </ul>
                        <h3>Гусеничные краны Liebherr LR</h3>
                        <ul>
                            <li><a href="">LTM 1040 (40 т.)</a></li>
                            <li><a href="">LTM 1050 (50 т.)</a></li>
                            <li><a href="">LTM 1070 (70 т.)</a></li>
                            <li><a href="">LTM 1090 (90 т.)</a></li>
                            <li><a href="">LTM 1095 (95 т.)</a></li>
                            <li><a href="">LTM 1120 (120 т.)</a></li>
                            <li><a href="">LTM 1250 (250 т.)</a></li>
                            <li><a href="">LTM 1300 (300 т.)</a></li>
                            <li><a href="">LTM 1400 (400 т.)</a></li>
                            <li><a href="">LTM 1500 (500 т.)</a></li>
                            <li><a href="">LTM 1750 (750 т.)</a></li>
                        </ul>
                        <h3>Гусеничные краны Liebherr LR</h3>
                        <ul>
                            <li><a href="">LTM 1040 (40 т.)</a></li>
                            <li><a href="">LTM 1050 (50 т.)</a></li>
                            <li><a href="">LTM 1070 (70 т.)</a></li>
                            <li><a href="">LTM 1090 (90 т.)</a></li>
                            <li><a href="">LTM 1095 (95 т.)</a></li>
                            <li><a href="">LTM 1120 (120 т.)</a></li>
                            <li><a href="">LTM 1250 (250 т.)</a></li>
                            <li><a href="">LTM 1300 (300 т.)</a></li>
                            <li><a href="">LTM 1400 (400 т.)</a></li>
                            <li><a href="">LTM 1500 (500 т.)</a></li>
                            <li><a href="">LTM 1750 (750 т.)</a></li>
                        </ul>
                        <h3>Гусеничные краны Liebherr LR</h3>
                        <ul>
                            <li><a href="">LTM 1040 (40 т.)</a></li>
                            <li><a href="">LTM 1050 (50 т.)</a></li>
                            <li><a href="">LTM 1070 (70 т.)</a></li>
                            <li><a href="">LTM 1090 (90 т.)</a></li>
                            <li><a href="">LTM 1095 (95 т.)</a></li>
                            <li><a href="">LTM 1120 (120 т.)</a></li>
                            <li><a href="">LTM 1250 (250 т.)</a></li>
                            <li><a href="">LTM 1300 (300 т.)</a></li>
                            <li><a href="">LTM 1400 (400 т.)</a></li>
                            <li><a href="">LTM 1500 (500 т.)</a></li>
                            <li><a href="">LTM 1750 (750 т.)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </accide>
        <!--END SUB_CATS-->
        <!--START CATS__CONTENT-->
        <div class="cats__content">
            <div class="cats__filterbar">
                <div class="cats__sort"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/sorting.svg"/>
                    <select name="">
                        <option value="">По умолчанию</option>
                        <option value="">По умолчанию</option>
                        <option value="">По умолчанию</option>
                    </select>
                </div>
                <div class="cats__viev">
                    <div class="cats__viev--item cats__viev--tile active"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/viev--tile.svg"/>
                    </div>
                    <div class="cats__viev--item cats__viev--rows"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/viev--rows.svg"/>
                    </div>
                </div>
            </div>
            <div class="cats__items">
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="catalog__row"><a class="catalog__img" href=""
                                             style="background-image:url(<?=SITE_TEMPLATE_PATH?>/dist/img/content/catalog1.jpg)"></a><a
                            class="catalog__title" href="">
                        <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                        <div class="catalog__tr">
                            <p>Грузоподъемность:</p>
                            <p>40 тонн</p>
                        </div>
                        <div class="catalog__tr">
                            <p>Длина стрелы:</p>
                            <p>35 м</p>
                        </div>
                        <div class="catalog__more"><span>Все характеристики</span><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow.svg"/>
                        </div>
                    </a>
                    <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                </div>
                <div class="pagination"><span class="prev"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow-g-l.svg"/></span><a
                            class="active" href="">1</a><a href="">2</a><a
                            href="">3</a><span></span><span></span><span></span><a href="">5</a><a href="">6</a><a
                            href="">7</a><a class="next" href=""><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/arrow-g-r.svg"/></a></div>
            </div>
        </div>
        <!--END CATS__CONTENT-->
    </div>
</div>