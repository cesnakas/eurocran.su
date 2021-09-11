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

	<div class="row">

		<input type="text" name="user_name" placeholder="Ваше имя" value="<?=$arResult["AUTHOR_NAME"]?>" required>

		<input type="tel" name="user_phone" placeholder="Ваш телефон*" value="<?=$arResult["AUTHOR_PHONE"]?>" required>

		<label class="btn btn--full">
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            Получить консультацию
			<input type="submit" name="submit">
		</label>

	</div>

	<label class="checkbox">
		<input type="checkbox" checked="checked">
		<div class="input"></div><span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных</span>
	</label>

	<?if(strlen($arResult["OK_MESSAGE"]) > 0):?>
		<?/* =$arResult["OK_MESSAGE"] */?>
		<script>
            $('#request-success').addClass('open');
		</script>
	<?endif;?>

</form>