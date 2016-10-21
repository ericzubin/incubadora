<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app1')
@section('content')
<div class="container">
<h1>Registro</h1>

<!-- if there are creation errors, they will show here -->
<div class="bg-danger">
{{ Html::ul($errors->all()) }}
</div>

{{ Form::open(array('url' => 'universitario')) }}

 

  <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}

    </div>

     <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}

    </div>


     <div class="form-group">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}

    </div>



  
     <div class="form-group">
        {{ Form::label('carrera', 'Carrera') }}
        {{ Form::text('carrera', Input::old('carrera'), array('class' => 'form-control')) }}

    </div>
    
     <div class="form-group">
        {{ Form::label('interes', 'Interes') }}
        {{ Form::text('interes', Input::old('interes'), array('class' => 'form-control')) }}

    </div>
    {{ Form::submit('Registro', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection

</div>
</body>
</html>

