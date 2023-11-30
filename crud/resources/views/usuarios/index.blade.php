mostrar la lista de empleados dddd    

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario )
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->cedula}}</td>
            <td>{{$usuario->direccion}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>Editar | Borrar</td>
            
        </tr>
        @endforeach

    </tbody>
</table>