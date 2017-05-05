  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >VACUNAR GALPON</h4>
      </div>
      <div class="modal-body">
      
      {!!Form::open(['route'=>'consumo.store', 'method'=>'POST'])!!}



<script type="text/javascript">
    function numerosmasdecimal(e)
    {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>  

    <div class="form-group">
     {!!Form::label('galpon','Galpon:')!!}
   
      {!!Form::text('nombre',null,['id'=>'nombre_galpon','class'=>'form-control'])!!}
    </div>


   
  </div>
 {!!Form::text('id_galpon',null,['id'=>'idinputgalpon','class'=>'form-control','readonly'])!!}
      {!!Form::text('id_vacuna',null,['id'=>'idinputvacuna','class'=>'form-control','readonly'])!!}
      <div class="modal-footer">
      {!!link_to('#', $title='Resgistrar', $attributes = ['id'=>'registrarcria', 'class'=>'btn btn-danger'], $secure = null)!!}
      {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>

