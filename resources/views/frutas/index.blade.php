<h1>Listado de Frutas (accion controller)</h1>

{{--<a href="{{ action('FrutasController@getNaranjas') }}">Ir a naranjas</a>--}}
<a href="{{ route('naranjitas') }}">Ir a naranjas</a>
<br>
<a href="{{ action('FrutasController@anyPeras') }}">Ir a peras</a>

<ul>
@foreach($frutas as $fruta)
    <li>{{ $fruta }}</li>
@endforeach
</ul>

<h1>Formulario en Laravel</h1>
<form action="{{ url('/recibir') }}" method="POST">
    <p>
        <label for="nombre">Nombre de la fruta</label>
        <input type="text" name="nombre" />
    </p>
    <p>
        <label for="descripcion">Descripcion de la fruta</label>
        <textarea name="descripcion"></textarea>
    </p>
    <p>
        <input type="submit" value="ENVIAR">
    </p>
</form>
