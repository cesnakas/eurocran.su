<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ООО \"Компания ЕвроКран\" ► Контакты");
$APPLICATION->SetPageProperty("title", "Контакты компании Еврокран, адрес и телефоны, время работы");
$APPLICATION->SetPageProperty("description", "ООО \"Компания ЕвроКран\" ► Москва, Россия, 117628, 🚇 Бульвар Дмитрия Донского, ул. Куликовская, 12. ☎ +7(495) 226-20-30 ✓ ☎ +7(495) 364-55-18 ✓ ☎ +7(495) 645-19-20 ✓.");
?>

	<!--START BREADCRUMB-->
	<div class="breadcrumb">
		<div class="container">
			<div class="bx-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
				<div class="bx-breadcrumb-item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" title="Главная" itemprop="item"><span itemprop="name">Главная</span></a>
					<meta itemprop="position" content="1"/>
				</div>
				<div class="bx-breadcrumb-item"><span>Контакты</span></div>
			</div>
		</div>
	</div>
	<!--END BREADCRUMBS-->

    <!--START CONTACTS-B-->
    <div class="contacts">
        <div class="container">
            <h1>Контакты</h1>
            <div class="row">
                <div class="contacts__info">
                    <div class="contacts__loc"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/location.svg"/></i><span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span></div>
                    <div class="contacts__row">
                        <div class="contacts__tel"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/phone.svg"/></i><span> <a href="tel:+74999299666">+7 (499)929-96-66</a><a href="tel:+79853645518">+7 (985)364-55-18</a><a href="tel:+79852262030">+7 (985)226-20-30</a></span></div>
                        <div class="contacts__other">
                            <div class="contacts__mail"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/mail.svg"/></i><a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a></div>
                            <div class="contacts__schedule"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/clock.svg"/></i><span>10:00 - 17:00</span></div>
                        </div>
                    </div>
                    <div class="contacts__row2">
                        <h3>Реквизиты:</h3>
                        <div class="contacts__tel"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/doc.svg"/></i><span> <b>ООО "Компания Еврокран" </b><b>ИНН: 7718999293</b><b>ОГРН: 5147746130593</b></span></div>
                    </div>
                </div>
                <div class="contacts__form">
                    <form action="">
                        <input type="text" placeholder="Ваше имя">
                        <div class="form__row">
                            <input type="tel" placeholder="Ваш телефон*">
                            <input type="email" placeholder="Ваша почта">
                        </div>
                        <textarea name="" placeholder="Оставьте ваш вопрос"></textarea>
                        <label class="checkbox">
                            <input type="checkbox" checked="checked">
                            <div class="input"></div><span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных</span>
                        </label>
                        <label class="btn btn--full">Оставить заявку
                            <input type="submit">
                        </label>
                    </form>
                </div>
            </div>
            <div class="contacts__text">
                <h3>Как добраться:</h3>
                <p>Принимая во внимание показатели успешности, глубокий уровень погружения играет определяющее значение для прогресса профессионального сообщества. Лишь предприниматели в сети интернет, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут ограничены исключительно образом мышления. Кстати, активно развивающиеся страны третьего мира смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.</p>
            </div>
        </div>
    </div>
    <!--END CONTACTS-B-->

    <!--START MAP-->
    <div class="map"></div>
    <!--END MAP-->

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>