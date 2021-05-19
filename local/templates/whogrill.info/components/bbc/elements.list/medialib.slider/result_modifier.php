<?
if(empty($arResult['ELEMENTS']))
    return;

$arParams["RESIZE"] = 460;

foreach ($arResult['ELEMENTS'] as $key=>$element) {
    $element["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
        $element["DETAIL_PICTURE"],
        [
            "width" => $arParams["RESIZE"],
            "height" => $arParams["RESIZE"],
        ],
        BX_RESIZE_IMAGE_EXACT,
        false
    );
    $element["DETAIL_PICTURE"] = CFile::GetFileArray($element["DETAIL_PICTURE"]);
    $arResult['ELEMENTS'][$key] = $element;
}