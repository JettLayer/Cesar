<div>
    <div class="card card-orange">
      <div class="card-header">
        <h3 class="card-title">Agregar Peticion</h3>
      </div>

      <form wire:submit.prevent="crear">
        @include('livewire.formularioPeticion')
      </form>
    </div>

    <div>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Peticiones</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#Id</th>
                    <th>Usuario</th>
                    <th>Categoria</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Status</th>
                    <th style="width: 135px">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($peticiones as $peticion)
                  <tr>
                    <td>{{$peticion['id']}}</td>
                    <td>{{$peticion['id_usuario']}}</td>
                    <td>{{$peticion['id_categoria']}}</td>
                    <td>{{$peticion['titulo']}}</td>
                    <td>{{$peticion['contenido']}}</td>
                    <td>{{$peticion['status']}}</td>
                    <td>
                        <a href="/peticiones/{{$peticion['id']}}/mostrar" class="btn btn-primary-dark btn-sm">
                        <i class="nav-icon fas fa-eye"></i>
                        <a href="/peticiones/{{$peticion['id']}}" class="btn btn-primary-dark btn-sm">
                        <i class="nav-icon fas fa-edit"></i>
                        <a wire:click="eliminar('{{$peticion['id']}}')" class="btn btn-danger-dark btn-sm">
                        <i class="nav-icon fas fa-trash"></i>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
