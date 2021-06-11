@extends('layouts.app')

@section('content')
  <h1>Analisis de la beca para: {{$beca->name}}</h1>

  <article>
    <h3 class="text-primary">Nombre</h3>
    <p class="">{{$beca->name}}</p>

    <h3 class="text-primary">Numero de Control</h3>
    <p class="">{{$beca->num_control}}</p>

    <h3 class="text-primary">Genero</h3>
    <p class="">{{$beca->genero}}</p>

    <h3 class="text-primary">Semestre</h3>
    <p class="">{{$beca->semestre}}</p>

    <h3 class="text-primary">Carrera</h3>
    <p class="">{{$beca->carrera}}</p>

    <h3 class="text-primary">Fecha de nacimiento</h3>
    <p class="">{{$beca->fecha_nacimiento}}</p>

    <h3 class="text-primary">Domicilio</h3>
    <p class="">{{$beca->domicilio}}</p>

    <h3 class="text-primary">Tipo de beca solicitada</h3>
    <p class="">{{$beca->tipo_beca}}</p>

    <embed src="https://laravel-tedw-practice1.s3.amazonaws.com/{{$beca->archivo_motivos}}" width="500px" height="700px" type="">
    <embed src="https://laravel-tedw-practice1.s3.amazonaws.com/{{$beca->archivo_identificacion}}" width="500px" height="700px" type="">
    <embed src="https://laravel-tedw-practice1.s3.amazonaws.com/{{$beca->archivo_comprobante}}" width="500px" height="700px" type="">
  </article>
@endsection