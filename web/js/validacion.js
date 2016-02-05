 $('#cedula').keyup(function(event) {
        range = /^-?[0-9]+([0-9]*)?$/;                    
        if(!(range.test($(this).val()) )){
            alert('Solo se permiten caracteres numéricos') ;
            $(this).val('');
        }
    });

    $('#cedula').keypress(function(event) {               
        if (event.keyCode == 13) {
            var cedula = $('#cedula').val();            
            array = $('#cedula').val().split( "" );
            num = array.length;            
            if ( num == 10 ) {
                total = 0;digito = (array[9]*1);
                for( i=0; i < (num-1); i++ ) {
                    mult = 0;
                    if ( ( i%2 ) != 0 ) {
                        total = total + ( array[i] * 1 );
                    } else {
                        mult = array[i] * 2;
                        if ( mult > 9 )total = total + ( mult - 9 );
                        else 
                            total = total + mult;
                    } 
                }
                decena = total / 10;
                decena = Math.floor( decena );
                decena = ( decena + 1 ) * 10;
                fin = ( decena - total );
                if ( ( fin == 10 && digito == 0 ) || ( fin == digito ) ) {
                    alert( "La cedula es correcta" );
                    $("#nombres").removeAttr("disabled");
                    
                    return true;
                }else{
                    alert( "La cedula ingresada es invalida…");
                    $("#nombres").attr("disabled",true);
                    return false;
                }
            }else{
                alert("La cedula no pue detener menos de 10 digitos y tan poco mas de 10 digitos");
                $("#nombres").attr("disabled",true);
                return false;
            }                  
        
        }          
    });        

    $('#nombres').keypress(function(event) {   
        range = /^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/;                 
        if (event.keyCode == 13)
        {
            if(!(range.test(this.value) )){
                alert('Solo se permiten letras') ;
                this.value='';
                $("#apellidos").attr("disabled",true);
            }else{                        
                alert('Formato Correcto') ;
                $("#apellidos").removeAttr("disabled");
            }
        }          
    });

    $('#apellidos').keypress(function(event) {   
        range = /^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/;                 
        if (event.keyCode == 13)
        {
            if(!(range.test(this.value) )){
                alert('Solo se permiten letras') ;
                this.value='';
                $("#telefono").attr("disabled",true);
            }else{                        
                alert('Formato Correcto') ;
                $("#telefono").removeAttr("disabled");
            }
        }          
    });

    $('#telefono').keypress(function(event) {   
        range = /^-?[0-9]+([\.][0-9]*)?$/;                    
        if (event.keyCode == 13)
        {                    
            if(!(range.test(this.value) )){
                alert('Solo se permiten caracteres numericos') ;
                this.value='';
                $("#email").attr("disabled",true);
            }else{
                alert('Formato Correcto') ;
                $("#email").removeAttr("disabled");            
            }
            
        }          
    });

    $('#email').keypress(function(event) {               
        if (event.keyCode == 13) {
            if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
                alert('El correo electrónico introducido no es correcto.');
                $("#a1").attr("disabled",true);
                $("#a2").attr("disabled",true);
                return false;
            }

            alert('El email introducido es correcto.');                                        
            $("#a1").removeAttr("disabled");
            $("#a2").removeAttr("disabled");
        }          
    });   
});