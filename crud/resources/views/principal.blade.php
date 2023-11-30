@extends('layouts.app')

@section('title')
Registro usuario
@endsection
@section('contenido')
<div>
    <span>nombre:</span>
    <input type="text" name="nombre" id="nombre" placeholder="nombre"><br>
    <span>direccion:</span>
    <input type="text" name="direccion" id="direccion" placeholder="direccion"><br>
    <span>telefono:</span>
    <input type="text" name="telefono" id="telefono" placeholder="telefono"><br>
    <span>cedula:</span>
    <input type="text" name="cedula" id="cedula" placeholder="cedula"><br>
</div>
@endsection