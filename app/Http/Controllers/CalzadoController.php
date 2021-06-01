<?php

namespace App\Http\Controllers;

use App\Models\calzado;
use Illuminate\Http\Request;

class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['calzados']=calzado::paginate(5);
        return view('calzado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calzado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        //$datosCalzado=request()->all();
        $datosCalzado=request()->except('_token');
        Calzado::insert($datosCalzado);
        //return response()->json($datosCalzado);
        return redirect('calzado')->with('mensaje','Informacion agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function show(calzado $calzado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $calzado=calzado::findOrFail($id);
        return view('calzado.edit', compact('calzado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosCalzado=request()->except(['_token','_method']);
        calzado::where('id','=',$id)->update($datosCalzado);

        $calzado=calzado::findOrFail($id);
        return view('calzado.edit', compact('calzado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        calzado::destroy($id);
        return redirect('calzado')->with('mensaje','Informacion eliminada correctamente');
    }
}
