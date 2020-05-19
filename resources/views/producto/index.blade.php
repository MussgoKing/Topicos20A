@extends('users.layout')
@section('content')
@section('header', 'Lista de Productos')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('producto.create') }}" class="btn btn-info" >Añadir Producto</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Descripción</th>
               <th>Marca</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($productos->count())  
              @foreach($productos as $producto)  
              <tr>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->marca}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                  <td><a class="btn btn-primary btn-xs" href="{{action('ProductController@edit', $producto->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td>
                    <form action="{{action('ProductController@destroy', $producto->id)}}" method="post">
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