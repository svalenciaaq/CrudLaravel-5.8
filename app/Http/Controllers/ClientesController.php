<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes;
use App\Http\Requests\StoreClientRequest;
use Carbon\Carbon;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $request->user()->authorizeRoles(['vendedor', 'admin']);
        $clientes=Clientes::orderBy('id','DESC')->paginate(3);
        return view('clientes.index',compact('clientes')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        
        $client = new Clientes();

        $client->name = $request->input('name');
        $client->dni = $request->input('dni');
        $client->email = $request->input('email');
        $client->addres = $request->input('addres');
    
        $client->save();

        return redirect('clientes')->with('message' , 'Guardado Satisfactoriamente');
        
        
    //     $dataAsesor = $request->all();
    //     $edad=20;
    //     $dataAsesor=array_add($dataAsesor,'age', $edad);
        
    //    Asesor::create($dataAsesor);
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
    public function edit(Request $request,$id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
        $cliente = Clientes::find($id);
        return view('clientes.edit',compact('cliente'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClientRequest $request, $id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
         $client = Clientes::find($id);

         $client->name = $request->input('name');
         $client->dni = $request->input('dni');
         $client->email = $request->input('email');
         $client->addres = $request->input('addres');
     
         $client->save();
       

        return redirect('clientes')
                                        ->with('message' , 'Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
       Clientes::find($id)->delete();
        return redirect('clientes')
                        ->with('success','Item deleted successfully');
    }
}
