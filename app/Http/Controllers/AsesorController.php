<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Asesor;
use App\Http\Requests\StoreAsesorRequest;
use Carbon\Carbon;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores=Asesor::orderBy('id','DESC')->paginate(3);
        return view('asesores.index',compact('asesores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsesorRequest $request)
    {
       
        $asesor = new Asesor();

        $asesor->name = $request->input('name');
        $asesor->dni = $request->input('dni');
        $asesor->tel = $request->input('tel');
        $asesor->date = $request->input('date');
        $asesor->gen = $request->input('gen');
        $asesor->client = $request->input('client');
        $asesor->sede = $request->input('sede');
        
      
        $edad = Carbon::parse($asesor->date)->age;
        
        $asesor->age = $edad;
        $asesor->save();

        return redirect('asesores')->with('message' , 'Guardado Satisfactoriamente');
        
        
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
    public function edit($id)
    {
        $asesores = Asesor::find($id);
        return view('asesores.edit',compact('asesores'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAsesorRequest $request, $id)
    {
         $asesor = Asesor::find($id);

        $asesor->name = $request->input('name');
        $asesor->dni = $request->input('dni');
        $asesor->tel = $request->input('tel');
        $asesor->date = $request->input('date');
        $asesor->gen = $request->input('gen');
        $asesor->client = $request->input('client');
        $asesor->sede = $request->input('sede');
        
      
        $edad = Carbon::parse($asesor->date)->age;
        
        $asesor->age = $edad;
        $asesor->save();

        return redirect('asesores')
                                        ->with('message' , 'Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asesor::find($id)->delete();
        return redirect('asesores')
                        ->with('success','Item deleted successfully');
    }
}
