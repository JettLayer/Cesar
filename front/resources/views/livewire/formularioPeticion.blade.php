<div class="card-body">
    <div class="form-group">
        <label>Id Usuario</label>
        <input wire:model= "datos.id_usuario" type="text" class="form-control" id="exampleInputSurname" placeholder="Id Usuario">
      </div>

      <div class="form-group">
        <label>Id Categoria</label>
        <input wire:model= "datos.id_categoria" type="text" class="form-control" id="exampleInputSurname" placeholder="Id Categoria">
      </div>

    <div class="form-group">
      <label>Titulo</label>
      <input wire:model= "datos.titulo" type="text" class="form-control" id="exampleInputSurname" placeholder="Titulo">
    </div>

    <div class="form-group">
      <label>Contenido</label>
      <input wire:model= "datos.contenido" type="text" class="form-control" id="exampleInputEmail" placeholder="Contenido">
    </div>

    <div class="form-group">
      <label>Status</label>
      <input wire:model= "datos.status" type="text" class="form-control" id="exampleInputPassword" placeholder="status">
    </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
