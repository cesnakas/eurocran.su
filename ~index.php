<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("description", "Компания «Еврокран» предлагает в аренду спецтехнику на выгодных условиях. Большой парк башенных, гусеничных и мобильных кранов любой грузоподъёмности, а также транспортных средств для перевозки крупногабаритного и тяжеловесного груза. Работаем по Москве и Московской области");
$APPLICATION->SetPageProperty("title", "Аренда кранов: гусеничных и мобильных Liebherr в Москве и РФ");
$APPLICATION->SetTitle("Аренда автокранов и спецтехники в Москве | eurocran.su");
?>
<div class="slider">
    <?/*$APPLICATION->IncludeComponent(
        "innova:slider",
        "main_slider",
        array(
            "COMPONENT_TEMPLATE" => "main_slider",
            "IBLOCK_ID" => "3",
            "HEIGHT" => "",
            "HEIGHT_MOBILE" => "",
            "HIDE_TEXT" => "N",
            "TEXT_ALIGN" => "center",
            "STRETCH_TYPE" => "1",
            "SLIDER_COLOR" => "rgba(0, 0, 0, 0.6)",
            "BTN_COLOR" => "#FFFFFF",
            "SPEED" => "100",
            "AUTOPLAY" => "false",
            "AUTOPLAY_SPEED" => "3000",
            "CACHE_TYPE" => "N"
        ),
        false
    );*/?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "fotorama1", array(
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
</div>

<div class="index-slider-panel">
	<div class="wrap">
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"eurocran", 
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
	<div class="black inside-block">
	    <div class="wrap">
		 	<div class="left-image">
		 		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infoimg.php"),false);?>
		 	</div>
			<div class="right-info">
				<h2 class="title_main">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infotext.php"),false);?>
				</h2>
				<div class="text_info">
					<span class="ico_info"></span>
					<span class="all_info"><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infoone.php"),false);?></span>
				</div>
				<div class="text_info">
					<span class="ico_info"></span>
					<span class="all_info"><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infotwo.php"),false);?></span>
				</div>
				<div class="text_info">
					<span class="ico_info"></span>
					<span class="all_info"><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infothree.php"),false);?></span>
				</div>
				<a id="cons_button_main" onclick="yaCounter46722495.reachGoal('otkkonsul'); return true;" class="item-callback-button button" href="#callback-form2" rel="modal:open">
					<i class="arrow_info"></i>
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/infobtn.php"),false);?>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="wrap clearfix text">
    <div style="padding:20px 35px 0 35px;">
    	<div class="main_slider"> 
  			<div class="avtokrany-block">
  				<?
					$GLOBALS['arrFilter'] = array("SECTION_ID" => 1, "PROPERTY_32" => 3);
				?>
  				<?$APPLICATION->IncludeComponent("bitrix:news.list", "eurocran-home", array(
					"IBLOCK_TYPE" => "catalog",
					"IBLOCK_ID" => "1",
					"NEWS_COUNT" => "3",
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
    			<div class="link-to-all-container">
    			   	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/btnone.php"),false);?>
    			</div>
   			</div>
 
  			<div class="avtokrany-block">
  				<?
					$GLOBALS['arrFilterTwo'] = array("SECTION_ID" => 2, "PROPERTY_32" => 3);
				?>
  			  	<?$APPLICATION->IncludeComponent("bitrix:news.list", "eurocran-home", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"NEWS_COUNT" => "3",
	"SORT_BY1" => "NAME",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "arrFilterTwo",
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
	"PARENT_SECTION_CODE" => "apenda-gusenichnykh-kpanov-liebherr-lr",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Аренда гусеничных кранов",
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
				<div class="grey"> 
      				<div class="link-to-all-container">
    			   		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/btntwo.php"),false);?>
      				</div>
     			</div>
   			</div>
   			<div class="seo-text">
   				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "standard.php","COMPONENT_TEMPLATE" => ".default","PATH" => "/bitrix/templates/eurokran/include/home/seotext.php"),false);?>
   			</div>
   		</div>
 	</div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>