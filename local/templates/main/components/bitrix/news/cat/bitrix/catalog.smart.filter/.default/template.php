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

<div class="filter-btn">
    <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/filter1.svg"/>
</div>

<aside class="sidebar">
    <form class="sidebar__box" name="<?=$arResult["FILTER_NAME"]."_form"?>" action="<?=$arResult["FORM_ACTION"]?>" method="get">

		<?foreach($arResult["HIDDEN"] as $arItem):?>
        <input type="hidden" name="<?=$arItem["CONTROL_NAME"]?>" id="<?=$arItem["CONTROL_ID"]?>" value="<?=$arItem["HTML_VALUE"]?>">
		<?endforeach;?>

        <div class="sidebar__title">Параметры</div>

        <div class="sidebar__item">
            <div class="sidebar__body">

                <!--<strong>Вид техники</strong>
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
                </label>-->

				<?php
				foreach ($arResult["ITEMS"] as $key => $arItem):
				    if (empty($arItem["VALUES"]) || isset($arItem["PRICE"])) continue;

                    if (
                        $arItem["DISPLAY_TYPE"] == "A"
                        &&
                        ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                    ) continue;
				?>

                <div class="sidebar__body">
                    <strong><?=$arItem["NAME"]?>,&nbsp;<?=($arItem["ID"] == '2') ? 'т.' : 'м.'?></strong>
					<?if ($arItem["FILTER_HINT"] <> ""):?>
                    <script type="text/javascript">
                        new top.BX.CHint({
                            parent: top.BX("item_title_hint_<?=$arItem["ID"]?>"),
                            show_timeout: 10,
                            hide_timeout: 200,
                            dx: 2,
                            preventHide: true,
                            min_width: 250,
                            hint: '<?=CUtil::JSEscape($arItem["FILTER_HINT"])?>'
                        });
                    </script>
					<?endif?>
                </div>

					<?php
					$arCur = current($arItem["VALUES"]);
					switch ($arItem["DISPLAY_TYPE"]):
						case "A":
                    ?>
                    <div class="ranges">
                        <div class="ranges__inputs">
                            <div class="amount-min">
                                <input
                                    type="number"
                                    name="<?=$arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                    id="<?=$arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                    value="<?=isset($arItem["VALUES"]["MIN"]["HTML_VALUE"]) ? $arItem["VALUES"]["MIN"]["HTML_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"]?>"
                                    onkeyup="smartFilter.keyup(this)"
                                />
                            </div>
                            <div class="amount-max">
                                <input
                                    type="number"
                                    name="<?=$arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
                                    id="<?=$arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
                                    value="<?=isset($arItem["VALUES"]["MAX"]["HTML_VALUE"]) ? $arItem["VALUES"]["MAX"]["HTML_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"]?>"
                                    onkeyup="smartFilter.keyup(this)"
                                />
                            </div>
                        </div>
                        <div
                            class="slider-range"
                            data-min="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                            data-max="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                            data-val="[<?=$arItem["VALUES"]["MIN"]["VALUE"]?>,<?=$arItem["VALUES"]["MAX"]["VALUE"]?>]"
                        >
                        </div>

                    </div>
                    <?break?>
                    <?php
                    endswitch;
                    ?>

                <?endforeach;?>

                <label class="btn btn--clear">
                    <span>Очистить фильтр</span>
                    <input type="submit" value="Очистить фильтр">
                </label>

                <label class="btn btn--dark">
                    <span>Показать</span>
                    <input
                        type="submit"
                        id="set_filter"
                        name="set_filter"
                        value="Показать"
                    />
                </label>

            </div>
        </div>

    </form>
</aside>

<script type="text/javascript">
	var smartFilter = new JCSmartFilter(
        '<?=CUtil::JSEscape($arResult["FORM_ACTION"])?>',
        '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>',
        <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>
    );
</script>
