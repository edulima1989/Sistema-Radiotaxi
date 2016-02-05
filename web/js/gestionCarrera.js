/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){ 
    if($('.codOcasional').is(":checked")){
            $('.conCod').css("display", "none");
            $('.sinCod').css('display','block');
        }else{
            $('.conCod').css("display", "block");
            $('.sinCod').css('display','none');
        }
    $(".codOcasional").click(function(){
        if($(this).is(":checked")){
            $('.conCod').css("display", "none");
            $('.sinCod').css('display','block');
        }else{
            $('.conCod').css("display", "block");
            $('.sinCod').css('display','none');
        }
    });
    
});
