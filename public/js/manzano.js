function CargarManzano(id){
  $.get('cargar_manzano/'+id , function (response) { 
    $("#id_manzano").val(response[0].id);      
    $("#nombre_ac").val(response[0].nombre);
    $("#id_proyecto_ac").val(response[0].id_proyecto);
  });
}