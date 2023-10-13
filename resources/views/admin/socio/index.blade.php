@extends("layouts.admin")

@section("titulo", "Lista de Socios")

@section("contenido")

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('socio.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="">Ingrese Nombre</label>
                    <input type="text" name="nom_apell" class="form-control">
                    <label for="">Ingrese CI</label>
                    <input type="text" name="ci" class="form-control">
                    <label for="">Ingrese Telefono</label>
                    <input type="text" name="fono" class="form-control">
                    <label for="">Ingrese Estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="m-0 float-left">Lista de Socios</h5>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Nuevo Socio
        </button>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CI</th>
                    <th>FONO</th>
                    <th>ESTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <TBOdy>
                @foreach ($socios as $soc )
                <TR>
                    <Td>{{$soc->id}}</td>
                    <Td>{{$soc->nom_apell}}</Td>
                    <Td>{{$soc->ci}}</Td>
                    <td>{{$soc->fono}}</td>
                    <td>{{$soc->estado}}</td>

                </TR>
                @endforeach
            </TBOdy>
        </table>
    </div>
</div>

@endsection