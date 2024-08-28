<h1>Formulario en Laravel</h1>

<form action="{{ url('/recibir') }}" method="post">
    {{csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" />
    
    <label for="email">Email</label>
    <input type="email" name="email" />
    
    <input type="submit" value="Enviar"/>
    
</form>