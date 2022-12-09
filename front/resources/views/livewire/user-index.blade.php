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
                <th>Role</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Correo</th>
                <th>Acciones</th>
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
                <td><a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i></button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
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
                <th>Role</th>
                <th>Nombre</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
              <tr>
                <td>{{$categoria['id']}}</td>
                <td>{{$categoria['name']}}</td>
                <td>{{$categoria['descripcion']}}</td>
                <td><span class="badge bg-danger">55%</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
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
                <th>Role</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Correo</th>
                <th>Acciones</th>
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
                <td><span class="badge bg-danger">55%</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
