<h1>{{$fruta->nombre}}</h1>

<h1>{{$fruta->descripcion}}</h1>

<h1>{{$fruta->precio}}</h1>

<h3><a href="{{route('frutas.delete',['id'=>$fruta->id])}}">Eliminar Fruta</a></h3>
<h3><a href="{{route('frutas.update',['id'=>$fruta->id])}}">Actualizar Fruta</a></h3>