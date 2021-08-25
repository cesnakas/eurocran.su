<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

	<?$APPLICATION->IncludeComponent(
		'bitrix:news.detail',
		'catalog-single',
		[
			'IBLOCK_TYPE' => 'catalog',
			'IBLOCK_ID' => '1',
			'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
			'ELEMENT_CODE' => $_REQUEST['ELEMENT_CODE'],
			'FIELD_CODE' => ['ID',''],
			'PROPERTY_CODE' => ['PHOTO','P1']
		]
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
    <div class="catalog">
        <div class="container">
            <div class="g-title">
                <h2>Похожие краны</h2>
            </div>
            <div class="catalog__arrows"></div>
            <div class="catalog__dots"></div>
            <div class="catalog__slider" id="catalog__slider">
                <div class="catalog__item">
                    <div class="catalog__row">
                        <a class="catalog__img" href="" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a>
                        <a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3>
                        </a>
                        <a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more">
                                <span>Все характеристики</span>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn">
                            <a class="btn btn--full" href="">Арендовать</a>
                        </div>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="catalog__row"><a class="catalog__img" href=""
                                                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a><a
                                class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img
                                        src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="catalog__row"><a class="catalog__img" href=""
                                                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a><a
                                class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img
                                        src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="catalog__row"><a class="catalog__img" href=""
                                                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a><a
                                class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img
                                        src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="catalog__row"><a class="catalog__img" href=""
                                                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a><a
                                class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img
                                        src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="catalog__row"><a class="catalog__img" href=""
                                                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/dist/img/content/catalog1.jpg)"></a><a
                                class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img
                                        src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                            </div>
                        </a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>