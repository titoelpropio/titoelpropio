@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
@include('vacunagalpon.modal')
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
                <h3><b>LISTA DE GALONES VACUNADOS</b></h3>
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>

                    <th><center>GALPON</center></th>
                    <th><center>VACUNA</center></th>
                    <th><center>FECHA</center></th>

                    <th><center>OPCION</center></th>
                    </thead>

                    @foreach ($vacunagalpon as $vacgal)
                    <TR>			
                        <td><center>{{$vacgal->galpon }}</center></td>
                    <td><center>{{$vacgal->vacuna}}.</center></td>
                    <td><center>{{$vacgal->fecha}}</center></td>

                    <td><center>
                        {!!link_to_route('vacuna.edit', $title = 'Editar', $parameters = $vacgal->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </center></td>
                    </TR>
                    @endforeach 
                </table>

            </div>
        </div>
    </div>
</div>
@endsection




