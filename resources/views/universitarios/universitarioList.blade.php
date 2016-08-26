<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
        {{--Header Started--}}

        <div class="btn btn-block"><a href="{{ route('universitario.create')  }}"><h2>Add New Book</h2></a></div>
        @foreach( $allBooks as $universitario )
            <hr>
            <div class="row">
                {!! HTML::linkRoute('universitario.edit', 'Edit', array($universitario->id), ['class'=>'btn btn-default col-xs-2']) !!}
                {!! Form::open(['route' => ['universitario.destroy', $universitario->id], 'method' => 'delete']) !!}
                <input class="btn btn-default col-xs-2" type="submit" value="Delete" />
                {!! Form::close() !!}
            </div>
            <div><h1>{!! HTML::linkRoute('universitario.show', $universitario->name, array($universitario->id)) !!}</h1></div>
            <div>{{ $universitario->email }}</div>
            <div class="pull-right"><em>{{'Published by-'. $universitario->carrera }}</em>
            </div>
        @endforeach

        {{--Footer Finished--}}
    </div>
    </body>
</html>
