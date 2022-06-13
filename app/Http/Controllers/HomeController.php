<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    /* public function __construct() {
        $this->middleware('auth');
    } */


    public function index(Request $request) {

        return view('home.index');

        //return $request->session()->all();
        
    }

    /* public function getByEmail ($item) {

        //return DB::table('usuario')->where('email', $item)->value('nombre')->get();
        return DB::select("SELECT nombre FROM usuario WHERE email='$item'");

    } */
    public function getTar ($id) {


        $tar = DB::select("SELECT * FROM tarea WHERE idusu = '$id'");

        return $tar;

    }

    public function edita ($titulo) {


        return view('home.edita')->with('titulo', $titulo);

    }

    public function actualiza ($titulo) {

        $titulo2 = request('titulo') ?? $titulo;
        $texto =  request('texto') ?? "";
        

        DB::table('tarea')->where('titulo', $titulo)->update(['titulo' => $titulo2, 'texto' => $texto]);

        return view('home.index');

    }

    public function borra ($titulo) {

        DB::table('tarea')->where('titulo', $titulo)->delete();

        return view('home.index');


    }

    public function finaliza ($titulo) {
        
        DB::table('tarea')->where('titulo', $titulo)->update(['completa' => 1]);

        return view('home.index');

    }

    public function nueva () {
        return view('home.nueva');
    }

    public function gestiona () {
        return view('home.gestiona');
    }

    public function getEtis() {

        //$etis = DB::select("SELECT etiqueta FROM etiqueta");
        //$etis = DB::table('etiqueta')->value('etiqueta');


        /* $aux = DB::select("SELECT etiqueta FROM etiqueta");

        $aux2 = json_encode($aux);

        $etis = json_decode($aux2,1); */

        $etis = DB::table('etiqueta')->get();


        return $etis;
        
    }

    public function creaTar ($idusu) {

        
        $titulo = request('titulo') ?? "";
        $texto = request('texto') ?? "";
        $etiquetas = request('etiquetas');

        DB::table('tarea')->insert([
            'titulo' => $titulo,
            'texto' => $texto,
            'fecha' => date("Y-m-d"),
            'idusu' => $idusu,
        ]);

        return view('home.index');


    }

    public function borraEti ($eti) {

        DB::table('etiqueta')->where('etiqueta', $eti)->delete();

        return view('home.gestiona');

    }

    public function editaEti ($eti) {

        return view('home.etiqueta')->with('etiqueta', $eti);;

    }

    public function nuevaEti ($etiqueta) {

        $etiqueta2 = request('etiqueta') ?? $etiqueta;
        $color = request('color') ?? "#fff000";

        DB::table('etiqueta')->where('etiqueta', $etiqueta)->update(['etiqueta' => $etiqueta2, 'color' => $color]);

        return view('home.gestiona');

    }

    public function nuevaEtiqueta () {
        return view('home.nuevaEti');
    }

    public function creaNuevaEtiqueta () {
        $etiqueta = request('etiqueta') ?? "";
        $color = request('color') ?? '#fff000';

        DB::table('etiqueta')->insert([
            'etiqueta' => $etiqueta,
            'color' => $color,
        ]);

        return view('home.gestiona');
    }
}
