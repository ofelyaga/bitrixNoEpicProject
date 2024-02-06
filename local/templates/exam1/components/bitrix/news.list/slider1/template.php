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
	<?php
//    show($arItem['PREVIEW_PICTURE']);
    $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
        array('width'=>40, 'height'=>40),
        BX_RESIZE_IMAGE_PROPORTIONAL);

    $profilePhoto = $file['src'] ?? SITE_TEMPLATE_PATH . '/img/no_photo.jpg';

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="<?=$profilePhoto?>" alt="">
                            </div>
                            <div class="name-block"><a href=""><?=$arItem['NAME']?></a></div>
                            <div class="pos-block"><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['VALUE']?>,<?=$arItem['DISPLAY_PROPERTIES']['COMPANY']['VALUE']?></div>
                        </div>
                        <div class="text-block">
                            <?=TruncateText($arItem['DETAIL_TEXT'],150)?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    </div>
