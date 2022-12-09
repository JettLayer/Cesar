<div>
    <div class="card card-green">
      <div class="card-header">
        <h3 class="card-title">Actualizar Categoria</h3>
      </div>

      <form wire:submit.prevent="modificar">
        @include('livewire.formularioCategoria')
      </form>
    </div>
