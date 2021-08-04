<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Компания «Еврокран» предлагает в аренду спецтехнику на выгодных условиях. Большой парк башенных, гусеничных и мобильных кранов любой грузоподъёмности, а также транспортных средств для перевозки крупногабаритного и тяжеловесного груза. Работаем по Москве и Московской области");
$APPLICATION->SetPageProperty("title", "Аренда кранов: гусеничных и мобильных Liebherr в Москве и РФ");
$APPLICATION->SetTitle("Аренда автокранов и спецтехники в Москве | eurocran.su");
?>

    <!--START PROMO-->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"promo",
		array(
			"IBLOCK_TYPE" => "-",
			"IBLOCK_ID" => "3",
			"NEWS_COUNT" => "20",
			"SORT_BY1" => "sort",
			"SORT_ORDER1" => "asc",
			"SORT_BY2" => "id",
			"SORT_ORDER2" => "desc",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_TEMPLATE" => "",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			//"PAGER_SHOW_ALL" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>
	<!--END PROMO-->

	<!--START LEASE-->
	<div class="lease">
		<div class="container">
			<div class="g-title">
				<h1> <span>Спецтехника </span> в аренду</h1>
			</div>
		</div>
		<div class="lease__slider" id="lease__slider">
			<div class="lease__item">
				<div class="row">
					<div class="lease__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/lease1.jpg"/>
					</div>
					<div class="lease__text">
						<div class="g-title">
							<h3>Гусеничные краны</h3>
						</div>
						<p>Аренда гусеничного крана – актуальная услуга для многих строительных площадок. Использование спецтехники существенно упрощает погрузку - выгрузку материалов, оптимизирует рабочий процесс.</p>
						<div class="lease__btn"><a class="btn btn--full" href=""> Выбрать спецтехнику</a></div>
					</div>
				</div>
			</div>
			<div class="lease__item">
				<div class="row">
					<div class="lease__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/lease1.jpg"/>
					</div>
					<div class="lease__text">
						<div class="g-title">
							<h3>Гусеничные краны</h3>
						</div>
						<p>Аренда гусеничного крана – актуальная услуга для многих строительных площадок. Использование спецтехники существенно упрощает погрузку - выгрузку материалов, оптимизирует рабочий процесс.</p>
						<div class="lease__btn"><a class="btn btn--full" href=""> Выбрать спецтехнику</a></div>
					</div>
				</div>
			</div>
			<div class="lease__item">
				<div class="row">
					<div class="lease__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/lease1.jpg"/>
					</div>
					<div class="lease__text">
						<div class="g-title">
							<h3>Гусеничные краны</h3>
						</div>
						<p>Аренда гусеничного крана – актуальная услуга для многих строительных площадок. Использование спецтехники существенно упрощает погрузку - выгрузку материалов, оптимизирует рабочий процесс.</p>
						<div class="lease__btn"><a class="btn btn--full" href=""> Выбрать спецтехнику</a></div>
					</div>
				</div>
			</div>
			<div class="lease__item">
				<div class="row">
					<div class="lease__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/lease1.jpg"/>
					</div>
					<div class="lease__text">
						<div class="g-title">
							<h3>Гусеничные краны</h3>
						</div>
						<p>Аренда гусеничного крана – актуальная услуга для многих строительных площадок. Использование спецтехники существенно упрощает погрузку - выгрузку материалов, оптимизирует рабочий процесс.</p>
						<div class="lease__btn"><a class="btn btn--full" href=""> Выбрать спецтехнику</a></div>
					</div>
				</div>
			</div>
			<div class="lease__item">
				<div class="row">
					<div class="lease__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/lease1.jpg"/>
					</div>
					<div class="lease__text">
						<div class="g-title">
							<h3>Гусеничные краны</h3>
						</div>
						<p>Аренда гусеничного крана – актуальная услуга для многих строительных площадок. Использование спецтехники существенно упрощает погрузку - выгрузку материалов, оптимизирует рабочий процесс.</p>
						<div class="lease__btn"><a class="btn btn--full" href=""> Выбрать спецтехнику</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="lease__arrows"></div>
		<div class="lease__dots"></div>
	</div>
	<!--END LEASE-->

	<!--START RELIABLE-->
	<div class="reliable">
		<div class="container">
			<div class="g-title">
				<h2>С нами надежно</h2>
			</div>
			<div class="row">
				<div class="reliable__text">
					<p>Компания Еврокран успешно работает на территории РФ с 2000 года. </p>
					<p>В нашем автопарке гусеничные и мобильные краны известного немецкого бренда. </p>
					<p>Среди них есть модели любой грузоподъемности, для погрузочных, монтажных, транспортировочных и других работ. </p>
					<p>Обращение в компанию гарантирует комплексный подход к решению поставленных задач. Получить больше информации можно у менеджеров Компании Еврокран.</p>
					<div class="reliable__btn"><a class="btn btn--full" href="">Заказать звонок</a></div>
				</div>
				<div class="reliable__row">
					<div class="reliable__item"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/reliable1.svg"/></i>
						<p>Поставка техники <br> точно в срок</p>
					</div>
					<div class="reliable__item"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/reliable2.svg"/></i>
						<p>Сопровождение <br> спецтехники</p>
					</div>
					<div class="reliable__item"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/reliable3.svg"/></i>
						<p>Квалифицированнные <br> специалисты</p>
					</div>
					<div class="reliable__item"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/reliable4.svg"/></i>
						<p>Автопарк от ведущих <br> мировых производителей</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END RELIABLE-->

	<!--START NUMBERS-->
	<div class="numbers">
		<div class="container">
			<div class="row">
				<div class="numbers__item"> <strong class="count1" data-num="20">0</strong>
					<p>лет на рынке</p>
				</div>
				<div class="numbers__item"> <strong class="count2" data-num="1000">0</strong>
					<p>выполненных проектов</p>
				</div>
				<div class="numbers__item"> <strong class="count3" data-num="20">0</strong>
					<p>единиц техники всегда в <br> наличии</p>
				</div>
			</div>
		</div>
	</div>
	<!--END NUMBERS-->

	<!--START PROJECTS-->
	<div class="projects">
		<div class="container">
			<div class="g-title">
				<h2>Реализованные проекты</h2>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"projects",
			array(
				"IBLOCK_TYPE" => "catalog",
				"IBLOCK_ID" => "2",
				"NEWS_COUNT" => "12",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "ID",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "DESCRIPTION",
					1 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Наши краны на объектах",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_OPTION_ADDITIONAL" => "",
				"COMPONENT_TEMPLATE" => "eurocran",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_META_DESCRIPTION" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"STRICT_SECTION_CHECK" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => ""
			),
			false
		);?>
	</div>
	<!--END PROJECTS-->

	<!--START CATALOG-->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "catalog-home",
        array(
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "1",
            "NEWS_COUNT" => "0",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "arrFilter",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "INHOME",
                1 => "",
                2 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Аренда мобильных автокранов",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_OPTION_ADDITIONAL" => ""
        ),
        false
    );?>
	<!--END CATALOG-->

	<!--START RENT-PRICE-->
	<div class="rent-price">
		<div class="container">
			<div class="g-title">
				<h2>Из чего складывается стоимость аренды</h2>
			</div>
			<ul>
				<li>
					<div class="rent-price__number">01</div>
					<div class="rent-price__shadow">01</div>
					<p>Стоимость аренды крана определяется так: 8 (восемь) часов работы каждой единицы спецтехники в течение смены.</p>
				</li>
				<li>
					<div class="rent-price__number">02</div>
					<div class="rent-price__shadow">02</div>
					<p> География доставки спецтехники – вся территория РФ и страны СНГ.</p>
				</li>
				<li>
					<div class="rent-price__number">03</div>
					<div class="rent-price__shadow">03</div>
					<p> Стоимость мобилизации и демобилизации за МКАД и на территорию в границах ТТК обговаривается индивидуально и требует дополнительной оплаты.</p>
				</li>
				<li>
					<div class="rent-price__number">04</div>
					<div class="rent-price__shadow">04</div>
					<p> Обозначенная в прайс-листе стоимость услуг включает НДС – 20 %.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--END RENT-PRICE-->

	<!--START PUT-THE-TECHNIQUE-->
	<div class="put-the-technique">
		<div class="container">
			<div class="g-title">
				<h3><span>Оперативно </span> поставим технику</h3>
			</div>
			<form action="">
				<div class="row">
					<input type="text" placeholder="Ваше имя">
					<input type="text" placeholder="Ваш телефон*">
					<label class="btn btn--full">Заказать звонок
						<input type="submit">
					</label>
				</div>
				<label class="checkbox">
					<input type="checkbox" checked="checked">
					<div class="input"></div><span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных</span>
				</label>
			</form>
		</div>
	</div>
	<!--END PUT-THE-TECHNIQUE-->

	<!--START ABOUT-->
	<div class="about">
		<div class="container--lg">
			<div class="row">
				<div class="about__content">
					<div class="about__box">
						<div class="about__pc">
							<div class="g-title">
								<h2>О нас</h2>
							</div>
						</div>
						<div class="about__text">
							<p>Компания ЕвроКран – это команда специалистов, <br> обеспечивающих эффективное использование <br> высокопроизводительных немецких автокранов марки LIEBHERR. </p>
							<p>Мы работаем с 2000 года и за это время не раз доказали свой профессионализм и компетентность: сегодня нам доверяют крупнейшие предприятия России.</p>
							<p>Мы обладаем собственным парком с более чем 50 единицами техники и находимся в черте Москвы. Поэтому мы можем подать любую технику в любую точку города незамедлительно, что бывает весьма кстати в случае возникновения каких-либо непредвиденных ситуаций.</p>
						</div>
					</div>
				</div>
				<div class="about__video">
					<div class="about__mob"></div><a class="video" href="https://www.youtube.com/watch?v=vlDzYIIOYmM&amp;list=LL&amp;index=1"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/about-video.jpg"/></a>
				</div>
			</div>
		</div>
	</div>
	<!--END ABOUT-->

	<!--START SERVICES-->
	<div class="services">
		<div class="container">
			<div class="g-title">
				<h2>Услуги</h2>
			</div>
			<div class="row">
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services1.png"/>
					</div>
					<div class="services__btn btn--full">Аренда мобильных автокранов Liebherr</div>
                </a>
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services2.jpg"/>
					</div>
					<div class="services__btn btn--full">Аренда гусеничных кранов Liebherr</div>
                </a>
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services3.jpg"/>
					</div>
					<div class="services__btn btn--full">Аренда низкорамных тралов</div>
                </a>
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services4.jpg"/>
					</div>
					<div class="services__btn btn--full">Перевозка негабаритного и тяжеловесного груза</div>
                </a>
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services5.jpg"/>
					</div>
					<div class="services__btn btn--full">Разработка ППРК</div>
                </a>
                <a class="services__item" href="">
					<div class="services__img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/content/services6.jpg"/>
					</div>
					<div class="services__btn btn--full"> Выезд специалиста на объект</div>
                </a>
            </div>
		</div>
	</div>
	<!--END SERVICES-->

	<!--START INFO-BLOCK-->
	<div class="info-block">
		<div class="container">
			<h2>Аренда автокранов LIEBHERR в Москве</h2>
			<p>Аренда автокранов решает разные задачи. Благодаря большой грузоподъемности техника используется при установке и разборке башенных кранов, строительстве мостовых пролетов, монтаже дымовых труб самонесущей конструкции, выполнении аварийно-восстановительных работ в Москве. </p>
			<h2>Аренда спецтехники Liebherr </h2>
			<p>Liebherr («Либхерр») — известная немецкая машиностроительная компания. Ее автокраны востребованы во всем мире благодаря своим уникальным возможностям. Основополагающие критерии их выбора — скорость и качество работы. Крупные строительные компании и частные лица предпочитают арендовать строительные краны «Либхерр». Их выбор обусловлен надежностью, высокой производительностью установок. Срок службы агрегатов исчисляется десятилетиями, на протяжении которых они сохраняют свои характеристики и не теряют качества.</p>
			<p>На сегодняшний день мы реализовали сотни успешных проектов. Среди них:</p>
			<ul>
				<li>Предоставление автокрана Liebherr LR 1750 и автотрейлеров из собственного парка компании «Казметрострой». Техника использовалась для демонтажа и перевозки проходческих щитов.</li>
				<li>Участие автокрана Liebherr LR 1750 и автотрейлеров в демонтаже проходческого щита на участке метрополитена от станции «Выхино» до «Косино-Ухтомской».</li>
				<li>Использование Liebherr LTM 1500 в качестве основной мощности для производства работ при возведении Лукомльской ГРЭС. В качестве арендатора выступала китайская машиностроительная инжиниринговая компания.</li>
				<li>Аренда низкорамных тралов для транспортировки спецтехники официального дилера ТМ в России, компании ООО «Либхерр-Русланд».</li>
				<li>Установка нового реактора гидрокрекинга на территории завода ОАО «Уфанефтехим».</li>
				<li>Демонтаж старых и монтаж новых чиллеров на крыше здания Mail.ru. Арендатор — строительный холдинг КМТ.</li>
				<li>Монтаж мостовых балок на головном участке автомобильной скоростной дороги Москва-Санкт-Петербург, произведенный с использованием кранов Liebherr.</li>
				<li>Транспортировка и установка проходческого щита из Протвино в Москву для возведения Бутовской линии метрополитена. Заказ выполнен компанией «Транстоннельстрой».</li>
			</ul>
			<p>Условия аренды оговариваются индивидуально. География предоставления услуги — Москва, Санкт-Петербург, Екатеринбург, Нижний Новгород, Пермь, Воронеж, Челябинск, Краснодар, Ярославль, Самара, Уфа и другие города РФ.</p>
		</div>
	</div>
	<!--END INFO-BLOCK-->

	<!--START QUESTIONS-->
	<div class="questions">
		<div class="container">
			<div class="g-title">
				<h3>Остались вопросы?</h3>
			</div>
			<p>Оставьте заявку на звонок и мы ответим на все ваши вопросы в самое ближайшее время</p>
			<form action="">
				<input type="text" placeholder="Ваше имя">
				<input type="text" placeholder="Ваш телефон*">
				<input type="text" placeholder="Ваша почта">
				<textarea name="" placeholder="Оставьте ваш вопрос"></textarea>
				<label class="checkbox">
					<input type="checkbox" checked="checked">
					<div class="input"></div><span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных </span>
				</label>
				<label class="btn btn--full">Заказать звонок
					<input type="text">
				</label>
			</form>
		</div>
	</div>
	<!--END QUESTIONS-->

	<!--START MAP-->
	<div class="map"></div>
	<!--END MAP-->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>