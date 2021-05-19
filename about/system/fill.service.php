<?
use \Main\Bitrix\Loader;

/**
 * @param $value
 */
function d($value){
    ?><pre><?print_r($value)?></pre><?
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->RestartBuffer();
CModule::IncludeModule("iblock");


die;

$arParams = [
    "IBLOCK_ID" => 20,
    "SECTION_ID" => 472,
    "NEO" => new CIBlockElement()
];


$arParams["NEO"]->Add([
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "NAME" => "Консультация",
    "SORT" => 110,
    "IBLOCK_SECTION_ID" => $arParams["SECTION_ID"],
    "PREVIEW_TEXT" => "Поможем выбрать<br><span>гриль</span> и <span>аксессуары</span>",
    "PREVIEW_TEXT_TYPE" => "html"
]);
$arParams["NEO"]->Add([
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "NAME" => "Служба доставки",
    "SORT" => 120,
    "IBLOCK_SECTION_ID" => $arParams["SECTION_ID"],
    "PREVIEW_TEXT" => "Мы <span>Доставим</span> и соберем гриль,<br>а также расскажим о нюансах",
    "PREVIEW_TEXT_TYPE" => "html"
]);
$arParams["NEO"]->Add([
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "NAME" => "Гарантия и обслуживание",
    "SORT" => 130,
    "IBLOCK_SECTION_ID" => $arParams["SECTION_ID"],
    "PREVIEW_TEXT" => "Поддержка и гарантия обслуживания,<br> расходники, аксессуары, ремонт,<br>чистка, профилактика",
    "PREVIEW_TEXT_TYPE" => "html"
]);
