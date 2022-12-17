@extends('Layout.app')


@section('title', 'Insumos')

@section('title2', 'Insumos')

@section('container')

<form>
<div class="row">
    <div class="col-12">
        @livewire('search.insumos')
    </div>
    <div class="col-12">
        <div class="form-group mt-5">
            <input name="cantidad" autocomplete="off" class="form-control form-control-lg" placeholder="Cantidad utilizada..."/>
        </div>
    </div>

</div>
</form>

@endsection
