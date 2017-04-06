
@if($errors->count() !=0)
    <strong>Es sind Fehler aufgetreten:</strong>
    <ul>
        @foreach($errors->all() AS $error)
            <li>
                {{$error}}
            </li>

        @endforeach

    </ul>
    @endif

