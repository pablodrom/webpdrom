@extends('layouts.panel')

@section('content')

 
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nueva Compra</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/movtjvisa') }}" class="btn btn-sm btn-success">
                <i class="fas fa-chevron-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
        
        <div class="card-body">
            @if($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i> 
                    <strong>Por favor!!</strong> {{ $error }}
                  </div>
              @endforeach
            @endif

            <form action="{{ url('/movtjvisa') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="fechacomp">Fecha compra</label>
                    <input type="date" name="fechacomp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="detacomp">Detalle de compra</label>
                    <input type="text" name="detacomp" class="form-control" value="{{ old('detacomp') }}" required>
                </div>
                <div class="form-group">
                    <label for="plancomp">Plan</label>
                    <input type="text" name="plancomp" class="form-control" value="{{ old('plancomp') }}" required>
                </div>
                <div class="form-group">
                    <label for="totcuota">Cantidad de cuotas</label>
                    <input type="integer" name="totcuota" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imptotal">Importe total</label>
                    <input type="double" name="imptotal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="impcuota">Importe cuota</label>
                    <input type="double" name="impcuota" class="form-control">
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Cargar</button>

            </form>

        </div>

      </div>


@endsection
