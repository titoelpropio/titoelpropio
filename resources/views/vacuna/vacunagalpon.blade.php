
@extends('layouts.admin')
@section('content')
<script src="{{asset('js/addvacunagalpon.js')}}"></script> 
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
@include('vacuna.modal')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 800px">
        <div class="table-responsive" style="height: 800px">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

            <div class="panel panel-green" style="height: 800px">
                <div class="panel-heading">
                    <ul class="nav nav-pills">
                   <li class="active"><a href="{!!URL::to('vacunagalpon')!!}">Lista de Galpon a Vacunar</a></li>
                        <li class="active"><a href="{!!URL::to('vacuna')!!}">Lista de Vacunas</a></li>
                        <li class="active"><a href="{!!URL::to('vacuna-galpon')!!}">Lista Galpones Vacunados</a></li>
                    </ul>

                </div>
             
              <div class="pull-right"> <h3 ><b>BUSCAR POR FECHA</b> </h3> <input id="fecha1" type="date"  class="form-c" style="color: black" >
                    <input type="button" value="mostrar" class="btn btn-warning" onclick="listagalponvacunar()"></div>
                <input type="button" value="VACUNAR GALPON" class="btn btn-success"  data-toggle='modal' data-target='#myModalcreate'>
                
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>

                    <th><center>GALPONES</center></th>
                    <th><center>EDAD DEL GALPON</center></th>
                    <th><center>VACUNA</center></th>
                    <th><center>METODO DE APLICACION</center></th>
                    <th><center>OPERACION</center></th>

                    </thead>
                    <tbody id="tablavacunagalpon">
                        @foreach ($vacuna as $vac)
                        <TR>		

                            <td><center>{{$vac->galpon}}</center></td>
                    <td><center>{{$vac->edad}}</center></td>
                    <td><center>{{$vac->nombre}}</center></td>
                    <td><center>{{$vac->detalle}}</center></td>

                    <td><center>

                        <input  type="button" id=""  value="VACUNAR" class="btn btn-danger" onclick="vacunar({{$vac->idgalpon}},{{$vac->idvacuna}})">
                        <input  type="button" id=""  value="Cambiar de V." class="btn btn-primary" data-toggle='modal' data-target='#myModal' onclick="cambiarvacuna({{$vac->idgalpon}},{{$vac->idvacuna}},'{{$vac->galpon}}')" >
                    </center></td>

                    </TR>
                       @endforeach 
                    </tbody>
                 
                </table>
               <script src="{{asset('js/addvacunagalpon.js')}}"></script> 
        
            </div>
        </div>
    </div>
</div>


@endsection




