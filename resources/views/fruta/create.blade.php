@if(isset($fruta) && is_object($fruta))
<h1> Editar Fruta</h1>
@else
<h1>Crear una fruta</h1>
@endif
<h1>Crear una fruta</h1>

<form action="{{isset($fruta) ? route('frutas.edit'): route('frutas.save')}}" method="POST">
    {{csrf_field()}}

    @if(isset($fruta) && is_object($fruta))
    <input type="hidden" name="id" value="{{$fruta->id}}"/>
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}"/>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{$fruta->descripcion ?? ''}}"/>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{$fruta->precio ?? ''}}"/>

    <input type="submit" value="Guardar"/>

</form>