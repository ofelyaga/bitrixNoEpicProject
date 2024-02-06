<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = ''; ?>



	<div class="inner-wrap">
		<a href="">Главная</a>
		<a href="">Мебель</a>
		<span>Выставки и события</span>
	</div>
	</div>
<?php
$strReturn .= '<div class="breadcrumbs-box" itemscope itemtype="http://schema.org/BreadcrumbList"><div class="inner-wrap">';
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
				<a href="'.$arResult[$index]["LINK"].'" itemprop="item">
					'.$title.'
				</a>';
	}
	else
	{
		$strReturn .= ' <span>'.$title.'</span>';
	}
}

$strReturn .= '</div></div>';

return $strReturn;
