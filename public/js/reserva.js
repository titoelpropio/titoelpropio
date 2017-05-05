
    $(document).ready(function(){
    $('#loading').css("display","none");
});
    
    var clic = 1;
    lotes = "";
    punto="";

    function divLogin(lote) {


     
      if ($(lote).attr('data-status')=='0') {
        point=$(lote);
    
         punto=$(lote).attr('points');
         if (lotes=="") {
            lote.style.fill = "#0195bf"; 
         }
         else{
        if (lote != lotes && lotes != "") {
            lotes.style.fill = "#85f793";
            lote.style.fill = "#0195bf";
           }
        }
     
    
        lotes = lote;
    
      }

    }


function CargarDatos(){
  $("#btn_actualizar").hide();  
  $("#id_lote").val("");      
  $("#nro_lote_ac").val("");
  $("#superficie_ac").val("");
  $("#superficie_aux").val("");
  $("#id_manzano_ac").val("");
  punto= punto.trim();
    $.get('cargar_lote/'+punto , function (response) { 
        $("#id_lote").val(response[0].id);      
        $("#nro_lote_ac").val(response[0].nro_lote);
        $("#superficie_ac").val(response[0].superficie);
        $("#superficie_aux").val(response[0].superficie);
        $("#id_manzano_ac").val(response[0].id_manzano);
        $("#btn_actualizar").show();  
    });
  
}



/*
function guardar_lote(){
      $.ajax({
            url:"mapa",
          headers: {'X-CSRF-TOKEN': token},
         type: 'POST',
        dataType: 'json',
    data: {nro_lote:nro_lote,dimension:dimension, estado:estado},
              });
}*/
