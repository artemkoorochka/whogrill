<?
use Bitrix\Main\Localization\Loc;
if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
if(empty($arResult['ELEMENTS']))
    return;
$this->setFrameMode(true);
Loc::loadLanguageFile(__FILE__);
?>

<div class="secPartners__content blockPartnersFrol wrapNavFrol">
    <?foreach ($arResult['ELEMENTS'] as $element):?>
        <div class="blockPartnersFrol__el">
            <?if (empty($element['PROPS']['LINK']['VALUE'])):?>
                <span class="partnersFrolEl">
                    <img src="<?=$element["PREVIEW_PICTURE"]["SRC"]?>" alt="..." class="partnersFrolEl__img">
                </span>
            <?else:?>
                <a href="<?=$element['PROPS']['LINK']['VALUE']?>"<?
                   if ($element['PROPS']['BLANK']['VALUE'] !== Loc::getMessage("NO"))
                       echo ' target="_blank" ';
                   if ($element['PROPS']['NOFOLLOW']['VALUE'] !== Loc::getMessage("NO"))
                       echo 'rel="nofollow" ';
                   ?> class="partnersFrolEl">
                    <img src="<?=$element["PREVIEW_PICTURE"]["SRC"]?>" alt="..." class="partnersFrolEl__img">
                </a>
            <?endif;?>
        </div>
    <?endforeach;?>
</div>