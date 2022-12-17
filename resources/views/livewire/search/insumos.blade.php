
<div>

    @empty(!$selected)
    <div class="alert alert-info">
        Codigo: {{ $codigo }} Insumo: {{ $selected }} Unidad de medida: {{ $medida }}
    </div>
    @endempty
    <div class="search-box">


        <input class="form-control form-control-lg" wire:model="search" wire:keyup="SearchResult" placeholder="Buscar insumos..."/>
        @if($showdiv)
        <ul >
            @if(!empty($insumos))
            @foreach($insumos as $i)
            <li wire:click="SelectInsumo({{ $i->id }})">{{ $i->codigo }} {{ $i->nombre}}</li>
            @endforeach
            @endif
        </ul>
        @endif
    </div>

</div>
