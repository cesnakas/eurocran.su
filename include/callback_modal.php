<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

if (isset($_POST['send'])){

	$APPLICATION->RestartBuffer();

	if ($_POST['PHONE'] == ''){
		$error = 'Не заполнено обязательное поле';
	} else {
		$el = new CIBlockElement;

		$sid = $el->Add(Array
		(
			'IBLOCK_ID' => 9,
			'ACTIVE' 	=> 'Y',
			'NAME' 		=> 'Запрос заказать звонок',
			'PROPERTY_VALUES' => array('PHONE' => htmlspecialchars(addslashes($_POST['PHONE'])))
		));

		CEvent::Send("CALLBACK", 's1', Array('PHONE' => $_POST['PHONE']));
		unset($_POST['PHONE']);
	}
die();
}
?>

<div class="mini_modal" id="callback_modal">
	<form action="" method="post" id="form_callback">
		<input type="hidden" name="send" value="Y">
		<div class="line">
			<div class="label">Введите ваш номер</div>

			<div class="field">
				<input type="tel" name="PHONE" value="" class="input" placeholder="+7 ___ ___ __ __">
			</div>
		</div>
        <div class="field pers_dann_chk_callback_field">
            <input class="pers_dann_chk_callback_top" type="checkbox" name="CLB_TOP_CHK" checked>
            <a href="/konfidentsialnost.php">Cогласие на обработку персональных данных</a>
        </div>
		<div class="submit">
			<button type="submit" class="submit_btn">Заказать звонок</button>
		</div>
	</form>
</div>
<script>
$(document).ready(function(){
	$("#form_callback").validate({
		submitHandler: function(form){
			$.ajax({
				url: '/include/callback_modal.php',
				type: 'post',
				data: $(form).serialize(),
				success: function(data)
				{
					var instance = $.fancybox.open('<span class="success">Ваш запрос заказать звонок, успешно отправлен.</span>');
					eval(data);
					$("#form_callback")[0].reset();
				}
			});

			return false;
		},
			focusInvalid: true,
			focusCleanup: false,
			rules:
			{
				'PHONE':
				{
					required: true
				},
                'CLB_TOP_CHK':
                {
                    required: true
                }
			},
			messages:
			{
				'PHONE':
				{
					required: "Некорректный номер телефона"
				}
			}
	});
});
</script>