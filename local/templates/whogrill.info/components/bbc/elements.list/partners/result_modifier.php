<?
if(empty($arResult['ELEMENTS']))
    return;

$arParams["RESIZE"] = [
    "width" => 157,
    "height" => 102
];

foreach ($arResult['ELEMENTS'] as $key=>$element) {
    $element["PREVIEW_PICTURE"] = CFile::GetFileArray($element["PREVIEW_PICTURE"]);
    $arResult['ELEMENTS'][$key] = $element;
}