<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

    <?php
    $APPLICATION->IncludeComponent(
        'bitrix:news',
        'catalog',
        [
            'IBLOCK_TYPE' => 'catalog',
            'IBLOCK_ID' => '1',
            'SEF_MODE' => 'Y',
            'SEF_FOLDER' => '/catalog/~index.php/',
            'SEF_URL_TEMPLATES' => [
                'news' => '',
                'section' => '#SECTION_CODE#/',
                'detail' => '#ELEMENT_CODE#/', // '~detail.php?ELEMENT_ID=#ELEMENT_ID#',
            ],
            'SECTION_ID' => $_REQUEST['CODE'],
            'ELEMENT_ID' => $_REQUEST['ID'],
            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
            'ADD_SECTIONS_CHAIN' => 'N',
            'LIST_FIELD_CODE' => [''],
            'LIST_PROPERTY_CODE' => ['PARAMS','PHOTO','PDF','PDF2','P1','P2','P3','TYPE','NAMEWIDE','TITLE','DESCRIPTION','KEYWORDS','H1_TITLE','PRICES','PRICES_DET','INHOME','DETAIL_TEXT','PREVIEW_TEXT'],
            'DETAIL_FIELD_CODE' => [''],
            'DETAIL_PROPERTY_CODE' => ['PARAMS','PHOTO','PDF','PDF2','P1','P2','P3','TYPE','NAMEWIDE','TITLE','DESCRIPTION','KEYWORDS','H1_TITLE','PRICES','PRICES_DET','INHOME','DETAIL_TEXT','PREVIEW_TEXT'],
            'USE_FILTER' => 'Y',
            'FILTER_NAME' => 'arrFilter',
            'FILTER_PROPERTY_CODE' => ['PHOTO','PDF','PDF2','P1','P2','P3','TYPE']
        ],
        false
    );?>

	<!--START PUT-THE-TECHNIQUE-->
	<div class="put-the-technique">
		<div class="container">
			<div class="g-title">
				<h2>Нужна помощь в подборе? </h2>
			</div>
			<?php
			$APPLICATION->IncludeComponent(
				'cesnakas:main.feedback',
				'main.technique',
				[
					'USE_CAPTCHA' => 'N',
					'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
					'EMAIL_TO' => 'evro-k@yandex.ru',
					'REQUIRED_FIELDS' => ['NAME','PHONE'],
					'EVENT_MESSAGE_ID' => ['7']
				]
			);?>
		</div>
	</div>
	<!--END PUT-THE-TECHNIQUE-->

    <div class="product-single__content">
        <div class="container">
			<?php
            $APPLICATION->IncludeFile(
				SITE_TEMPLATE_PATH.'/include/catalog/product-content.php',
				[],
				['SHOW_BORDER' => true, 'MODE' => 'text']
			);?>
        </div>
    </div>

    <!--START CONTACTS-B-->
    <div class="contacts contacts--block">
        <div class="container">
            <div class="g-title">
                <h2>Контакты</h2>
            </div>
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
        </div>
    </div>
    <!--END CONTACTS-B-->

    <!--START MAP-->
    <div class="map"></div>
    <!--END MAP-->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>