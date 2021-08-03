<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<table border="1" cellpadding="5" cellspacing="5">
	<tr valign="top">
		<td><h2>Image<h2></td>
		<td><h2>$arParams</h2></td>
		<td><h2>$arResult</h2></td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td><?echo '<pre>';print_r($arParams);echo '</pre>';?></td>
		<td><?echo '<pre>';print_r($arResult);echo '</pre>';?></td>
	</tr>
</table>