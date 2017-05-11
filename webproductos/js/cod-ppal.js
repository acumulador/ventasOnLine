$(document).on("ready", ini);

function ini()
{
	traerDatos();
	$(document).on("click", ".goRow", showDetail);
}


function showDetail()
{
	var oID = $(this).attr("id");
	//imgSel = $(this).attr("src");
	localStorage.setItem("var", oID);

	window.location.href = 'detalle.html';
}

function traerDatos()
{
    try
    {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://localhost/apiproductos/productos/',
            success: function(data) {

            	var fuente = $('#plantilla').html();
				var plantilla = Handlebars.compile(fuente);

            	var datos = data.productos;
            	var html = plantilla(datos);
            	$('#fila').html(html);
            },
            error: function() {
            	alert("Error obteniendo datos!!");
            }
        });

    }
    catch(ex)
    {
        alert("Error de datos!!");
    }
}