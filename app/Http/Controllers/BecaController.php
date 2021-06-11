<?php

namespace App\Http\Controllers;

use App\Models\Beca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $becas = DB::table('becas')->get();
        return view('becas.index', ['becas' => $becas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudes = Beca::all();
        return view('becas.create', compact('solicitudes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request['archivo_motivos']->store('upload-files', 's3'));
        // dd($request['archivo_identificacion']->store('upload-files', 's3'));
        // dd($request['archivo_comprobante']->store('upload-files', 's3'));

        $archivo_motivos = $request['archivo_motivos']->store('upload-files', 's3');
        $archivo_identificacion = $request['archivo_identificacion']->store('upload-files', 's3');
        $archivo_comprobante = $request['archivo_comprobante']->store('upload-files', 's3');

        $data = request();
        DB::table('becas')->insert([
            'name' => $data['name'],
            'num_control' => $data['num_control'],
            'genero' => $data['genero'],
            'semestre' => $data['semestre'],
            'carrera' => $data['carrera'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'domicilio' => $data['domicilio'],
            'tipo_beca' => $data['tipo_beca'],
            'archivo_motivos' => $archivo_motivos,
            'archivo_identificacion' => $archivo_identificacion,
            'archivo_comprobante' => $archivo_comprobante,
        ]);
        
        Storage::disk('s3')->setVisibility($archivo_motivos, 'public');
        Storage::disk('s3')->setVisibility($archivo_identificacion, 'public');
        Storage::disk('s3')->setVisibility($archivo_comprobante, 'public');
        //Redireccionamos
        return redirect()->action('becas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beca  $beca
     * @return \Illuminate\Http\Response
     */
    public function show(Beca $beca)
    {
        // $url = Storage::disk('s3')->url('upload-files/'.$beca);
        return view('becas.show', compact('beca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beca  $beca
     * @return \Illuminate\Http\Response
     */
    public function edit(Beca $beca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beca  $beca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beca $beca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beca  $beca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beca $beca)
    {
        //
    }
}
