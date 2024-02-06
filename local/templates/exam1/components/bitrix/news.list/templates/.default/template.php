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
?>

<div class="item-wrap">
    <div class="rew-footer-carousel">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<?php
echo '<pre>';
print_r($arResult);
echo '</pre>';

?>
            <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="./img/side-opin.jpg" alt="">
                            </div>
                            <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                            <div class="pos-block">Генеральный директор,"Офис+"</div>
                        </div>
                        <div class="text-block">“В магзине предоставили потрясающий выбор
                            расцветок, а также, получил большую скидку по карте постоянного...</div>
                    </div>
                </div>
            </div>
    	<?php endforeach?>