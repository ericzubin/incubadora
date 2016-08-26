<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
        {{--Header Started--}}

        <div class="btn btn-block"><a href="{{ route('book.create')  }}"><h2>Add New Book</h2></a></div>
        @foreach( $allBooks as $book )
            <hr>
            <div class="row">
                {!! Html::linkRoute('book.edit', 'Edit', array($book->id), ['class'=>'btn btn-default col-xs-2']) !!}
                {!! Form::open(['route' => ['book.destroy', $book->id], 'method' => 'delete']) !!}
                <input class="btn btn-default col-xs-2" type="submit" value="Delete" />
                {!! Form::close() !!}
            </div>
            <div><h1>{!! Html::linkRoute('book.show', $book->title, array($book->id)) !!}</h1></div>
            <div>{{ $book->description }}</div>
            <div class="pull-right"><em>{{'Published by-'. $book->author }}</em>
            </div>
        @endforeach

        {{--Footer Finished--}}
    </div>
    </body>
</html>
