formulario de creacion de empledo 

<form action="{{url('/usuarios')}}" method="POST">
    @csrf

    <div>
        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="nombre"><br>  

        <label for="Cedula">Cedula</label>
        <input type="text" name="cedula" id="cedula" placeholder="cedula"><br>

        <label for="Direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" placeholder="direccion"><br>

        <label for="Telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" placeholder="telefono"><br>

        <input type="submit" value="Enviar datos">

    </div>
</form>