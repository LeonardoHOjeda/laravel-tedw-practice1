<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('becas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('becas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = request();
        // DB::table('becas')->insert([
        //     'name' => $data['name'],
        //     'num_control' => $data['num_control'],
        //     'genero' => $data['genero'],
        //     'semestre' => $data['semestre'],
        //     'carrera' => $data['carrera'],
        //     'fecha_nacimiento' => $data['fecha_nacimiento'],
        //     'domicilio' => $data['domicilio'],
        //     'tipo_beca' => $data['tipo_beca'],
        //     'archivo_motivos' => $data['archivo_motivos'],
        //     'archivo_identificacion' => $data['archivo_identificacion'],
        //     'archivo_comprobante' => $data['archivo_comprobante'],
        // ]);

        // $path1 = $request['archivo_motivos']->store('upload-files', 's3');
        // $path2 = $request['archivo_identificacion']->store('upload-files', 's3');
        // $path3 = $request['archivo_comprobante']->store('upload-files', 's3');

        // Storage::disk('s3')->setVisibility($path1, 'public');
        // Storage::disk('s3')->setVisibility($path2, 'public');
        // Storage::disk('s3')->setVisibility($path3, 'public');
        // //Redireccionamos
        // return redirect()->action('archivos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        //
    }
}
