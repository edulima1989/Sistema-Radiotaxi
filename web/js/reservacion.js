$('#reservacion_id_codigo').change(function(){
    if($(this).val())
        $.ajax({
            url:rootPath+"reservacion/cargarCodigo",
            type: "POST",
            data: {
                codigo:$(this).val()
            },
            dataType: 'json',
            cache: false,
            success: function(datos){
                var dato=eval(datos);
                var $html = '<h1 style="background:#373737;">Datos del Cliente</h1><table><tbody>';
                $html+='<tr><th>Cliente:</th><td>'+dato[0].cliente+'</td></tr>';
                if(dato[0].barrio)
                    $html+='<tr><th>Barrio:</th><td>'+dato[0].barrio+'</td></tr>';
                if(dato[0].calle1)
                    $html+='<tr><th>Calle Principal:</th><td>'+dato[0].calle1+'</td></tr>';
                if(dato[0].calle2)
                    $html+='<tr><th>Calle Secundaria:</th><td>'+dato[0].calle2+'</td></tr>';
                if(dato[0].numcasa)
                    $html+='<tr><th>N° de casa:</th><td>'+dato[0].numcasa+'</td></tr>';
                if(dato[0].referencia)
                    $html+='<tr><th>Referencia:</th><td>'+dato[0].referencia+'</td></tr>';
                $html+='</tbody></table>';
                $('#reservacion-codigo').html($html);
            }
        });
    else 
        $('#reservacion-codigo').html('');
});