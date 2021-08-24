<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

	<?$APPLICATION->IncludeComponent(
		'bitrix:news.detail',
		'catalog-single',
		[
			'IBLOCK_TYPE' => 'catalog',
			'IBLOCK_ID' => '1',
			'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
			'ELEMENT_CODE' => $_REQUEST['ELEMENT_CODE'],
			'FIELD_CODE' => ['ID',''],
			'PROPERTY_CODE' => ['PHOTO','P1']
		]
	);?>

	<!--START PUT-THE-TECHNIQUE-->
	<div class="put-the-technique">
		<div class="container">
			<div class="g-title">
				<h2>Нужна помощь в подборе? </h2>
			</div>
			<form action="">
				<div class="row">
					<input type="text" placeholder="Имя">
					<input type="text" placeholder="Телефон">
					<label class="btn btn--full">Получить консультацию
						<input type="submit">
					</label>
				</div>
			</form>
		</div>
	</div>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>