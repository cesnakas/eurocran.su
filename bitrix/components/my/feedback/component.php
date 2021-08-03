<div class="feedback clearfix">
	<div class="title_main">Форма обратной связи</div>
	<div class="feedback-column clearfix">
		<textarea name="text" class="textarea" cols="" rows="" placeholder="Ваше сообщение" onblur="if(this.value==''){this.value='Ваше сообщение';}" ></textarea>
		<div class="error" style="display:none;">
			Ошибка:<br>
			Необходимо заполнить все поля!
		</div>
	</div>
	<div class="feedback-column-x clearfix">
		<input type="text" name="name" class="input-text" value="" placeholder="Ваше имя" onblur="if(this.value==''){this.value='Имя';}" onfocus="if(this.value=='Имя'){this.value='';}">
		<input type="text" name="phone" class="input-text" value="" placeholder="Ваш телефон" onblur="if(this.value==''){this.value='Контактный телефон';}" onfocus="if(this.value=='Контактный телефон'){this.value='';}">
		<input type="text" name="email" class="input-text" value="" placeholder="Ваш E-Mail" onblur="if(this.value==''){this.value='E-Mail';}" onfocus="if(this.value=='E-Mail'){this.value='';}">

		<input type="button" class="input-button" value="Отправить сообщение" onclick="yaCounter40309860.reachGoal('obratnaya_sviaz'); return true;">
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
		$(".feedback .pers").click(function(){
			$.get('/pers.html',function(data){
				$.fancybox({
					'content'  : data,
    'autoDimensions': false,
    'padding'       : 10,
    'width'         : 'auto',
    'height'        : '80%',
    'autoScale'     : false
				});
			});
			return false;
		});
		$(".feedback .agr").click(function(){
			x=$(this).prop('checked');
			$tt=$('.feedback input[type=button]');
			if(x==true){
				$tt.attr('disabled',false);
				$tt.css('background','#81F781');
				$tt.css('cursor','pointer');
			}
			else{
				$tt.attr('disabled',true);
				$tt.css('background','rgb(221, 221, 221)');
				$tt.css('cursor','default');
			}
		});
		
	$(".feedback input[type=button]").click(function() {
		
		var name = $(".feedback input[name=name]").val();
		var phone = $(".feedback input[name=phone]").val();
		var email = $(".feedback input[name=email]").val();
		var text = $(".feedback textarea[name=text]").val();
		var error = false;
		
		$(".feedback .error").hide();
		
		$(".feedback input[type=text], .feedback textarea").each(function(i) {
			var v = $(this).val();
			var p = $(this).attr("placeholder");
			if (v == p || v.length == 0) {
				error = 'Необходимо заполнить все поля!';
			}
		});
		
		if (!error) {
			$.post("/include/functions.php", {action:"feedback", name:name, phone:phone, email:email, text:text}, function (response) {
				console.log(response);
			});
			//$(".feedback input[type=text], .feedback textarea").val('').blur();
			alert('Ваше сообщение успешно отправлено!');
		} else {
			$(".feedback .error").html('Ошибка:<br>'+error).show();
		}
		
	});
	
});
</script>