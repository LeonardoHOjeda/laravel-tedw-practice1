@extends('layouts.app')

@section('content')
  <h2>Lista de solicitudes de beca</h2>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Numero de control</th>
        <th scope="col">Carrera</th>
        <th scope="col">Semestre</th>
        <th scope="col">Tipo de beca</th>
        <th scope="col">
          
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($becas as $solicitud => $key)
        <tr>
          <th scope="row">{{$key->id}}</th>
          <td>{{$key->name}}</td>
          <td>{{$key->num_control}}</td>
          <td>{{$key->carrera}}</td>
          <td>{{$key->semestre}}</td>
          <td>{{$key->tipo_beca}}</td>
          <td><a class="btn btn-info" href="/solicitudes/{{$key->id}}">Ver solicitud</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection