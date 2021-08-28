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
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
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
			<form action="">
				<div class="row">
					<input type="text" placeholder="Имя">
					<input type="text" placeholder="Телефон">
					<label class="btn btn--full">Получить консультацию
						<input type="submit">
					</label>
				</div>
			</form>
		</div>
	</div>
	<!--END PUT-THE-TECHNIQUE-->

    <div class="product-single__content">
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

    <!--START CONTACTS-B-->
    <div class="contacts contacts--block">
        <div class="container">
            <div class="g-title">
                <h2>Контакты</h2>
            </div>
            <div class="row">
                <div class="contacts__info">
                    <p>Ежедневно мы развиваемся и стараемся стать лучше для вас, поэтому всегда рады получить от вас обратную связь с пожеланиями и идеями по улучшению наших продуктов!</p>
                    <p>Если у вас остались вопросы или есть предложения как стать лучше пишите нам!</p>
                    <div class="contacts__loc"><i class="icon"> <img src="img/content/location.svg"/></i><span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span></div>
                    <div class="contacts__row">
                        <div class="contacts__tel"><i class="icon"><img src="img/content/phone.svg"/></i><span> <a href="tel:+74999299666">+7 (499)929-96-66</a><a href="tel:+79853645518">+7 (985)364-55-18</a><a href="tel:+79852262030">+7 (985)226-20-30</a></span></div>
                        <div class="contacts__other">
                            <div class="contacts__mail"><i class="icon"> <img src="img/content/mail.svg"/></i><a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a></div>
                            <div class="contacts__schedule"><i class="icon"> <img src="img/content/clock.svg"/></i><span>10:00 - 17:00</span></div>
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