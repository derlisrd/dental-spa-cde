<div>

    <div class="search-box">
        <div class="form-group">
        <input class="form-control"  name="search" wire:value="search" autocomplete="off" wire:model="search" wire:keyup="SearchResult" placeholder="Buscar servicio..."/>
        <small class="form-text text-muted">Servicio</small>
        </div>
        @if($showdiv)
        <ul class="list-group" >
            @if(!empty($servicios))
                @foreach($servicios as $s)
                <li class="list-group-item" role="button" wire:click="SelectServicio({{ $s->id }})">{{ $s->codigo }} {{ $s->descripcion}}</li>
                @endforeach
            @endif
        </ul>
        @endif
    </div>
    @empty(!$selected)
    <div class="alert alert-info">
        Codigo: {{ $codigo }} Servicio: {{ $selected }}
    </div>
    <div class="form-group mb-3">
        <input class="form-control"  name="valor_total" autocomplete="off" wire:model="precio"  placeholder="Precio de servicio"/>
        <small class="form-text text-muted">Precio de servicio</small>
        <input type="hidden" name="servicio_id" value="{{ $servicio_id }}" />
        <input type="hidden" name="porcentaje_comision_servicio" value="{{ $porcentaje_comision_servicio }}" />
    </div>
    @endempty
</div>
