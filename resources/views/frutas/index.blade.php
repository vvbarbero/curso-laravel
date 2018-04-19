<h1>Listado de Frutas (accion controller)</h1>

<a href="{{ action('FrutasController@getNaranjas') }}">Ir a naranjas</a>
<br>
<a href="{{ action('FrutasController@anyPeras') }}">Ir a peras</a>

<ul>
@foreach($frutas as $fruta)
    <li>{{ $fruta }}</li>
@endforeach
</ul>
