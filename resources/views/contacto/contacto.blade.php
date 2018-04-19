{{-- comentario --}}

@include('contacto.cabecera', array('nombre'=>$nombre))

<h1>Pagina de contacto {!! $nombre !!} {{-- isset($edad) && !is_null($edad)? $edad : 'No existe la edad' --}}</h1>


@if(is_null($edad))
    No existe la edad <br>
@else
    Si existe la edad: {{$edad}} <br>
@endif

<?php $numero = 4;?>
<p>Tabla del {{$numero}}</p>
@for($i=1; $i<=10;$i++)
    {{$numero.' x '.$i.' = '.($i*$numero)}}<br/>
@endfor

<?php $i=0; ?>
@while($i<=7)
    {{ 'Hola mundo' }}<br>
    <?php $i++; ?>
@endwhile

@include('contacto.cabecera')

<h1>Listado de Frutas</h1>
@foreach($frutas as $fruta)
    <p>{{ $fruta  }}</p>
@endforeach
