$(function() {
//    function log( message ) {
//        $( "<div>" ).text( message ).prependTo( "#log" );
//        $( "#log" ).scrollTop( 0 );
//    }

    $( "#codigo" ).autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: rootPath+"reportes/cargarCodigo",
                type:"POST",
                dataType: "json",
                data: {
//                    featureClass: "P",
//                    style: "full",
                    maxRows: 12,
                    numero: request.term
                },
                success: function( data ) {
                    response( $.map( data, function( item ) {
                        return {
                            label: item.numero,
                            value: item.numero
                        }
                    }));
                }
            });
        },
        minLength: 2,
        select: function( event, ui ) {
//            log( ui.item ?
//                "Selected: " + ui.item.label :
//                "Nothing selected, input was " + this.value);
        }
        ,
        open: function() {
            $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
        },
        close: function() {
            $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
        }
    });
});