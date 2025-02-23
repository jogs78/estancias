<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Proyecto;
use App\Models\Horario;


class InicioControler extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Controlador Inicio
    |--------------------------------------------------------------------------
    |
    | Este controlador maneja el redireccionamiento del usuario al iniciar sesión en el sistema

    | ,.
    |
    */
    public function __construct()
    {
        $this->middleware('inicio');
    }
    public function inicio(){
        $user = Auth::user();
        if (is_null($user)) die;

        switch ($user->tipo_usuario) {
            case 'Jefe':
                $usuarios = User::all();
                $proyectos = Proyecto::where('activo',1)->get();
                $historicos= Proyecto::where('activo',0)->get();
                $horarios = Horario::all();
                return  view('inicio',compact('usuarios','proyectos','horarios','historicos'));
                break;
            case 'Prestador':
                
                
                $proyectos = Proyecto::where('prestador_id',$user->id)->get();
                return  view('inicio',compact('usuarios','proyectos','horarios','historicos'));
                break;
            case 'Auxiliar':
                $usuarios = User::all();
                $proyectos = Proyecto::where('responsable_id',$user->id)->get();
                return redirect('/Proyectos')->with('usuarios','proyectos');
                break;
            case 'Externo':
                $usuarios = User::all();
                $proyectos = Proyecto::all();
                $horarios = Horario::all();
                return  view('inicio',compact('usuarios','proyectos','horarios'));
                break;
            case 'Aspirante':
                $usuarios = User::all();
                $proyectos = Proyecto::all();
                return view('inicio',compact('usuarios','proyectos'));
            default:
                return view('inicio',compact('usuarios','proyectos'));
                break;
        }
    }
}
