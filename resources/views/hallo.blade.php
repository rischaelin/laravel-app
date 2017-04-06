@extends("layouts.master")

@section("title")
    Hallo
    @stop


@section("content")
    @if(count($names)== 0)
        <p>Es ist keine Begrüssung möglich</p>
    @else
        <ul>
            @foreach( $names AS $name)
                <li>{{$name}}</li>
            @endforeach
        </ul>
    @endif
@stop

    @section("footer")
        @parent
            <div>Alternativer Footer</div>
        @stop
