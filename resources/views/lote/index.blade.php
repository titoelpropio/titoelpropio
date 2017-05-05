@extends('layouts.inicio')

@section('contenido')
@include('alerts.success')
@include('alerts.request')
@include('alerts.errors')


{!!Html::script('js/mapas.js')!!}

<div class="panel panel-success">
     <div class="panel-heading">
          <ul class="nav nav-pills">
               <li class="active"><a href="#">LOTES</a></li> 
            <li class=""><a href="{!!URL::to('manzano')!!}">MANZANO</a></li>  
            <li onclick="cambiomapa(1)" class="active pull-right"><a href="#">siguiente</a></li>
        </ul>
        
    </div>  
  <div class="panel-body">
                     

                     
      <iframe id="seccion" style="border: none; height: 800px ; overflow: none;width: 100%" src="{!!URL::to('seccion1')!!}">
                         
                     </iframe>
                     
</div>
  <div class="panel-footer">Pie del panel</div>
</div>

<!--
<div id="caja" style="    min-width: 189px;
     max-height: 128px;
     " >
    <span>Detalle</span>
    <div style="text-align: right;"><a id="active">x</a></div>
    <span style="color: white">
        LOTE NRO: <span style="color: yellow">  1058</span>
    </span> <br>
        <span style="color: white">
            DIMENSION: <span style="color: yellow"> 300x300 mt2</span>
        </span> <br>
            <span style="color: white">
                PRECIO CONTADO: <span style="color: yellow"> 2000$</span>
            </span> <br>
                <span style="color: white">
                    PRECIO CREDITO: <span style="color: yellow"> 3000$</span>
                </span> <br>


                    </div>-->

             
                                                                                                                @endsection
