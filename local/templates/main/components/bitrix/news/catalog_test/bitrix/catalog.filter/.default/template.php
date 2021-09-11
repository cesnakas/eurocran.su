<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="filter-btn">
	<img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/filter1.svg"/>
</div>

<aside class="sidebar">
	<div class="sidebar__box">
		<div class="sidebar__title">Параметры</div>
		<!--//-->
        <div class="sidebar__item">

            <div class="sidebar__body">
                <strong>Вид техники</strong>
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

            <div class="sidebar__body">
                <strong>Грузоподъемность т.</strong>
                <!--<div class="ranges">
                    <div class="ranges__inputs">
                        <div class="amount-min">
                            <input type="number" value="75">
                        </div>
                        <div class="amount-max">
                            <input type="number" value="300">
                        </div>
                    </div>
                    <div class="slider-range" data-min="40" data-max="750" data-val="[75, 300]"></div>
                </div>-->
            </div>

            <div class="sidebar__body">

                <strong>Высота подъема, м.</strong>
                <!--<div class="ranges">
                    <div class="ranges__inputs">
                        <div class="amount-min">
                            <input type="number" value="15">
                        </div>
                        <div class="amount-max">
                            <input type="number" value="70">
                        </div>
                    </div>
                    <div class="slider-range" data-min="10" data-max="84" data-val="[15, 70]"></div>
                </div>-->

                <strong>Высота подъема, м.</strong>
                <!--<div class="ranges">
                    <div class="ranges__inputs">
                        <div class="amount-min">
                            <input type="number" value="50">
                        </div>
                        <div class="amount-max">
                            <input type="number" value="60">
                        </div>
                    </div>
                    <div class="slider-range" data-min="50" data-max="60" data-val="[50, 60]"></div>
                </div>-->

                <label class="btn btn--clear"><span>Очистить фильтр</span>
                    <input type="submit" value="Очистить фильтр">
                </label>

                <label class="btn btn--dark"><span>Показать</span>
                    <input type="submit" value="Показать">
                </label>

            </div>
        </div>
        <!--//-->
	</div>
</aside>
