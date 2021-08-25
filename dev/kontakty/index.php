<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("ООО \"Компания ЕвроКран\" ► Контакты");
$APPLICATION->SetPageProperty("title", "Контакты компании Еврокран, адрес и телефоны, время работы");
$APPLICATION->SetPageProperty("description", "ООО \"Компания ЕвроКран\" ► Москва, Россия, 117628, 🚇 Бульвар Дмитрия Донского, ул. Куликовская, 12. ☎ +7(495) 226-20-30 ✓ ☎ +7(495) 364-55-18 ✓ ☎ +7(495) 645-19-20 ✓.");
?>

    <div class="contacts">
        <div class="container">
            <h1>Контакты</h1>
            <div class="row">
                <div class="contacts__info">
                    <div class="contacts__loc">
                        <i class="icon">
                            <svg width="24" height="24" fill="#FCB427" role="img" aria-label="Location">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/images/icons.svg#location"/>
                            </svg>
                        </i>
                        <span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span>
                    </div>
                    <div class="contacts__row">
                        <div class="contacts__tel">
                            <i class="icon">
                                <svg width="24" height="24" fill="#FCB427" role="img" aria-label="Phone">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/images/icons.svg#phone"/>
                                </svg>
                            </i>
                            <span>
                                <a href="tel:+74999299666">+7 (499)929-96-66</a>
                                <a href="tel:+79853645518">+7 (985)364-55-18</a>
                                <a href="tel:+79852262030">+7 (985)226-20-30</a>
                            </span>
                        </div>
                        <div class="contacts__other">
                            <div class="contacts__mail">
                                <i class="icon">
                                    <svg width="24" height="24" fill="#FCB427" role="img" aria-label="Mail">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/images/icons.svg#mail"/>
                                    </svg>
                                </i>
                                <a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a>
                            </div>
                            <div class="contacts__schedule">
                                <i class="icon">
                                    <svg width="24" height="24" fill="#FCB427" role="img" aria-label="Time">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/images/icons.svg#workTime"/>
                                    </svg>
                                </i>
                                <span>10:00 - 17:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__row2">
                        <h3>Реквизиты:</h3>
                        <div class="contacts__tel">
                            <i class="icon">
                                <svg width="24" height="24" fill="#FCB427" role="img" aria-label="Doc">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH;?>/images/icons.svg#doc"/>
                                </svg>
                            </i>
                            <span>
                                <b>ООО "Компания Еврокран"</b><b>ИНН: 7718999293</b><b>ОГРН: 5147746130593</b>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="contacts__form">
					<?php
                    $APPLICATION->IncludeComponent(
                        'cesnakas:main.feedback',
                        '.default',
                        [
							'USE_CAPTCHA' => 'N',
							'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
							'EMAIL_TO' => 'evro-k@yandex.ru',
							'REQUIRED_FIELDS' => Array('NAME','PHONE','EMAIL','MESSAGE'),
							'EVENT_MESSAGE_ID' => Array('7')
						]
					);?>
                </div>
            </div>
            <div class="contacts__text">
				<?php
				$APPLICATION->IncludeFile(
					SITE_TEMPLATE_PATH.'/include/contacts/contacts__text.php',
					[],
					['SHOW_BORDER' => true, 'MODE' => 'text']
				);?>
            </div>
        </div>
    </div>

    <div class="map"></div>


<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>