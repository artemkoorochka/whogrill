<?
/**
 * @var CBitrixComponentTemplate $this
 */
use Bitrix\Main\Localization\Loc;
if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
if(empty($arResult['ELEMENTS']))
    return;
$this->setFrameMode(true);
$this->addExternalJs("https://api-maps.yandex.ru/2.1/?apikey=" . $arParams["API_KEY"] . "&lang=ru_RU");
Loc::loadLanguageFile(__FILE__);
?>

<div class="gr_wrapper_tabs">
    <ul class="gr_nav_tabs nav nav-pills">

        <?foreach ($arResult["CITIES"] as $city):?>
            <li class="<?=$city["INDEX"] > 1 ? "" : "active"?> gr_tabs_link gr_tab_<?=$city["INDEX"]?>">
                <a data-toggle="tab" href="#<?=$city["CODE"]?>"><?=$city["NAME"]?></a>
            </li>
        <?endforeach;?>

        <li class="gr_indicator"></li>
    </ul>
</div>
<div class="tab-content">
    <?foreach ($arResult["CITIES"] as $city):?>
        <div class="tab-pane <?=$city["INDEX"] > 1 ? "" : "active"?>" id="<?=$city["CODE"]?>">

            <div class="gr_left_adress">
                <div class="gr_adress_list <?=$city["INDEX"] > 1 ? "right_slider" : "left_slider"?>">
                    <?
                    foreach ($arResult['ELEMENTS'] as $shop):
                        if($shop["IBLOCK_SECTION_ID"] <> $city["ID"])
                            continue;
                    ?>
                        <div class="gr_item_adress">
                            <div class="gr_adress_body">
                                <div class="gr_text_adress">
                                    <h3 class="gr_title_adress"><?=$shop["NAME"]?></h3>
                                    <h4 class="gr_subtitle_adress"><?=$shop["PREVIEW_TEXT"]?></h4>
                                    <div class="gr_info_bottom">
                                        <?if(!empty($shop["PROPS"]["PHONE"])):?>
                                            <a class="gr_time_adress" href="tel:<?=$shop["PROPS"]["PHONE"]["VALUE"]?>"><?=$shop["PROPS"]["PHONE"]["VALUE"]?></a>
                                        <?endif;?>
                                        <a class="gr_way_adress"
                                           data-id="<?=$shop["ID"]?>"
                                           data-type="<?=$arParams["IBLOCK_TYPE"]?>"
                                           data-ib="<?=$arParams["IBLOCK_ID"]?>"
                                           onclick="whogrillAdressDetail.open(this)"><?=Loc::getMessage("CONTACTS_MAP_DETAIL")?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>


            <div class="gr_right_adress">
                <div id="yandex-map-<?=$city["CODE"]?>" class="yandex-map-container"><h1><?=Loc::getMessage("CONTACTS_MAP_LOADING")?></h1></div>
                <script type="text/javascript">

                    setTimeout(function () {
                        $("#yandex-map-<?=$city["CODE"]?>").html(null);
                        whogrillMap.render({
                            id: "yandex-map-<?=$city["CODE"]?>",
                            center: [<?=$city["MAP"]["CENTER"][0]?>, <?=$city["MAP"]["CENTER"][1]?>],
                            size: [<?=$city["MAP"]["SIZE"][0]?>, <?=$city["MAP"]["SIZE"][0]?>],
                            zoom: <?=$city["MAP"]["ZOOM"]?>
                        });
                        <?if(count($city["MAP"]["POLIGONS"]) > 0):?>
                        <?foreach ($city["MAP"]["POLIGONS"] as $value):?>
                        whogrillMap.setPolygonToMap(<?=$value["coordinates"]?>,<?=$value["params"]?>);
                        <?endforeach;?>
                        <?endif;?>

                        <?
                        foreach ($arResult['ELEMENTS'] as $shop):
                        if($shop["IBLOCK_SECTION_ID"] <> $city["ID"])
                            continue;
                        ?>
                        whogrillMap.setShopToMap([<?=$shop["PROPERTY_COORDINATES_VALUE"]?>], '<?=$shop["NAME"]?>', '<?=$shop["PREVIEW_TEXT"]?>', '<?=is_array($shop["PREVIEW_PICTURE"]) ? $shop["PREVIEW_PICTURE"]["src"] : ""?>');
                        <?endforeach;?>
                    }, 3000);

                </script>
            </div>
        </div>
    <?endforeach;?>
</div>

<div class="gr_modal" id="shop-images">
    <div class="gr_modal_content">
        <div class="gr_close" onclick="whogrillAdressDetail.close()">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.7622 26.0001L50.4279 4.33429C51.1907 3.5715 51.1907 2.33479 50.4279 1.57209C49.6651 0.8094 48.4284 0.809302 47.6657 1.57209L25.9999 23.2379L4.33429 1.57209C3.5715 0.809302 2.33479 0.809302 1.57209 1.57209C0.8094 2.33488 0.809302 3.5716 1.57209 4.33429L23.2378 26L1.57209 47.6657C0.809302 48.4285 0.809302 49.6652 1.57209 50.4279C1.95344 50.8093 2.45334 50.9999 2.95324 50.9999C3.45314 50.9999 3.95295 50.8093 4.33439 50.4279L25.9999 28.7623L47.6656 50.4279C48.047 50.8093 48.5469 50.9999 49.0468 50.9999C49.5467 50.9999 50.0465 50.8093 50.4279 50.4279C51.1907 49.6651 51.1907 48.4284 50.4279 47.6657L28.7622 26.0001Z" fill="#333333" stroke="black" stroke-width="2"/>
            </svg>
        </div>
        <div class="gr_modal_body">
            <div class="gr_left_modal">
                <div class="gr_flex">
                    <div class="gr_vertical_slider">

                    </div>
                    <button class="prev_vertical"></button>
                    <button class="next_vertical"></button>
                </div>
            </div>
            <div class="gr_right_modal">
                <div class="gr_main_slider">

                </div>
                <div class="gr_slider_counter"></div>
                <button class="prev_main"></button>
                <button class="next_main"></button>
            </div>
        </div>
    </div>
</div>