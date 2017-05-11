$(document).on("ready", ini);

function ini()
{
	
    $('#btnEnviar').on("click", enviarProducto)

}

function enviarProducto()
{
	try
    {
        if($('#txtTitulo').val() != "" && $('#txtDetalle').val() != "")
        {
            var dataProd = {
                titulo_producto: $('#txtTitulo').val(),
                ds_producto: $('#txtDetalle').val(),
                foto: $('#file-img').val()
            }
            
            $.ajax({
                type: "POST",
                dataType: "json",
                data: dataProd,
                url: 'http://localhost/apiproductos/productos/',
                success: function(data) {
                    alert("Producto registrado correctamente!!");

                },
                error: function(ex) {
                    alert("Error obteniendo datos!! " + ex);
                }
            });
        }
        else
        {
            alert("Ingrese todos los campos!!");
        }
    }
    catch(ex)
    {
        alert("Error de datos!!");
    }
}