<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>

<section class="press-center" data-controller="view-more">
<div class="press-center__articles press-center__articles--wide-list">
   <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"default",
Array(),
false
);?>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>