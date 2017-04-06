<h1>{{ $greeting }} {{ $name }}</h1>

@if($name == "Richi")
    <p>Besondere Begrüssung für Richi</p>
@else
    <p>Besondere Begrüssung für alle anderen</p>
@endif