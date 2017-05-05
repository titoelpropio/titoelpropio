<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use App\Manzano;
use App\Lote;
use DB;
use Hash;

class LoteController extends Controller {

    public function __construct() {
//        $this->middleware('auth');
//        $this->middleware('admin');
//        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {
        $manzano = Manzano::lists('numero', 'id');        
        return view('lote.index',['manzano'=>$manzano]);
    }

    public function create() {
        $empresa = Empresa::lists('nombre', 'id');
        return view('usuario.create', compact('empresa'));
    }

    public function store(Request $request) {
        $verificar=DB::select("SELECT COUNT(*)as contador from lote WHERE id_manzano=".$request['id_manzano']." AND nro_lote=".$request['nro_lote']);
        if ($verificar[0]->contador == 1) {
            Session::flash('message-error', 'YA EXISTE UN LOTE CON ESAS CARACTERISTICAS');
            return Redirect::to('/seccion1');             
        } else {
           DB::table('lote')->insert(['nro_lote' => $request['nro_lote'],'superficie' => $request['superficie'],'estado' => $request['estado'],'point' => $request['punto'],'id_manzano' => $request['id_manzano']]);        
           Session::flash('message', 'CREADO CORRECTAMENTE');
        return Redirect::to('/seccion1');   
        }
    }

    public function edit($id) {
        $trabajador = User::find($id);
        $empresa = Empresa::where('id', $trabajador->id_empresa)->lists('nombre', 'id');
        return view('usuario.edit', ['user' => $trabajador], compact('empresa'));
    }

    public function update(Request $request) {
        $verificar=DB::select("SELECT COUNT(*)as contador from lote WHERE id_manzano=".$request['id_manzano_ac']." AND nro_lote=".$request['nro_lote_ac']);
        if ($verificar[0]->contador == 1) {
            if ($request['superficie_ac'] == $request['superficie_aux']) {
                Session::flash('message-error', 'YA EXISTE UN LOTE CON ESAS CARACTERISTICAS');
                return Redirect::to('/seccion1');
            }else{
                $id=$request->get("id_lote");
                DB::table('lote')->where('id',$id)->update(['nro_lote'=>$request['nro_lote_ac'], 'superficie'=>$request['superficie_ac'],'id_manzano'=>$request['id_manzano_ac']]);       
                Session::flash('message', 'ACTUALIZADO CORRECTAMENTE');
                return Redirect::to('/seccion1');   
            }              
        } else {
            $id=$request->get("id_lote");
            DB::table('lote')->where('id', $id)->update(['nro_lote'=>$request['nro_lote_ac'], 'superficie'=>$request['superficie_ac'],'id_manzano'=>$request['id_manzano_ac']]);       
            Session::flash('message', 'ACTUALIZADO CORRECTAMENTE');
            return Redirect::to('/lote');   
        }                       

    }

    public function destroy($id) {

        $trabajador = User::find($id);
        $trabajador->delete();
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

    public function cargar_lote($punto){
        $lote=DB::select('SELECT * FROM lote WHERE lote.point="'.$punto.'"');
        return response($lote);
    }
public function seccion1(){
        $manzano = Manzano::lists('numero', 'id');        

   return view('mapas.seccion1',compact('manzano')) ;
}
public function seccion2(){
        $manzano = Manzano::lists('numero', 'id');        

   return view('mapas.seccion2',compact('manzano')) ;
}
}
