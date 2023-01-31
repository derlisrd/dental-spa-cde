@extends('Layout.app')

@section('title', 'Comisiones')

@section('title2', 'Comisiones')

@section('styles')
<style>
    @media print {
  .noPrint{
    display:none;
  }
  *{
    margin-left: 15px;
    margin-top: 15px;
  }
}

</style>
@endsection

@section('container')
<form action="{{ route('empleados.comisiones.pagar.update',$comision->id) }}" method="POST">
    @method('put')
    @csrf
    <input type="hidden" name="id" value="{{ $comision->id }}" />
    @if ($comision->pagado)
        <h3>Imprimir recibo comisión</h3>
    @else
        <h3>Pagar comisión</h3>
    @endif
<div class="row">
    <div class="col-12">
        <div id="printableArea">
            <p>Nro: {{ $comision->id }}</p>
        <p>Funcionario:  {{ $comision->empleado->doc . ' ' .$comision->empleado->nombre . ' ' . $comision->empleado->apellido }}</p>
        <p>Servicio: {{ $comision->servicio->codigo . ' '. $comision->servicio->descripcion }} </p>
        <p>Valor de comisión: {{ number_format($comision->valor_comision,0,'','.') }}</p>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-success noPrint" @if($comision->pagado) disabled @endif type="submit">Pagar</button>
        <button onclick="printDiv('printableArea')" @if(!$comision->pagado) disabled @endif  type="button" class="btn btn-primary noPrint">
            Imprimir
        </button>
    </div>
</div>
</form>
@endsection


@section('scripts')
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

@if (session('pagado'))
        Swal.fire('Pagado!','La comisión ha sido pagada con éxito','success')
    @endif

</script>
@endsection
