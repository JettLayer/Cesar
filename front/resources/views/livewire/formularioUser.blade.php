<div class="card-body">
    <div class="form-group">
      <label>Rol</label>
      <input wire:model= "datos.role" type="text" class="form-control" id="exampleInputRol" placeholder="Rol">
    </div>

    <div class="form-group">
      <label>Nombre</label>
      <input wire:model= "datos.name" type="text" class="form-control" id="exampleInputName" placeholder="Nombre">
    </div>

    <div class="form-group">
      <label>Apellido</label>
      <input wire:model= "datos.surname" type="text" class="form-control" id="exampleInputSurname" placeholder="Apellido">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input wire:model= "datos.email" type="email" class="form-control" id="exampleInputEmail" placeholder="Correo">
    </div>

    <div class="form-group">
      <label>Contraseña</label>
      <input wire:model= "datos.password" type="password" class="form-control" id="exampleInputPassword" placeholder="Contraseña">
    </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
