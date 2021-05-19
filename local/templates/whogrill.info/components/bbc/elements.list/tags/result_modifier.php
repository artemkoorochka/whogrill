<?
if(empty($arResult['ELEMENTS']))
    return;

foreach ($arResult['ELEMENTS'] as $key=>$element) {
    $element["DETAIL_PICTURE"] = CFile::GetFileArray($element["DETAIL_PICTURE"]);
    $arResult['ELEMENTS'][$key] = $element;
}