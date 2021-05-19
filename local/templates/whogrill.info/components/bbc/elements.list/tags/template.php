<?
if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
if(empty($arResult['ELEMENTS']))
    return;
$this->setFrameMode(true);

$element = current($arResult['ELEMENTS']);
?>
<section class="gr_section gr_banner gr_banner_about">
    <div class="container">
        <div class="gr_slider">
            <div class="gr_slide"><img src="<?=$element["DETAIL_PICTURE"]["SRC"]?>" alt=""></div>
        </div>
    </div>
</section>