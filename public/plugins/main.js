$(document).ready(function(){
	setTimeout(function() {$(".mensajesAll").fadeOut(1500);},3000);
});
$('#search').click(function (e) {
	$( "#form-search").submit();
});