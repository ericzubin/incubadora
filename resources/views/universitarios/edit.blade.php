<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Editar alumno</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">


<h1>Edit {{ $alumno->nombre }}</h1>

<!-- if there are creation errors, they will show here -->
<div class="bg-danger">
{{ Html::ul($errors->all()) }}
</div>
{{ Form::model($alumno, array('route' => array('universitario.update', $alumno->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null, array('class' => 'form-control')) }}


    </div>

    <div class="form-group">
          {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, array('class' => 'form-control')) }}

    </div>

    <div class="form-group">

    
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono',  null, array('class' => 'form-control')) }}
    </div>


       <div class="form-group">

    
        {{ Form::label('carrera', 'Carrera') }}
        {{ Form::text('carrera',  null, array('class' => 'form-control')) }}
    </div>
   <div class="form-group">

    
        {{ Form::label('interes', 'Interes') }}
        {{ Form::text('interes',  null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Guardar cambios', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection

</div>
</body>
</html>



