@extends('layouts.panel')

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
          <table class="table align-items-center table-flush">
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
              <tr>
                <th scope="row">
                  26/06/2023
                </th>
                <td>
                  Supermercados
                </td>
                <td>
                  C
                </td>
                <td>
                  1
                </td>
                <td>
                  12
                </td>
                <td>
                 12600,12
                </td>
                <td>
                  1050,01
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-primary">Editar</a>
                  <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                </td>
                
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>


@endsection
