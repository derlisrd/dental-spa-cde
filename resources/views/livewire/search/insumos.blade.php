
<div>

    @empty(!$selected)
    <div class="alert alert-info">
        Codigo: {{ $codigo }} Insumo: {{ $selected }} Unidad de medida: {{ $medida }}
    </div>
    <input type="hidden" name="insumo_id" value="{{ $insumo_id }}" />
    @endempty
    <div class="search-box">
        <div class="form-group">
        <input class="form-control" autofocus name="search" autocomplete="off" wire:model="search" wire:keyup="SearchResult" placeholder="Buscar insumos..."/>
        <small class="form-text text-muted">Codigo</small>
        </div>
        @if($showdiv)
        <ul class="list-group" >
            @if(!empty($insumos))
            @foreach($insumos as $i)
            <li class="list-group-item" role="button" wire:click="SelectInsumo({{ $i->id }})">{{ $i->codigo }} {{ $i->nombre}}</li>
            @endforeach
            @endif
        </ul>
        @endif
    </div>

</div>
