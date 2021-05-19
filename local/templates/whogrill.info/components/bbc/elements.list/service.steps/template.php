<?
if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
if(empty($arResult['ELEMENTS']))
    return;
$this->setFrameMode(true);
?>
<div class="gr_right_steps">
    <div class="gr_line_body">
        <div class="gr_line"></div>
    </div>
    <ul class="gr_step_list">
        <?foreach ($arResult['ELEMENTS'] as $element):?>
        <li>
            <h4 class="gr_title_step"><?=$element["NAME"]?></h4>
            <p class="gr_text_step"><?=$element["PREVIEW_TEXT"]?></p>
        </li>
        <?endforeach;?>
    </ul>
</div>