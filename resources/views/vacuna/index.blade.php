@extends('layouts.admin')
@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
<div class="row">	
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
           

            <div class="panel panel-green">
                <div class="panel-heading">
                      <ul class="nav nav-pills">
                        <li class="active"><a href="{!!URL::to('vacunagalpon')!!}">Lista de Galpon a Vacunar</a></li>
                        <li class="active"><a href="{!!URL::to('vacuna')!!}">Lista de Vacunas</a></li>
                        <li class="active"><a href="{!!URL::to('vacuna-galpon')!!}">Lista Galpones Vacunados</a></li>
                    </ul>
                </div>

                <h3>Lista de vacunas</h3>
                <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th><center>VACUNA</center></th>
                    <th><center>EDAD A VACUNAR</center></th>
                    <th><center>METODO DE APLICACION</center></th>
                    <th><center>ESTADO</center></th>
                    <th><center>OPCION</center></th>
                    </thead>

                    @foreach ($vacuna as $vac)
                    <TR>	
                        <td><center>{{$vac->nombre}}.</center></td>
                    <td><center>{{$vac->edad}}</center></td>

                    <td><center>{{$vac->detalle}}</center></td>
                    <td><center>  <?php
                        if ($vac->estado == 1) {
                            echo '<button value="' . $vac->id . '" id="idbotonnestado" onclick="cambiarestado(0,this)" class="btn btn-success">ACTIVO</button>';
                        } else
                            echo '<button value="' . $vac->id . '" id="idbotonnestado"  onclick="cambiarestado(1,this)" class="btn btn-warning">INACTIVO</button>';
                        ?></center></td>
                    <td><center>
                        {!!link_to_route('vacuna.edit', $title = 'Editar', $parameters = $vac->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </center></td>
                    </TR>
                    @endforeach 
                </table>
                {!!$vacuna->render()!!}
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/addvacuna.js')}}"></script> 
@endsection




