<h1>APLICACION DE NOTAS</h1>

<h3>Listado de Notas:</h3>

<ul>
@foreach ($notes as $note)
            <li>{{ $note->title }}</li>
@endforeach
</ul>
