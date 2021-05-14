<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
use Illuminate\Support\Facades\DB;

class processController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        unset ($request ['_token']);
        persona::create($request->all());
        $personas = persona::all();
        return view('mostrar')->with('personas',$personas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $personas = persona::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('mostrar')->with('personas',$personas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personas = DB::table('persona')->where('id', $id)->get();
        return view('persona', ['personas' => $personas,'edit' => 1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset ($request ['_token']);
        $id = $request -> id;
        
        persona::where('id',$id)->update(
            ['nombre'=> $request -> nombre,
             'apellido' => $request -> apellido,
             'fechaNacimiento'=> $request -> fechaNacimiento,
             'genero'=> $request -> genero,
             'email'=> $request -> email,
             'telefono'=> $request -> telefono,
             'calle'=> $request -> calle,
             'codigoPostal'=> $request -> codigoPostal]);
        $personas = persona::all();
        return view('mostrar')->with('personas',$personas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedRows = persona::where('id', $id)->delete();
        $personas = persona::all();
        return view('mostrar')->with('personas',$personas);
    }
}
