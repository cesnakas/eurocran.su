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
            "SORT_BY1" => "ID",
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
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "lease",
        Array(
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "1",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
            "COUNT_ELEMENTS" => "Y",
            "TOP_DEPTH" => "1",
            "SECTION_FIELDS" => [''],
            "SECTION_USER_FIELDS" => "",
            'FILTER_NAME' => 'sectionFilter',
            "VIEW_MODE" => "TILE",

            "SHOW_PARENT_NAME" => "Y",
            "SECTION_URL" => "",
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_NOTES" => "",
            "CACHE_GROUPS" => "Y"
        )
    );?>
    <!--END LEASE-->

	<!--START RELIABLE-->
	<div class="reliable">
		<div class="container">
			<div class="g-title">
				<h2>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/reliable-title.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
                </h2>
			</div>
			<div class="row">
				<div class="reliable__text">
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/reliable-text.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
					<div class="reliable__btn">
                        <a class="btn btn--full open-modal" href="#submit-request">Заказать звонок</a>
                    </div>
				</div>
				<div class="reliable__row">
					<div class="reliable__item">
                        <i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/reliable1.svg"/></i>
						<?$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH.'/include/reliable-item_1.php',
							[],
							['SHOW_BORDER' => true, 'MODE' => 'text']
						);?>
					</div>
					<div class="reliable__item">
                        <i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/reliable2.svg"/></i>
						<?$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH.'/include/reliable-item_2.php',
							[],
							['SHOW_BORDER' => true, 'MODE' => 'text']
						);?>
					</div>
					<div class="reliable__item">
                        <i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/reliable3.svg"/></i>
						<?$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH.'/include/reliable-item_3.php',
							[],
							['SHOW_BORDER' => true, 'MODE' => 'text']
						);?>
					</div>
					<div class="reliable__item">
                        <i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/reliable4.svg"/></i>
						<?$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH.'/include/reliable-item_4.php',
							[],
							['SHOW_BORDER' => true, 'MODE' => 'text']
						);?>
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
				<div class="numbers__item">
                    <strong class="count1" data-num="20">0</strong>
					<p>лет на рынке</p>
				</div>
				<div class="numbers__item">
                    <strong class="count2" data-num="1000">0</strong>
					<p>выполненных проектов</p>
				</div>
				<div class="numbers__item">
                    <strong class="count3" data-num="20">0</strong>
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
				<h2>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/projects-title.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
                </h2>
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
				<h2>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/rent-price_title.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
                </h2>
			</div>
			<ul>
				<li>
					<div class="rent-price__number">01</div>
					<div class="rent-price__shadow">01</div>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/rent-price_item-1.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
				</li>
				<li>
					<div class="rent-price__number">02</div>
					<div class="rent-price__shadow">02</div>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/rent-price_item-2.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
				</li>
				<li>
					<div class="rent-price__number">03</div>
					<div class="rent-price__shadow">03</div>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/rent-price_item-3.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
				</li>
				<li>
					<div class="rent-price__number">04</div>
					<div class="rent-price__shadow">04</div>
					<?$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH.'/include/rent-price_item-4.php',
						[],
						['SHOW_BORDER' => true, 'MODE' => 'text']
					);?>
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
							<?$APPLICATION->IncludeFile(
								SITE_TEMPLATE_PATH.'/include/about_text.php',
								[],
								['SHOW_BORDER' => true, 'MODE' => 'text']
							);?>
						</div>
					</div>
				</div>
				<div class="about__video">
					<div class="about__mob"></div>
                    <a class="video" href="https://www.youtube.com/watch?v=vlDzYIIOYmM&amp;list=LL&amp;index=1">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/about-video.jpg"/>
                    </a>
				</div>
			</div>
		</div>
	</div>
	<!--END ABOUT-->

	<!--START SERVICES-->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "services-home",
        array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "services",
            "IBLOCK_ID" => "11",
            "NEWS_COUNT" => "9",
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
            "DETAIL_URL" => "", // "/uslugi/#SECTION_CODE#/#ELEMENT_CODE#/",
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
            "INCLUDE_SUBSECTIONS" => "Y",
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

	<!--START INFO-BLOCK-->
	<div class="info-block">
		<div class="container">
			<?$APPLICATION->IncludeFile(
				SITE_TEMPLATE_PATH.'/include/info-block.php',
				[],
				['SHOW_BORDER' => true, 'MODE' => 'html']
			);?>
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
			<?php
			$APPLICATION->IncludeComponent(
				'cesnakas:main.feedback',
				'main.questions',
				[
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_SHADOW" => "Y",
					'USE_CAPTCHA' => 'N',
					'OK_TEXT' => 'Спасибо, ваше сообщение принято.',
					'EMAIL_TO' => 'evro-k@yandex.ru',
					'REQUIRED_FIELDS' => ['NAME','PHONE','EMAIL','MESSAGE'],
					'EVENT_MESSAGE_ID' => ['7']
				]
			);?>
        </div>
	</div>
	<!--END QUESTIONS-->

	<!--START MAP-->
	<div class="map"></div>
	<!--END MAP-->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>