@extends("layouts.master")

@section("title")
   TODO
@stop


@section("content")

    <form method="POST" action="{{action("Todo\\TodoController@store")}}">
        <label for="title">
            Titel:
        </label>
        <input type="text" name="title" id="title" />
        <br />
        <input type="submit" value="TODO hinzufügen" />

        {!! csrf_field() !!}
    </form>
@stop