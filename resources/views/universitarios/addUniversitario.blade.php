<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        {{--Header Finished--}}

        <div><h1>Add New Book</h1></div>
        {!! Form::open(['action' => 'UniversitarioController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Title :') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email :') !!}
                {!! Form::textarea('email', null,  ['class'=>'form-control', 'placeholder'=>'Email']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('telefono', 'Telefono :') !!}
                {!! Form::text('telefono', null,  ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
            </div>
                  <div class="form-group">
                {!! Form::label('carrera', 'Carrera :') !!}
                {!! Form::text('carrera', null,  ['class'=>'form-control', 'placeholder'=>'Carrera']) !!}
            </div>
            </div>
                  <div class="form-group">
                {!! Form::label('interes', 'Interes :') !!}
                {!! Form::text('interes', null,  ['class'=>'form-control', 'placeholder'=>'Interes']) !!}
            </div>
                </div>
                  <div class="form-group">
                {!! Form::label('sexo', 'Sexo :') !!}
                {!! Form::text('sexo', null,  ['class'=>'form-control', 'placeholder'=>'Sexo']) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Submit', ['class'=>'btn btn-toolbar']) !!} <button class="btn btn-toolbar pull-right"><a href="/book">Back to Home</a></button>
            </div>
        {!! Form::close() !!}
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{--Footer started--}}
    </div>
</body>
</html>



