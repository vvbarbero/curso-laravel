<h1>APLICACION DE NOTAS</h1>

<a href="{{ url('/notas/save-note') }}">Crear Notas</a>

<h3>Listado de Notas:</h3>

<ul>
@foreach ($notes as $note)
            <li>
                <ul>
                    <li>{{ $note->title }}</li>
                    <li><a href="{{ url('/nota/'.$note->id) }}">Ver</a></li>
                </ul>
            </li>
@endforeach
</ul>
