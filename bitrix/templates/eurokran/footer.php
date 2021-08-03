<? if (!isMAIN()) { ?>
					</div>
                </div>
            </section>
        </div>
    </section>
	<? } ?>
	       

    <div class="footer-push"></div>
</div>

<footer>
<div class="black">
	<div class="wrap clearfix">
				<div class="inside">
					<div class="logo_footer"></div>
					<div class="mob767 mob_block">АРЕНДА МОБИЛЬНЫХ И ГУСЕНИЧНЫХ КРАНОВ <b>LIEBHERR</b></div>
				</div>

				<div class="inside title_footer">АРЕНДА МОБИЛЬНЫХ И ГУСЕНИЧНЫХ КРАНОВ <b>LIEBHERR</b></div>
				<div class="inside ul_footer">
					<a class="" href="/">Главная</a>
					<a class="" href="/avtokrany/">Аренда автокранов</a>
					<a class="" href="/tehnika/">Наша техника</a>
					<a class="" href="/objekty/">Наши объекты</a>
					<a class="" href="/o-kompanii/blagodarnosti/">Благодарности</a>				
				</div>
				<div class="inside ul_footer not767">				
					<a class="" href="/o-kompanii/">О компании</a>
					<a class="" href="/vakansii/">Вакансии</a>				
					<a class="" href="/stati/">Статьи</a>	
					<a class="" href="/kontakty/">Контакты</a>	
					<!--<a class="" href="/">Конфиденциальность</a>	 -->
				</div>
	</div>


 
		<?/*
			<p><? $APPLICATION->IncludeFile("inc/footer_copyrights.php", Array(), Array("MODE"=>"html")); ?></p>
		
		<div class="f-dev"><p><? $APPLICATION->IncludeFile("inc/footer_development.php", Array(), Array("MODE"=>"html")); ?></p></div>
		*/?>
</div>
</footer>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UJvpelHO0C';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<!--<div style="height:200px;"></div>-->
<div style="display: none" class="fot_mob" >
	<div id="callback-form" class="fmodal">
	<!--	<h2>Заказать обратный звонок</h2>-->
		<form action="" method="post">
			<input style="padding: 10px;" type="text" name="name" placeholder="Ваше имя" required>
			<input style="padding: 10px;" type="text" name="phone" placeholder="Ваш телефон" required>
            <div style="text-align: left !important;">
                <input type="checkbox" class="agr">
                Подтвердите свое <a href="#" class="pers">согласие</a>
                на обработку персональных данных
            </div>
			<input type="hidden" name="action" value="callback">
			<div class="callback-form-messages success"></div>
			<div class="callback-form-messages error"></div>
			<!--<button type="submit" disabled>Заказать</button>-->
			<input type="submit" onclick="yaCounter46722495.reachGoal('otprzvon'); return true;" disabled value="Заказать">
		</form>
	</div>
</div>

<div style="display: none" class="fot_mob2" >
    <div id="callback-form2" class="fmodal2">
        <form action="" method="post">
            <input style="padding: 10px;" type="text" name="name" placeholder="Ваше имя" required>
            <input style="padding: 10px;" type="text" name="phone" placeholder="Ваш телефон" required>
            <div style="text-align: left !important;">
                <input type="checkbox" class="agr">
                Подтвердите свое <a href="#" class="pers">согласие</a>
                на обработку персональных данных
            </div>
            <input type="hidden" name="action" value="callback">
            <div class="callback-form-messages2 success"></div>
            <div class="callback-form-messages2 error"></div>
            <input type="submit" onclick="yaCounter46722495.reachGoal('otprzvo'); return true;" disabled value="Заказать">
        </form>
    </div>
</div>

<a href="#x" class="overlay" id="callback"></a>
<div class="popup">
    <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "template1", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	"EMAIL_TO" => "evro-k@yandex.ru",
	"REQUIRED_FIELDS" => array(
		0 => "NAME",
		1 => "EMAIL",
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "7",
	)
	),
	false
);?>
    <a class="close" title="Закрыть" href="#close"></a>
</div>

</body>
</html>
<?
CModule::IncludeModule("iblock");
$pureURI = $_SERVER["REQUEST_URI"];
if (substr_count($pureURI, "?")) {
	$pos = strpos($pureURI, "?");
	$pureURI = substr($pureURI, 0, $pos);
}
$arURI = explode("/", $pureURI);
if ($arURI[1] == "tehnika" && strlen($arURI[2]) > 0) {
	$q = CIBlockSection::GetList(Array(), Array("IBLOCK_ID"=>1, "CODE"=>$arURI[2]), false, Array("UF_TITLE", "UF_DESCRIPTION", "UF_KEYWORDS"));
	if ($a = $q->GetNext()) {
		if ($a["UF_TITLE"]) { $APPLICATION->SetPageProperty("title", $a["UF_TITLE"]); }
		if ($a["UF_DESCRIPTION"]) { $APPLICATION->SetPageProperty("description", $a["UF_DESCRIPTION"]); }
		if ($a["UF_KEYWORDS"]) { $APPLICATION->SetPageProperty("keywords", $a["UF_KEYWORDS"]); }
	}
	if (strlen($arURI[3]) > 0) {
		$q = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>1, "CODE"=>$arURI[3]), false, Array("nTopCount"=>1), Array("ID", "PROPERTY_TITLE", "PROPERTY_DESCRIPTION", "PROPERTY_KEYWORDS"));
		if ($a = $q->GetNext()) {
			if ($a["PROPERTY_TITLE_VALUE"]) { $APPLICATION->SetPageProperty("title", $a["PROPERTY_TITLE_VALUE"]); }
			if ($a["PROPERTY_DESCRIPTION_VALUE"]) { $APPLICATION->SetPageProperty("description", $a["PROPERTY_DESCRIPTION_VALUE"]); }
			if ($a["PROPERTY_KEYWORDS_VALUE"]) { $APPLICATION->SetPageProperty("keywords", $a["PROPERTY_KEYWORDS_VALUE"]); }
		}
	}
}
if ($arURI[1] == "objekty" && strlen($arURI[2]) > 0) {
	$q = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>2, "CODE"=>$arURI[2]), false, Array("nTopCount"=>1), Array("ID", 'NAME', "PROPERTY_TITLE", "PROPERTY_DESCRIPTION", "PROPERTY_KEYWORDS"));
	if ($a = $q->GetNext()) {
		if ($a["PROPERTY_TITLE_VALUE"]) { $APPLICATION->SetPageProperty("title", $a["PROPERTY_TITLE_VALUE"]); }
        else if (strlen($a["NAME"])) { $APPLICATION->SetPageProperty("title", "Наши объекты: ".$a["NAME"]); }
		if ($a["PROPERTY_DESCRIPTION_VALUE"]) { $APPLICATION->SetPageProperty("description", $a["PROPERTY_DESCRIPTION_VALUE"]); }
        else if (strlen($a["NAME"])) { $APPLICATION->SetPageProperty("description", "Объекты, где работала наша техника: ".$a["NAME"]); }
		if ($a["PROPERTY_KEYWORDS_VALUE"]) { $APPLICATION->SetPageProperty("keywords", $a["PROPERTY_KEYWORDS_VALUE"]); }
	}
}
?>