@extends('layouts.app')

@section('content')
<h1>Envio de datos</h1>
<div>
  <form action="{{route('becas.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="name">Nombre completo</label>
      <input type="text" class="form-control" placeholder="Nombre completo..." name="name">
    </div>
    <div class="form-group">
      <label for="num_control">Numero de control</label>
      <input type="text" class="form-control" placeholder="Numero de control..." name="num_control">
    </div>
    <div class="form-group">
      <label for="genero">Genero</label>
      <select class="form-control" id="genero" name="genero">
        <option disabled selected>--Selecciona una opcion--</option>
        <option value="hombre">Hombre</option>
        <option value="mujer">Mujer</option>
        <option value="binario">Binario</option>
        <option value="nonbinary">No Binario</option>
        <option value="fluido">Fluido</option>
        <option value="nofluido">No fluido</option>
        <option value="mixto">Mixto</option>
        <option value="sometimes">A veces uno, a veces otro</option>
      </select>
    </div>
    <div class="form-group">
      <label for="semestre">Semestre</label>
      <input type="number" class="form-control" placeholder="Semestre" min="2" max="12" name="semestre">
    </div>
    <div class="form-group">
      <label for="carrera">Carrera</label>
      <select class="form-control" id="carrera" name="carrera">
        <option value="ninguna" disabled selected>--Selecciona una opcion--</option>
        <option value="administracion">Licenciatura en Administracion</option>
        <option value="ambiental">Ingenieria Ambiental</option>
        <option value="bioquimica">Ingenieria Bioquimica</option>
        <option value="electronica">Ingenieria Electronica</option>
        <option value="gestion">Ingenieria Gestion Empresarial</option>
        <option value="industrial">Ingenieria Industrial</option>
        <option value="mecanica">Ingenieria Mecanica</option>
        <option value="mecatronica">Ingenieria Mecatronica</option>
        <option value="quimica">Ingenieria Quimica</option>
        <option value="sistemas">Ingenieria Sistemas Computacionales</option>
      </select>
    </div>
    <div class="form-group">
      <label for="fecha_nacimiento">Fecha de nacimiento</label>
      <input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento">
    </div>
    <div class="form-group">
      <label for="domicilio">Domicilio</label>
      <input type="text" class="form-control" placeholder="Numero de control..." name="domicilio" id="domicilio">
    </div>
    <div class="form-group">
      <label for="tipo_beca">Tipo de beca</label>
      <select class="form-control" id="tipo_beca" name="tipo_beca">
        <option value="ninguna" disabled selected>--Selecciona una opcion--</option>
        <option value="economica">Beca economica</option>
        <option value="alimenticia">Beca alimenticia</option>
      </select>
    </div>
    <div class="form-group">
      <label class="badge badge-warning" for="exampleFormControlFile1">Subir "Carta de motivos"</label>
      <input type="file" class="form-control-file" name="archivo_motivos">
    </div>
    <div class="form-group">
      <label class="badge badge-warning" for="exampleFormControlFile1">Subir identificacion (INE/Credencial Escolar)</label>
      <input type="file" class="form-control-file" name="archivo_identificacion">
    </div>
    <div class="form-group">
      <label class="badge badge-warning" for="exampleFormControlFile1">Subir "Comprobante de domicilio"</label>
      <input type="file" class="form-control-file" name="archivo_comprobante">
    </div>
    <button class="btn btn-info btn-block" type="submit">Enviar informacion</button>
  </form>
</div>
@endsection