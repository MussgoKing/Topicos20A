@extends('users.layout')
@section('content')
@section('header', 'Lista Clientes')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('cliente.create') }}" class="btn btn-info" >Añadir Cliente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Paterno</th>
               <th>Materno</th>
               <th>Sexo</th>
               <th>Telefono</th>
               <th>Dirección</th>
               <th>Estado Civil</th>
               <th>Institución</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($clientes->count())  
              @foreach($clientes as $cliente)  
              <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->ap}}</td>
                <td>{{$cliente->am}}</td>
                <td>{{$cliente->sexo}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->ecivil}}</td>
                <td>{{$cliente->institucion}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ClientesController@edit', $cliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ClientesController@destroy', $cliente->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
 
@endsection