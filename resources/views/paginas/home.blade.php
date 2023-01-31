@extends('adminlte')

@section('content')
    <div class="card">
        <div class="card-header bg-gray-dark">
            <h4>Ultimos Registros Cargados</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" style="table-layout: fixed">
                <thead>
                    <tr>
                        <th>Fecha del Registro</th>
                        <th>Monto</th>
                        <th>Tipo de Registro</th>
                        <th>Detalle de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registries as $registry)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($registry->registry_date)) }}</td>
                            <td>{{ $registry->amount }}</td>
                            <td>{{ $registry->types->name }}</td>
                            <td>
                                {{ $registry->detail ?? 'No se guardaron detalles' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
