<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

        <!--START FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer__logo">
                        <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/logo-footer.svg"/></a>
                        <p>Аренда мобильных и <br> гусеничных кранов LIEBHERR</p>
                        <b>© 2000-<?=date('Y')?> Все права защищены</b>
                    </div>
                    <div class="footer__item">
                        <h3>Клиентам</h3>
                        <ul>
                            <li><a href="<?=SITE_DIR?>o-kompanii/">О компании</a></li>
                            <li><a href="<?=SITE_DIR?>uslugi/">Услуги</a></li>
                            <li><a href="<?=SITE_DIR?>tehnika/">Каталог техники</a></li>
                            <li><a href="<?=SITE_DIR?>avtokrany/">Аренда кранов</a></li>
                            <li><a href="<?=SITE_DIR?>objekty/">Наши работы</a></li>
                            <li><a href="<?=SITE_DIR?>prais-list/">Прайс-лист</a></li>
                            <li><a href="<?=SITE_DIR?>kontakty/">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h3>Техника</h3>
                        <ul>
                            <li><a href="<?=SITE_DIR?>tehnika/apenda-gusenichnykh-kpanov-liebherr-lr/">Гусеничные краны</a></li>
                            <li><a href="<?=SITE_DIR?>tehnika/apenda-mobilnykh-avtokpanov-liebherr-ltm/">Мобильные краны</a></li>
                            <li><a href="<?=SITE_DIR?>tehnika/arenda-nizkoramnykh-tralov/">Низкорамные тралы</a></li>
                            <li><a href="<?=SITE_DIR?>tehnika/arenda-modulnykh-platform/">Модульные платформы</a></li>
                        </ul>
                    </div>
                    <div class="footer__item2">
                        <h3>Услуги</h3>
                        <ul>
                            <li><a href="<?=SITE_DIR?>">Аренда гусеничного крана</a></li>
                            <li><a href="<?=SITE_DIR?>">Аренда мобильного крана</a></li>
                            <li><a href="<?=SITE_DIR?>">Аренда башенного крана</a></li>
                            <li><a href="<?=SITE_DIR?>">Перевозка негабаритного груза</a></li>
                            <li><a href="<?=SITE_DIR?>">Разработка ппрк</a></li>
                        </ul>
                    </div>
                    <div class="footer__actions">
                        <a class="btn btn--full" href="#callback-form">Свяжитесь со мной</a>
                        <ul>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/insta.svg"/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/twitter.svg"/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/whatsapp.svg"/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/vk.svg"/></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/yandex.svg"/></a></li>
                        </ul>
                    </div>
                    <div class="footer__contacts">
                        <h3>Контакты</h3>
                        <a href="tel:+74999299666">+7 (499)929-96-66</a>
                        <a href="tel:+79853645518">+7 (985)364-55-18</a>
                        <a href="tel:+79852262030">+7 (985)226-20-30</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->
    </div>

    <!-- Feedback -->
    <?/*
    <a href="#x" class="overlay" id="callback"></a>
    <div class="popup">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.feedback",
            "template1",
            array(
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
    */?>
    <!-- /Feedback -->

</body>
</html>