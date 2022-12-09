<div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Actualizar Usuarios</h3>
      </div>

      <form wire:submit.prevent="modificar">
        @include('livewire.formularioUser')
      </form>
    </div>
