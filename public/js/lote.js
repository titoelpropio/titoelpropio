$(document).ready(function(){
    
    $('#loading').css('display','none')
});



    var clic = 1;
    lotes = "";
    punto="";

    function divLogin(lote) {



      if ($(lote).attr('data-status')=='4') {
        point=$(lote);

        $('#btnAgregar').attr('disabled',false);
        $('#btnActualizar').attr('disabled',true);
    
         punto=$(lote).attr('points');
         if (lotes=="") {
            lote.style.fill = "#0195bf"; 
         }
         else{

           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='4') {
            lotes.style.fill = "#f49e25";
            lote.style.fill = "#0195bf";
           }

           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='0') {
            lotes.style.fill = "#85f793";
            lote.style.fill = "#0195bf";
           }

           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='1') {
            lotes.style.fill = "#efe139";
            lote.style.fill = "#0195bf";
           }
           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='2') {
            lotes.style.fill = "#ef3939";
            lote.style.fill = "#0195bf";
           }
           
        }

        lotes = lote;

        
    
      }

      if ($(lote).attr('data-status')=='0') {
        point=$(lote);

        $('#btnAgregar').attr('disabled',true);
        $('#btnActualizar').attr('disabled',false);
    
         punto=$(lote).attr('points');
         if (lotes=="") {
            lote.style.fill = "#0195bf"; 
         }
         else{
           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='4') {
            lotes.style.fill = "#f49e25";
            lote.style.fill = "#0195bf";
           }

           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='0') {
            lotes.style.fill = "#85f793";
            lote.style.fill = "#0195bf";
           }

           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='1') {
            lotes.style.fill = "#efe139";
            lote.style.fill = "#0195bf";
           }
           if (lote != lotes && lotes != "" && $(lotes).attr('data-status')=='2') {
            lotes.style.fill = "#ef3939";
            lote.style.fill = "#0195bf";
           }
        }

        lotes = lote;
        
    
      }

    }

function cargardatos(){
  $("#punto").val(punto.trim());

}

function CargarDatosACtualizar(){
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

