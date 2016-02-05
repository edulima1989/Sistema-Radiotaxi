function hora(){
    var fecha = new Date();
    var hora = fecha.getHours();
    var minuto = fecha.getMinutes();
    var segundo = fecha.getSeconds();

    if (hora < 10) {
        hora = "0" + hora;
    }
    if (minuto < 10) {
        minuto = "0" + minuto;
    }
    if (segundo < 10) {
        segundo = "0" + segundo;
    }
    var horita = hora + ":" + minuto + ":" + segundo;
    $('div#hora-actual').html(horita);
}

function inicio(){
    setInterval(function(){
        avisoSolicitudes();
        avisoSolicitudesNoAtendidas();
    },5000);
    setInterval(function(){
        hora();
    },1000);
}

function avisoSolicitudes(){
    $.ajax({
        url:rootPath+"carreraPeticion/cargarNotificacionAprobada",
        type: "POST",
        data: "",
        dataType: 'json',
        cache: false,
        success: function(datos){
            var solicitudes = eval(datos);
            for(var i in solicitudes){
                $().toastmessage('showToast', {
                    text     : 'Solicitud Atendida: <br /><div style="font-size: .8em;">'+
                                'Código: '+solicitudes[i].codigo+'<br />'+
                                'Su taxí llegara en un tiempo estimado de '+
                                solicitudes[i].tiempo+' minutos</div>',
                    sticky   : true,
                    position : 'top-left',
                    type     : 'success',
//                    solicitud   : solicitudes[i],
                    close    : function () {
                        console.log("toast is closed ...");
                    }
                });  
                $.ajax({
                    url: rootPath + 'carreraPeticion/actualizarNotificacionSolicitud',
                    data: {
                        notificacion: '0',
                        id:solicitudes[i].id
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function (dato){                
                    },
                    error: function () {
                        alert('Ha ocurrido un error al acceder al servidor');
                    }
                });   
            }
        }
    });
}
function avisoSolicitudesNoAtendidas(){
    $.ajax({
        url:rootPath+"carreraPeticion/cargarNotificacionRechazada",
        type: "POST",
        data: "",
        dataType: 'json',
        cache: false,
        success: function(datos){
            var solicitudes = eval(datos);
            for(var i in solicitudes){
                $().toastmessage('showToast', {
                    text     : 'Solicitud no Atendida: <br /><div style="font-size: .8em;">'+
                                'Estimado cliente lamentamos informarle que por falta de taxis libres\n\
                                su solicitud de carrera para el código: '+solicitudes[i].codigo+'\
                                no ha podido ser atendida<br />'+
                                'Pedimos disculpas por los inconvenientes causados. Gracias',
                    sticky   : true,
                    position : 'top-left',
                    type     : 'notice',
                    close    : function () {
                        console.log("toast is closed ...");
                    }
                });  
                $.ajax({
                    url: rootPath + 'carreraPeticion/actualizarNotificacionSolicitud',
                    data: {
                        notificacion: '0',
                        id:solicitudes[i].id
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function (dato){                
                    },
                    error: function () {
                        alert('Ha ocurrido un error al acceder al servidor');
                    }
                });   
            }
        }
    });
}