@extends('layouts.panel')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

 
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Tarjeta Visa</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/movtjvisa/create') }}" class="btn btn-sm btn-primary">Nueva Compra</a>
            </div>
          </div>
        </div>
        <div class="table-responsive"> 
          <!-- Projects table -->
          <table class="table align-items-center table-flush" id="movimientos"> 
          
            <thead class="thead-light">
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Detalle compra</th>
                <th scope="col">Plan</th>
                <th scope="col">N° cuota</th>
                <th scope="col">TotCuota</th>
                <th scope="col">ImpTotal</th>
                <th scope="col">Importe cuota</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>

            <tbody>
            @foreach ($motions as $movimiento)
                                    
              <tr>
                <th scope="row">
                  {{ $movimiento->fechacomp }}
                </th>
                <td>
                    {{ $movimiento->detacomp }}
                </td>
                <td>
                    {{ $movimiento->plancomp }}
                </td>
                <td>
                    {{ $movimiento->nrocuota }}
                </td>
                <td>
                    {{ $movimiento->totcuota }}
                </td>
                <td>
                    {{ $movimiento->imptotal }}
                </td>
                <td>
                    {{ $movimiento->impcuota }}
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-primary">Editar</a>
                  <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                </td>
                
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>


@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $('#movimientos').DataTable();
    </script>
@endsection