$(document).on("ready", ini);

function ini()
{
	setTimeout("load()", 5000);
}

function load()
{
	$(".content").fadeOut(1000)
	window.location.href = 'listado.html';
}