<h1>{{$titulo}}</h1>
<p>(Accion del controlador PeliculasController)</p>

@if(isset($pagina))
<h3>La pagina es {{$pagina}}</h3>
<a href="{{ url('/detalle') }}">Detalle</a>
@endif