$(document).on("ready", ini);

function ini()
{
	setTimeout("load()", 5000);
}

function load()
{
	$(".container").fadeOut(2000)
	window.location.href = 'listado.html';
}