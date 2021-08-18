<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<?php
if(!empty($arResult["ERROR_MESSAGE"])) {
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0) {
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=$APPLICATION->GetCurPage()?>" method="POST">
	<?=bitrix_sessid_post()?>

	<input type="text" name="user_name" placeholder="Ваше имя" value="<?=$arResult["AUTHOR_NAME"]?>">

	<div class="form__row">
		<input type="tel" name="user_phone" placeholder="Ваш телефон*" value="<?=$arResult["AUTHOR_PHONE"]?>">
		<input type="email" name="user_email" placeholder="Ваша почта" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<textarea name="MESSAGE" placeholder="Оставьте ваш вопрос"><?=$arResult["MESSAGE"]?></textarea>

	<label class="checkbox">
		<input type="checkbox" checked="checked">
		<div class="input"></div>
		<span>Я согласен с <a href="">условиями обработки</a> и использования моих персональных данных</span>
	</label>

	<label class="btn btn--full">
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		Оставить заявку
		<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</label>

</form>