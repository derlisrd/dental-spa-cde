<div>
    @empty(!$selected)
    <div class="alert alert-info">
        Doc: {{ $doc }}  {{ $nombre_completo }}
    </div>
    <div class="form-group mb-3">
        <input type="hidden" name="paciente_id" value="{{ $paciente_id }}" />
    </div>
    @endempty
    <div class="search-box">
        <div class="form-group">
        <input class="form-control" autofocus name="search" autocomplete="off" wire:model="search" wire:keyup="SearchResult" placeholder="Buscar paciente..."/>
        <small class="form-text text-muted">Paciente</small>
        </div>
        @if($showdiv)
        <ul class="list-group" >
            @if(!empty($pacientes))
                @foreach($pacientes as $p)
                <li class="list-group-item" role="button" wire:click="SelectPaciente({{ $p->id }})">{{ $p->doc }} {{ $p->nombre}} {{ $p->apellido }}</li>
                @endforeach
            @endif
        </ul>
        @endif
    </div>
</div>
