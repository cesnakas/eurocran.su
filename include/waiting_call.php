<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

if (isset($_POST['wait'])){

	$APPLICATION->RestartBuffer();

	if ($_POST['NAME'] == '' || $_POST['PHONE'] == ''){
		$error = 'Не заполнено обязательное поле';
	} else {
		$el = new CIBlockElement;

		$sid = $el->Add(Array
		(
			'IBLOCK_ID' => 9,
			'ACTIVE' 	=> 'Y',
			'NAME' 		=> 'Запрос консультация специалиста',
			'PROPERTY_VALUES' => array('NAME' => htmlspecialchars(addslashes($_POST['NAME'])), 'PHONE' => htmlspecialchars(addslashes($_POST['PHONE'])))
		));

		CEvent::Send("CALLBACK", 's1', Array('NAME' => $_POST['NAME'], 'PHONE' => $_POST['PHONE']));
		unset($_POST['PHONE']);
	}
die();
}
?>

<div class="action_form">
	<div class="block_title">Нужна помощь в подборе? Специалист проконсультирует!</div>

	<form action="" class="form" id="wait_call">
		<input type="hidden" name="wait" value="Y">
		<div class="line">
			<div class="field">
				<input type="text" name="NAME" value="" class="input" placeholder="Имя*">
			</div>
		</div>

		<div class="line">
			<div class="field">
				<input type="tel" name="PHONE" value="" class="input" placeholder="Телефон*">
			</div>
		</div>

		<div class="submit">
			<button type="submit" class="submit_btn">ЖДУ ЗВОНКА!</button>
		</div>

        <div class="field pers_dann_chk_callback_field">
            <input class="pers_dann_chk_callback_top" type="checkbox" name="CLB_CATEGORY_CHK" checked>
            <a href="/konfidentsialnost.php">Cогласие на обработку персональных данных</a>
        </div>
	</form>
</div>
<script>
$(document).ready(function(){
	$("#wait_call").validate({
		submitHandler: function(form){
			$.ajax({
				url: '/include/waiting_call.php',
				type: 'post',
				data: $(form).serialize(),
				success: function(data)
				{
					var instance = $.fancybox.open('<span class="success">Ваш запрос консультация специалиста, успешно отправлен.</span>');
					eval(data);
					$("#wait_call")[0].reset();
				}
			});

			return false;
		},
			focusInvalid: true,
			focusCleanup: false,
			rules:
			{
				'NAME':
				{
					required: true
				},
				'PHONE':
				{
					required: true
				},
                'CLB_CATEGORY_CHK':
                {
                    required: true
                }
			},
			messages:
			{
				'NAME':
				{
					required: "Не указано Имя"
				},
				'PHONE':
				{
					required: "Некорректный номер телефона"
				}
			}
	});
});
</script>