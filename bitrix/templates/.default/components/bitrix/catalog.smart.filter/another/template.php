<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/colors.min.css',
	'TEMPLATE_CLASS' => 'bx-'.$arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME']))
{
	$this->addExternalCss($templateData['TEMPLATE_THEME']);
}
$this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME']."/bootstrap.css");
?>
<aside>
<div class="bx-filter <?=$templateData["TEMPLATE_CLASS"]?> <?if ($arParams["FILTER_VIEW_MODE"] == "HORIZONTAL") echo "bx-filter-horizontal"?> filter">
	<button class="mob_filter_btn"><?echo GetMessage("CT_BCSF_FILTER_TITLE")?></button>
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<div class="title"><?echo GetMessage("CT_BCSF_FILTER_TITLE")?></div>
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;?>
				<?
				//with sliders
				foreach($arResult["ITEMS"] as $key=>$arItem)
				{
					if(
						empty($arItem["VALUES"])
						|| isset($arItem["PRICE"])
					)
						continue;

					if (
						$arItem["DISPLAY_TYPE"] == "A"
						&& (
							$arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
						)
					)
						continue;
					//if($arItem["ID"] !== '2'){
					?>
					<div class="item bx-filter-parameters-box <?if ($arItem["DISPLAY_EXPANDED"]== "Y"):?>bx-active<?endif?>">
						<span class="bx-filter-container-modef"></span>
						<div class="bx-filter-parameters-box-title">
							<div class="bx-filter-parameters-box-hint name"><?=$arItem["NAME"]?>,&nbsp;<?=($arItem["ID"] == '2') ? 'т.' : 'м.'?>
								<?if ($arItem["FILTER_HINT"] <> ""):?>
									<script type="text/javascript">
										new top.BX.CHint({
											parent: top.BX("item_title_hint_<?echo $arItem["ID"]?>"),
											show_timeout: 10,
											hide_timeout: 200,
											dx: 2,
											preventHide: true,
											min_width: 250,
											hint: '<?= CUtil::JSEscape($arItem["FILTER_HINT"])?>'
										});
									</script>
								<?endif?>
							</div>
						</div>

						<div class="bx-filter-block" data-role="bx_filter_block">
							<div class="row bx-filter-parameters-box-container">
							<?
							$arCur = current($arItem["VALUES"]);
							switch ($arItem["DISPLAY_TYPE"])
							{
								case "A"://NUMBERS_WITH_SLIDER
									?>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo isset($arItem["VALUES"]["MIN"]["HTML_VALUE"]) ? $arItem["VALUES"]["MIN"]["HTML_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"]?>"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo isset($arItem["VALUES"]["MAX"]["HTML_VALUE"]) ? $arItem["VALUES"]["MAX"]["HTML_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"]?>"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>

									<div class="col-xs-12 bx-ui-slider-track-container">
										<div class="bx-ui-slider-track" id="drag_track_<?=$key?>">
											<?
											$precision = $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0;
											$step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / 4;
											$value1 = number_format($arItem["VALUES"]["MIN"]["VALUE"], $precision, ".", "");
											$value2 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step, $precision, ".", "");
											$value3 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * 2, $precision, ".", "");
											$value4 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * 3, $precision, ".", "");
											$value5 = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
											?>
											<div class="bx-ui-slider-part p1"><span><?=$value1?></span></div>
											<div class="bx-ui-slider-part p2"><span><?=$value2?></span></div>
											<div class="bx-ui-slider-part p3"><span><?=$value3?></span></div>
											<div class="bx-ui-slider-part p4"><span><?=$value4?></span></div>
											<div class="bx-ui-slider-part p5"><span><?=$value5?></span></div>

											<div class="bx-ui-slider-pricebar-vd" style="left: 0;right: 0;" id="colorUnavailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-vn" style="left: 0;right: 0;" id="colorAvailableInactive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-v"  style="left: 0;right: 0;" id="colorAvailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-range" 	id="drag_tracker_<?=$key?>"  style="left: 0;right: 0;">
												<a class="bx-ui-slider-handle left"  style="left:0;" href="javascript:void(0)" id="left_slider_<?=$key?>"></a>
												<a class="bx-ui-slider-handle right" style="right:0;" href="javascript:void(0)" id="right_slider_<?=$key?>"></a>
											</div>
										</div>
									</div>
									<?
									$arJsParams = array(
										"leftSlider" => 'left_slider_'.$key,
										"rightSlider" => 'right_slider_'.$key,
										"tracker" => "drag_tracker_".$key,
										"trackerWrap" => "drag_track_".$key,
										"minInputId" => $arItem["VALUES"]["MIN"]["CONTROL_ID"],
										"maxInputId" => $arItem["VALUES"]["MAX"]["CONTROL_ID"],
										"minPrice" => $arItem["VALUES"]["MIN"]["VALUE"],
										"maxPrice" => $arItem["VALUES"]["MAX"]["VALUE"],
										"curMinPrice" => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
										"curMaxPrice" => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
										"fltMinPrice" => intval($arItem["VALUES"]["MIN"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MIN"]["FILTERED_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"] ,
										"fltMaxPrice" => intval($arItem["VALUES"]["MAX"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MAX"]["FILTERED_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"],
										"precision" => $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0,
										"colorUnavailableActive" => 'colorUnavailableActive_'.$key,
										"colorAvailableActive" => 'colorAvailableActive_'.$key,
										"colorAvailableInactive" => 'colorAvailableInactive_'.$key,
									);
									?>
									<script type="text/javascript">
										BX.ready(function(){
											window['trackBar<?=$key?>'] = new BX.Iblock.SmartFilter(<?=CUtil::PhpToJSObject($arJsParams)?>);
										});
									</script>
									<?
									break;
								case "B"://NUMBERS
									?>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_FROM")?></i>
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_TO")?></i>
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												/>
										</div>
									</div>
									<?
									break;
								default://CHECKBOXES
									?>
									<div class="col-xs-12">
										<?foreach($arItem["VALUES"] as $val => $ar):?>
											<div class="checkbox">
												<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label <? echo $ar["DISABLED"] ? 'disabled': '' ?>" for="<? echo $ar["CONTROL_ID"] ?>">
													<span class="bx-filter-input-checkbox">
														<input
															type="checkbox"
															value="<? echo $ar["HTML_VALUE"] ?>"
															name="<? echo $ar["CONTROL_NAME"] ?>"
															id="<? echo $ar["CONTROL_ID"] ?>"
															<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
															onclick="smartFilter.click(this)"
														/>
														<span class="bx-filter-param-text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
														if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
															?>&nbsp;(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
														endif;?></span>
													</span>
												</label>
											</div>
										<?endforeach;?>
									</div>
							<?
							}
							?>
							</div>
						</div>
					</div>
				<?
					//}
				}
				?>
			<div class="row">
				<div class="col-xs-12 bx-filter-button-box">
					<div class="bx-filter-block">
						<div class="bx-filter-parameters-box-container justify-content-between">
							<input
								class="btn btn-themes"
								type="submit"
								id="set_filter"
								name="set_filter"
								value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"
							/>
							<input
								class="btn btn-link"
								type="submit"
								id="del_filter"
								name="del_filter"
								value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
							/>
							<div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
								<?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
								<span class="arrow"></span>
								<br/>
								<a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?$pureURI = $_SERVER["REQUEST_URI"];
			if (substr_count($pureURI, "?")) {
				$pos = strpos($pureURI, "?");
				$pureURI = substr($pureURI, 0, $pos);
			}
			$arURI = explode("/", $pureURI);
			CModule::IncludeModule("iblock");
			$q = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "DEPTH_LEVEL"=>1, "ACTIVE"=>"Y"), false);
			while ($a = $q->GetNext()) {
			?>
			<div class="item">
				<div class="name spoler_btn<?if($arParams["SECTION_ID"] == $a["ID"]) echo " active";?>"><?=$a["NAME"]?><div class="icon"></div></div>
				<div class="data"<?if($arParams["SECTION_ID"] == $a["ID"]) echo " style='display:block'";?>>
					<? $qEl = CIBlockElement::GetList(Array("SORT" => "ASC"), Array("IBLOCK_ID" => 1, "SECTION_ID" => $a["ID"], "ACTIVE" => "Y"), false, false, Array("ID", "NAME", "DETAIL_PAGE_URL"));
						$qSec = CIBlockSection::GetList(Array("SORT" => "ASC"), Array("SECTION_ID" => $a["ID"], "ACTIVE" => "Y"), false);?>
					<? while ($aEl = $qEl->GetNext()) { ?>
						<div><a href="<?= $aEl["DETAIL_PAGE_URL"] ?>"><?= $aEl["NAME"] ?></a></div>
					<? } ?>
					<? while ($chA = $qSec->GetNext()) { ?>
						<div><a href="<?= $chA["SECTION_PAGE_URL"] ?>"><?= $chA["NAME"] ?></a></div>
					<? } ?>
				</div>
			</div>
			<? } ?>
		</form>
</div>
</aside>
<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>