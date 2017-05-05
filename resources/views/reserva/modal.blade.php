<div class="modal fade" id="myModalReservar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >RESERVAR LOTE</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'reserva.store', 'method'=>'POST'])!!}

      <input type="text" name="id_lote" id="id_lote">

<div class="form-group">
    {!!Form::label('nro_lote_ac','Nro Lote:')!!}
    {!!Form::text('nro_lote_ac',null,['class'=>'form-control ','placeholder'=>'Ingresa el Nro de lote'])!!}
</div>

<div class="form-group">
    {!!Form::label('superficie_ac','Superficie:')!!}
    {!!Form::text('superficie_ac',null,['class'=>'form-control ','placeholder'=>'Ingresa la superficie'])!!}
</div>

<div class="form-group">
    {!!Form::label('id_manzano_ac','Manzano:')!!}
    {!!Form::select('id_manzano_ac',$manzano,null,array('class'=>'form-control'))!!}
</div>

  <div class="form-group" hidden="">
      {!!Form::label('estado_ac','Estado:')!!}
            {!!Form::select('estado_ac', array('0' => 'DISPONIBLE', '1' => 'RESERVADO', '2' => 'VENDIDO'),null,array('id'=>'estado','class'=>'form-control'))!!}
  </div>  


    {!!Form::label('buscar','Buscar:')!!}
    <input type="text" id="buscar" placeholder="Buscar Cliente..." style="font-size: 20px"> 
    <input type="button" id="btn_buscar" class="btn btn-info" value="*">


    {!!Form::submit('RESERVAR',['class'=>'btn btn-primary pull-right','id'=>'btn_actualizar'])!!}
  {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>