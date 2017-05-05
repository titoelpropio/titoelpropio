@extends('layouts.inicio')

@section('contenido')
@include('alerts.success')
@include('alerts.request')
@include('alerts.errors')
@include('alerts.cargando')

{!!Html::script('js/reserva.js')!!}
     

 <iframe id="seccion" style="border: none; height: 800px ; overflow: none;width: 100%" src="{!!URL::to('seccion1_reserva')!!}">
                         
                     </iframe>


             
@endsection