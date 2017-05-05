<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >REGISTRAR LOTE</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'lote.store', 'method'=>'POST'])!!}
      <input type="text" name="punto" id="punto">

<div class="form-group">
    {!!Form::label('nro_lote','Nro Lote:')!!}
    {!!Form::text('nro_lote',null,['class'=>'form-control ','placeholder'=>'Ingresa el Nro de lote'])!!}
</div>

<div class="form-group">
    {!!Form::label('superficie','Superficie:')!!}
    {!!Form::text('superficie',null,['class'=>'form-control ','placeholder'=>'Ingresa la superficie'])!!}
</div>

<div class="form-group">
    {!!Form::label('id_manzano','Manzano:')!!}
    {!!Form::select('id_manzano',$manzano,null,array('class'=>'form-control'))!!}
</div>

  <div class="form-group" hidden="">
      {!!Form::label('estado','Estado:')!!}
            {!!Form::select('estado', array('0' => 'DISPONIBLE', '1' => 'RESERVADO', '2' => 'VENDIDO'),null,array('id'=>'estado','class'=>'form-control'))!!}
  </div>  

    {!!Form::submit('REGISTRAR',['class'=>'btn btn-primary pull-right'])!!}
  {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="myModalActualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >REGISTRAR LOTE</h4>
      </div>

      <div class="modal-body">
 {!!Form::open(['route'=>['lote.update','null'],'method'=>'PUT'])!!} 

      <input type="text" name="id_lote" id="id_lote">

<div class="form-group">
    {!!Form::label('nro_lote_ac','Nro Lote:')!!}
    {!!Form::text('nro_lote_ac',null,['class'=>'form-control ','placeholder'=>'Ingresa el Nro de lote'])!!}
</div>

<div class="form-group">
    {!!Form::label('superficie_ac','Superficie:')!!}
    {!!Form::text('superficie_ac',null,['class'=>'form-control ','placeholder'=>'Ingresa la superficie'])!!}
</div>
<input type="text" name="superficie_aux" id="superficie_aux">
<div class="form-group">
    {!!Form::label('id_manzano_ac','Manzano:')!!}
    {!!Form::select('id_manzano_ac',$manzano,null,array('class'=>'form-control'))!!}
</div>

  <div class="form-group" hidden="">
      {!!Form::label('estado_ac','Estado:')!!}
            {!!Form::select('estado_ac', array('0' => 'DISPONIBLE', '1' => 'RESERVADO', '2' => 'VENDIDO'),null,array('id'=>'estado','class'=>'form-control'))!!}
  </div>  

    {!!Form::submit('ACTUALIZAR',['class'=>'btn btn-primary pull-right','id'=>'btn_actualizar','hidden'=>''])!!}
  {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>
