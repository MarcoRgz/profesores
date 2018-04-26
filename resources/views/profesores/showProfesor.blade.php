@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                 @if($profesor)
                  <table class="table table-striped">
                 <thead>
                     <th>id</th>
                     <th>nombre</th>
                     <th>Apellido Paterno</th>
                     <th>Apellido Materno</th>
                     <th>Centro</th>
                     <th>Correo</th>
                     <th>Cargo</th>
                     <th>Departamento</th>
                     <th>Celular</th>
                     <th>Telefono - Ext</th>
                     <th>Fecha creacion</th>
                   </thead>

                   <tr>
                     @foreach($profesor as $row)
                       <td>{{ $row->id}}</td></a>
                       <td><a href="{{ route('skills', $row->id) }}">{{ $row->nombre}}</td></a>
                        <td>{{ $row->apellidoP}}</td>
                        <td>{{ $row->apellidoM}}</td>
                        <td>{{ $row->centro}}</td>
                        <td>{{ $row->correo}}</td>
                        <td>{{ $row->cargo}}</td>
                        <td>{{ $row->departamento}}</td>
                        <td>{{ $row->celular}}</td>
                        <td>{{ $row->telExt}}</td>
                        <td>{{ $row->created_at}}</td>
                     </tr>
                     @endforeach
                 </table>
                 @endif
                </div>
            </div>
            <a href="{{ route('profesor.create') }}" class="btn btn-success"> Crear mi ficha </a>

        </div>
    </div>
</div>
@endsection
