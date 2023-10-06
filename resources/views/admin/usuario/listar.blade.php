<h1>Lista de Usuarios</h1>

<a href="{{route('usuario.create')}}">Nuevo Usuario</a>
<table border="1">
<thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CORREO</th>
        <th>ACCIONES</th>
    </tr>
</thead>
<TBOdy>
    @foreach ( $usuarios as $user )
    <TR>
        <td>{{$user-> id}}</td>
        <td>{{$user-> name}}</td>
        <td>{{$user-> email}}</td>
        <td></td>
    </TR>
    @endforeach

</TBOdy>
</table>