<div>
    <div class="card card-green">
      <div class="card-header">
        <h3 class="card-title">Agregar Categoria</h3>
      </div>

      <form wire:submit.prevent="crear">
        @include('livewire.formularioCategoria')
      </form>
    </div>

<div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Categorias</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th style="width: 135px">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
              <tr>
                <td>{{$categoria['id']}}</td>
                <td>{{$categoria['name']}}</td>
                <td>{{$categoria['descripcion']}}</td>
                <td>
                    <a href="/categorias/{{$categoria['id']}}/mostrar" class="btn btn-primary-dark btn-sm">
                    <i class="nav-icon fas fa-eye"></i>
                    <a href="/categorias/{{$categoria['id']}}" class="btn btn-primary-dark btn-sm">
                    <i class="nav-icon fas fa-edit"></i>
                    <a wire:click="eliminar('{{$categoria['id']}}')" class="btn btn-danger-dark btn-sm">
                    <i class="nav-icon fas fa-trash"></i>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
