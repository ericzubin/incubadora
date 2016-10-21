<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

  
    <div class=" text-center">
        <h2>{{ $alumno->nombre }}</h2>
        <p>
            <strong>Nombre :</strong> {{ $alumno->nombre }}<br>
            <strong>Email</strong> {{ $alumno->email }}<br>
            <strong>Telefono</strong> {{ $alumno->telefono }}<br>
            <strong>Carrera</strong> {{ $alumno->carrera }}<br>
            <strong>Interes:</strong> {{ $alumno->interes }}<br>

        </p>
    </div>



@endsection

</body>
</html>


