$(function() {
	$("#page-wrapper").load("../lib/pages/index.php");
	$(".menu-item[menu-target='main']").parent().addClass("active");

	$(document).on("click", ".menu_item", function() {
		$(".menu_item").parent().removeClass("active");
		$(this).parent().addClass("active");
		var target = $(this).attr("menu-target");
		LoadPage(target);
	});
})		