<h1>APLICACION DE NOTAS</h1>

<a href="{{ url('/notas/save-note') }}">Crear Notas</a>

@if(session('status'))
    <p style="background: red">{{ session('status') }}</p>
@endif

<h3>Listado de Notas:</h3>

<ul>
@foreach ($notes as $note)
            <li>
                <ul>
                    <li>{{ $note->title }}</li>
                    <li><a href="{{ url('/nota/'.$note->id) }}">Ver</a></li>
                    <li><a href="{{ url('/notas/delete-note/'.$note->id) }}">Borrar</a></li>
                </ul>
            </li>
@endforeach
</ul>
