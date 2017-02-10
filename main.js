$(".cross").hide();
$(".menu").hide();
$(".hamburger").click(function() {
	$(".menu").slideToggle("slow", function() {
		$(".hamburger").hide();
		$(".cross").show();
	});
});

$(".cross").click(function() {
	$(".menu").slideToggle("slow", function() {
		$(".cross").hide();
		$(".hamburger").show();
	});
});

$(window).load(function() {
		$(".loader").fadeOut("1000");
		})