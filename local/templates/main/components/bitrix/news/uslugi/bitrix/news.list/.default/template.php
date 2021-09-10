<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
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

<div class="services">
	<div class="container">

		<div class="g-title">
			<h2>Услуги</h2>
		</div>

		<div class="row">
			<?foreach($arResult['ITEMS'] as $arItem):?>
				<a class="services__item" href="<?=$arItem['DETAIL_PAGE_URL']?>">
					<div class="services__img">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"/>
					</div>
					<div class="services__btn btn--full"><?=$arItem['NAME']?></div>
				</a>
			<?endforeach;?>
		</div>

	</div>
</div>

<br><br><br>

<!--START PUT-THE-TECHNIQUE-->
<div class="put-the-technique">
    <div class="container">
        <div class="g-title">
            <h3>Нужна помощь в подборе?</h3>
        </div>

		<?php
		$APPLICATION->IncludeComponent(
			'cesnakas:main.feedback',
			'main.technique',
			[
				'USE_CAPTCHA' => 'N',
				'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
				'EMAIL_TO' => 'evro-k@yandex.ru',
				'REQUIRED_FIELDS' => ['NAME','PHONE'],
				'EVENT_MESSAGE_ID' => ['7']
			]
		);?>

    </div>
</div>
<!--END PUT-THE-TECHNIQUE-->