
<!DOCTYPE html>
<html>
<head>
    <title>Administrar Pantallas</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">


<h1>Alumos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>carrera</td>
            <td>interes</td>

          
            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $key => $value)
        <tr>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->telefono }}</td>
            <td>{{ $value->carrera }}</td>
            <td>{{ $value->interes }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
              <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'universitario/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar este alumno', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- delete the nerd (uses the destroy method DESTROY /adminPantalla/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /adminPantalla/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('universitario/' . $value->id) }}">Mostrar esta alumno</a>

                <!-- edit this nerd (uses the edit method found at GET /adminPantalla/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('universitario/' . $value->id . '/edit') }}">Editar esta alumno</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection

</body>
</html>