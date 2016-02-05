/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){ 
    if($('#radio1').is(":checked")){
            $('.apellido').css("display", "block");
            $('.telefono').css('display','none');
        }else{
            $('.apellido').css("display", "none");
            $('.telefono').css('display','block');
        }
    $("#radio1").click(function(){
        if($(this).is(":checked")){
            $('.apellido').css("display", "block");
            $('.telefono').css('display','none');
        }
    });
        $("#radio2").click(function(){
        if($(this).is(":checked")){
            $('.telefono').css("display", "block");
            $('.apellido').css('display','none');
        }
    });
    
});
