$(document).on("ready", ini);

var oID = localStorage.getItem("var");

function ini()
{
	if (oID === null)
	{
		window.location.href = 'index.html';
	}

	consultarProd(oID);
}


function consultarProd(id)
{
	try
    {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://localhost/apiproductos/productos/'+id,
            success: function(data) {

            	//alert(data.productos[1].foto);
            	var fuente = $('#plantillaDetalle').html();
				var plantillaDetalle = Handlebars.compile(fuente);

            	var datos = data.producto;
            	var html = plantillaDetalle(datos);
            	$('#detalle').html(html);
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