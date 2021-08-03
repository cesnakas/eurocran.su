<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arParams['DEBUG_MODE'] == 'Y'):?>
	Определено JS: <?=count($arResult['JS']);?><br />
	Определено CSS: <?=count($arResult['CSS']);?><br />
	Подключено строк в HEAD: <?=count($arResult['ADD2HEAD']);?><br />
	<pre>arParams = <?print_r($arParams)?></pre>
	<pre>arResult = <?print_r($arResult)?></pre>
<?endif;?>