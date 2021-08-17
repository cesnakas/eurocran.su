<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "ООО \"Компания ЕвроКран\" - предоставляет в аренду высокоэффективные немецкие гусенечные и автокраны LIEBHERR на все территории РФ! Большой парк автокранов!");
$APPLICATION->SetPageProperty("title", "О компании ООО \"Компания ЕвроКран\" - аренда мобильных кранов Liebherr");
$APPLICATION->SetTitle("О КОМПАНИИ");
?>

	<!--START ABOUT-->
	<div class="okompanii">
		<div class="container">
			<div class="g-title">
				<h1>О Компании Еврокран</h1>
			</div>
		</div>
		<div class="container--lg">
			<div class="row">
				<div class="okompanii__content">
					<div class="okompanii__box">
						<div class="okompanii__text">
							<?php
                            $APPLICATION->IncludeFile(
								SITE_TEMPLATE_PATH.'/include/about/okompanii-text.php',
								[],
								['SHOW_BORDER' => true, 'MODE' => 'text']
							);?>
						</div>
					</div>
				</div>
				<div class="okompanii__video">
                    <a class="video" href="https://www.youtube.com/watch?v=vlDzYIIOYmM&amp;list=LL&amp;index=1">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/about-video2.jpg"/>
                    </a>
                </div>
			</div>
		</div>
	</div>
	<!--END ABOUT-->

    <!--START SERVICES-->
    <?php
    $APPLICATION->IncludeComponent(
        'bitrix:news.list',
        'services-home',
        array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "services",
            "IBLOCK_ID" => "11",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => 'ID',
            "SORT_ORDER1" => 'ASC',
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "DESCRIPTION",
                2 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "COMPONENT_TEMPLATE" => "services-home",
            "STRICT_SECTION_CHECK" => "N",
            "FILE_404" => ""
        ),
        false
    );?>
    <!--END SERVICES-->

    <!--START LETERS-->
    <div class="leters">
        <div class="container">
            <div class="g-title">
                <h2>Клиенты говорят о нас</h2>
            </div>
            <div class="leters__arrows"></div>
            <div class="leters__slider" id="leters__slider">
                <div class="leters__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/leters1.jpg"/>
                </div>
                <div class="leters__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/leters2.jpg"/>
                </div>
                <div class="leters__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/leters3.jpg"/>
                </div>
                <div class="leters__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/leters1.jpg"/>
                </div>
            </div>
            <div class="leters__dots"></div>
        </div>
    </div>
    <!--END LETERS-->

    <!--START RENT-PRICE-->
    <div class="rent-price">
        <div class="container">
            <div class="g-title">
                <h2>Несколько фактов о нас</h2>
            </div>
            <ul>
                <li>
                    <div class="rent-price__number">01</div>
                    <div class="rent-price__shadow">01</div>
                    <h3>Прозрачность</h3>
                    <p>работаем с клиентами без посредников</p>
                </li>
                <li>
                    <div class="rent-price__number">02</div>
                    <div class="rent-price__shadow">02</div>
                    <h3>Ответственность</h3>
                    <p> исполняем обязательства в соответствии с договором и гарантируем завершение работы в срок</p>
                </li>
                <li>
                    <div class="rent-price__number">03</div>
                    <div class="rent-price__shadow">03</div>
                    <h3>Профессионализм</h3>
                    <p> постоянная подготовка кадров для безопасной работы со спецтехникой любой сложности</p>
                </li>
                <li>
                    <div class="rent-price__number">04</div>
                    <div class="rent-price__shadow">04</div>
                    <h3>Качество</h3>
                    <p>высший класс обслуживания заказчиков и новейший парк техники</p>
                </li>
            </ul>
        </div>
    </div>
    <!--END RENT-PRICE-->

    <!--START INFO-BLOCK-->
    <div class="info-block">
        <div class="container">
            <h2>Заголовок</h2>
            <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
            <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
        </div>
    </div>
    <!--END INFO-BLOCK-->

    <!--START CONTACTS-B-->
    <div class="contacts">
        <div class="container">
            <div class="g-title">
                <h2>Контакты</h2>
            </div>
            <div class="row">
                <div class="contacts__info">
                    <p>Ежедневно мы развиваемся и стараемся стать лучше для вас, поэтому всегда рады получить от вас обратную связь с пожеланиями и идеями по улучшению наших продуктов!</p>
                    <p>Если у вас остались вопросы или есть предложения как стать лучше пишите нам!</p>
                    <div class="contacts__loc"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/location.svg"/></i><span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span></div>
                    <div class="contacts__row">
                        <div class="contacts__tel"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/phone.svg"/></i><span> <a href="tel:+74999299666">+7 (499)929-96-66</a><a href="tel:+79853645518">+7 (985)364-55-18</a><a href="tel:+79852262030">+7 (985)226-20-30</a></span></div>
                        <div class="contacts__other">
                            <div class="contacts__mail"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/mail.svg"/></i><a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a></div>
                            <div class="contacts__schedule"><i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/clock.svg"/></i><span>10:00 - 17:00</span></div>
                        </div>
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
        </div>
    </div>
    <!--END CONTACTS-B-->

    <!--START MAP-->
    <div class="map"></div>
    <!--END MAP-->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>