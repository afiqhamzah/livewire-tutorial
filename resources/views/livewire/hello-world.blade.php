<div>
    <input wire:model="name" type="text">
    <input wire:model.debounce.1000ms="name_debounce" type="text">
    <input wire:model.lazy="name_lazy" type="text">

    <h1>Hello {{ $name }}</h1>
    <h1>Hello {{ strtoupper($name) }}</h1>

    <h1>Hello debounced{{$name_debounce}}</h1>
    <h1>Hello lazy{{$name_lazy}}</h1>

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>


    <select wire:model="greetingalot" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    <input wire:model="loud" type="checkbox"></input>
    <h1>{{ $greeting }} {{ $name }} @if ($loud) ! @endif<h1>


    <input wire:model="loudalot" type="checkbox"></input>
    <h1>{{ implode(', ', $greetingalot) }} {{ $name }} @if ($loudalot) ! @endif<h1>

</div>
