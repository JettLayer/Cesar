<div>
    <h1>Incrementa o decrementa el numero, hijo de pvta</h1>
    <button wire:click="incrementar" class="btn btn-success">Incrementar</button>
    <button wire:click="decrementar" class="btn btn-danger">Decrementar</button>
    <h1>{{$valor}}</h1>
    <h1>Hola mi nombre es: {{$nombre}}</h1>
    <input wire:model="nombre" type="text" class="Form-control">
</div>
