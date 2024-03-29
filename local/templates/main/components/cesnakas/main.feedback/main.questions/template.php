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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<form method="POST" action="<?=$APPLICATION->GetCurPage()?>">
	<?=bitrix_sessid_post()?>

	<?php
	if(!empty($arResult["ERROR_MESSAGE"])) {
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	} ?>

    <input type="text" name="user_name" placeholder="Ваше имя" value="<?=$arResult["AUTHOR_NAME"]?>" required>

    <input type="text" name="user_phone" placeholder="Ваш телефон*" value="<?=$arResult["AUTHOR_PHONE"]?>" required>

    <input type="text" name="user_email" placeholder="Ваша почта" value="<?=$arResult["AUTHOR_EMAIL"]?>">

    <textarea name="MESSAGE" placeholder="Оставьте ваш вопрос"><?=$arResult["MESSAGE"]?></textarea>

    <label class="checkbox">
        <input type="checkbox" checked="checked">
        <div class="input"></div><span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных </span>
    </label>

    <label class="btn btn--full">
        Заказать звонок
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <input type="submit" name="submit">
    </label>

	<?if($arResult["OK_MESSAGE"] <> ''):?>
        <!--<div class="mf-ok-text"><?/*=$arResult["OK_MESSAGE"]*/?></div>-->
        <script>
            $('#request-success').addClass('open');
        </script>
    <?endif;?>

</form>