<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use DB;
use Hash;

class ClienteController extends Controller {

    public function __construct() {
//        $this->middleware('auth');
//        $this->middleware('admin');
//        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {
//        $empresa = Empresa::lists('nombre', 'id');

        $cliente = Cliente::paginate(8);
        return view('cliente.index', compact('cliente', $cliente));
    }

    public function create() {
        $empresa = Empresa::lists('nombre', 'id');
        return view('usuario.create', compact('empresa'));
    }

    public function store(Request $request) {
//        $verificar = DB::select('select count(*) count from cliente where cliente.email="' . $request->email.'"');
//        if ($verificar[0]->count == 0) {

        DB::table('cliente')->insert(['nombre' => $request['name'], 'apellido' => $request['apellido'], 'direccion' => $request['direccion'], 'ci' => $request['ci'], 'nit' => $request['nit']
            , 'celular' => $request['celular'], 'telefono_adicional' => $request['telefono_adicional']]);
        //        DB:table('cliente')->insert(['nick'=>$request->nick,'nick'=>$request->nick,'password'=>Hash::make($request->password)]);
        Session::flash('message', 'Cliente Creado Correctamente');
        return Redirect::to('/cliente');


//                
//        }
//        else{
//            Session::flash('message-error', 'Ya existe un usuario con ese nick');
//            return Redirect::to('/');
//        }
    }

    public function edit($id) {

        $Cliente = Cliente::find($id);

        return view('cliente.edit', ['cliente' => $Cliente]);
    }

    public function update($id,Request $request) {
        $cliente = Cliente::find($id);
        $cliente->fill([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'ci' => $request->ci,
        'nit' => $request->nit,
        'telefono' => $request->telefono,
        'telefono_adicional' => $request->telefono_adicional,

        'direccion' => $request->direccion
        ]);
        $cliente->save();
        Session::flash('message', 'Cliente Actualizado Correctamente');
        return Redirect::to('/cliente');
    }

    public function destroy($id) {

        $trabajador = User::find($id);
        $trabajador->delete();
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

}
