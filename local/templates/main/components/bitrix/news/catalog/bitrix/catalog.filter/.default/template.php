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

<form name="<?=$arResult['FILTER_NAME'].'_form'?>" action="<?=$arResult['FORM_ACTION']?>" method="get">

    <?/* foreach ($arResult['ITEMS'] as $arItem):
        if (array_key_exists('HIDDEN', $arItem)):
            echo $arItem['INPUT'];
        endif;
    endforeach; */?>

    <div class="sidebar__box">

        <div class="sidebar__title">Параметры</div>

        <div class="sidebar__item">

            <div class="sidebar__body">

                <strong>Вид техники</strong>

				<? foreach ($arResult['ITEMS'] as $arItem): ?>
                <div class="sidebar__body">
					<? if (!array_key_exists('HIDDEN', $arItem)): ?>
				    <?=$arItem['NAME']?>
                    <div class="ranges__inputs">
                        <?=$arItem['INPUT']?>
                    </div>
                    <div class="slider-range" data-min="40" data-max="750" data-val="[75, 300]"></div>
					<? endif ?>
                </div>
				<? endforeach; ?>

                <!--<label class="checkbox">
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
                </label>-->

            </div>

            <!--<div class="sidebar__body">
                <strong>Грузоподъемность т.</strong>
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
            </div>-->

            <div class="sidebar__body">

                <!--<strong>Высота подъема, м.</strong>
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
                </div>-->

                <!--<strong>Высота подъема, м.</strong>
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
                </div>-->

                <label class="btn btn--clear">
                    <span>Очистить фильтр</span>
                    <input type="submit" name="del_filter" value="Очистить фильтр">
                </label>
                <label class="btn btn--dark">
                    <span>Показать</span>
                    <input type="submit" name="set_filter" value="Показать">
                    <input type="hidden" name="set_filter" value="Y"/>
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

</form>

    <pre><?var_dump($arItem)?></pre>

<?/*
<form name="<?=$arResult['FILTER_NAME'].'_form'?>" action="<?=$arResult['FORM_ACTION']?>" method="get">

	<? foreach ($arResult["ITEMS"] as $arItem):
		if (array_key_exists("HIDDEN", $arItem)):
			echo $arItem["INPUT"];
		endif;
	endforeach; ?>

    <table class="data-table" cellspacing="0" cellpadding="2">
        <thead>
        <tr>
            <td colspan="2" align="center"><?= GetMessage("IBLOCK_FILTER_TITLE") ?></td>
        </tr>
        </thead>
        <tbody>
		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<? if (!array_key_exists("HIDDEN", $arItem)): ?>
                <tr>
                    <td valign="top"><?= $arItem["NAME"] ?>:</td>
                    <td valign="top"><?= $arItem["INPUT"] ?></td>
                </tr>
			<? endif ?>
		<? endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">
                <input type="submit" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>"/>
                <input type="hidden" name="set_filter" value="Y"/>
            &nbsp;&nbsp;  <input type="submit" name="del_filter" value="<?=GetMessage("IBLOCK_DEL_FILTER")?>"/>
            </td>
        </tr>
        </tfoot>
    </table>
</form>
*/?>