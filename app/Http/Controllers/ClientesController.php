<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('cliente.index')->with('clientes', $clientes); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre'=>'required','ap'=>'required','am'=>'required','sexo'=>'required', 'telefono'=>'required', 'direccion'=>'required', 'ecivil'=>'required', 'institucion'=>'required']);
        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes=Cliente::find($id);
        return  view('cliente.show',compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes=Cliente::find($id);
        return view('cliente.edit')->with('clientes', $clientes);
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
        $this->validate($request,['nombre'=>'required','ap'=>'required','am'=>'required','sexo'=>'required', 'telefono'=>'required', 'direccion'=>'required', 'ecivil'=>'required', 'institucion'=>'required']);
        Cliente::find($id)->update($request->all());
        return redirect()->route('cliente.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('cliente.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
