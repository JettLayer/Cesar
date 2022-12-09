<div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Agregar Usuarios</h3>
      </div>

      <form wire:submit.prevent="crear">
        @include('livewire.formularioUser')
      </form>
    </div>

<div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Usuarios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#Id</th>
                <th>Rol</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Correo</th>
                <th style="width: 135px">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
              <tr>
                <td>{{$usuario['id']}}</td>
                <td>{{$usuario['role']}}</td>
                <td>{{$usuario['name']}}</td>
                <td>{{$usuario['surname']}}</td>
                <td>{{$usuario['email']}}</td>
                <td><a href="/usuarios/{{$usuario['id']}}/mostrar" class="btn btn-primary-dark btn-sm">
                    <i class="nav-icon fas fa-eye"></i>
                    <a href="/usuarios/{{$usuario['id']}}" class="btn btn-primary-dark btn-sm">
                    <i class="nav-icon fas fa-edit"></i>
                    <a wire:click="eliminar('{{$usuario['id']}}')" class="btn btn-danger-dark btn-sm">
                    <i class="nav-icon fas fa-trash"></i>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
