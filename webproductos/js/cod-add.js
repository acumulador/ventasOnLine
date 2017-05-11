$(document).on("ready", ini);

function ini()
{
    $("#file-img").fileinput({
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        showUpload: false,
        maxFileCount: 1,
        mainClass: "input-group-lg"
    });

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

                    $('#txtTitulo').val("");
                    $('#txtDetalle').val("");
                    $('#file-img').val("");

                    $.getJSON( "http://localhost/apiproductos/upload.php", function( data ) {
                          window.location.href = 'listado.html';
                    });

                    window.location.href = 'listado.html';

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