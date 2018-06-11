<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;

class OfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre_hotel = $request->get('nombre_hotel');
        $habitaciones = $request->get('habitaciones');
        $dormitorios = $request->get('dormitorios');
        $banos = $request->get('banos');
        $cantidad_ocupantes = $request->get('cantidad_ocupantes');
        $ofertas = Ofertas::orderBy('id', 'DESC')
        ->where('nombre_hotel', 'LIKE', "%$nombre_hotel%")
        ->where('cantidad_ocupantes', 'LIKE', "%$cantidad_ocupantes%")
        ->where('habitaciones', 'LIKE', "%$habitaciones%")
        ->where('dormitorios', 'LIKE', "%$dormitorios%")
        ->where('banos', 'LIKE', "%$banos%")
        ->get();
        return view('ofertas.index', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oferta = new Ofertas();
        $oferta->nombre_hotel = $request->get('nombre_hotel');
        $oferta->habitaciones = $request->get('habitaciones');
        $oferta->dormitorios = $request->get('dormitorios');
        $oferta->banos = $request->get('banos');
        $oferta->cantidad_ocupantes = $request->get('cantidad_ocupantes');
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();
        return redirect('ofertas')->with('success','La oferta ha sido añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
