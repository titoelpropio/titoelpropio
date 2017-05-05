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
use App\Reserva;
use DB;
use Hash;
class ReservaController extends Controller {
    public function __construct() {
//        $this->middleware('auth');
//        $this->middleware('admin');
//        $this->middleware('auth', ['only' => 'admin']);
    }
    function index() {
               
        return view('Reserva.index');
    }
    public function create() {
        $empresa = Empresa::lists('nombre', 'id');
        return view('usuario.create', compact('empresa'));
    }
    public function store(Request $request) {
        $verificar=DB::select("SELECT COUNT(*)as contador from Reserva WHERE id_manzano=".$request['id_manzano']." AND nro_Reserva=".$request['nro_Reserva']);
        if ($verificar[0]->contador == 1) {
            Session::flash('message-error', 'YA EXISTE UN Reserva CON ESAS CARACTERISTICAS');
            return Redirect::to('/Reserva');             
        } else {
           DB::table('Reserva')->insert(['nro_Reserva' => $request['nro_Reserva'],'superficie' => $request['superficie'],'estado' => $request['estado'],'point' => $request['punto'],'id_manzano' => $request['id_manzano']]);        
           Session::flash('message', 'CREADO CORRECTAMENTE');
        return Redirect::to('/Reserva');   
        }
    }
    public function edit($id) {
        $trabajador = User::find($id);
        $empresa = Empresa::where('id', $trabajador->id_empresa)->lists('nombre', 'id');
        return view('usuario.edit', ['user' => $trabajador], compact('empresa'));
    }
    public function update(Request $request) {
        $verificar=DB::select("SELECT COUNT(*)as contador from Reserva WHERE id_manzano=".$request['id_manzano_ac']." AND nro_Reserva=".$request['nro_Reserva_ac']);
        if ($verificar[0]->contador == 1) {
            Session::flash('message-error', 'YA EXISTE UN Reserva CON ESAS CARACTERISTICAS');
            return Redirect::to('/Reserva');            
        } else {
            $id=$request->get("id_Reserva");
            DB::table('Reserva')->where('id', $id)->update(['nro_Reserva'=>$request['nro_Reserva_ac'], 'superficie'=>$request['superficie_ac'],'id_manzano'=>$request['id_manzano_ac']]);       
            Session::flash('message', 'ACTUALIZADO CORRECTAMENTE');
            return Redirect::to('/Reserva');   
        }                       
    }
    public function destroy($id) {
        $trabajador = User::find($id);
        $trabajador->delete();
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
    public function cargar_Reserva($punto){
        $Reserva=DB::select('SELECT * FROM Reserva WHERE Reserva.point="'.$punto.'"');
        return response($Reserva);
    }
    function seccion1_reserva(){

 $manzano = Manzano::lists('numero', 'id');
 return view('mapas.seccion1_reserva',compact('manzano'));

    }
}