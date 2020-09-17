@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de categorias</h2>
            </div>
            <div class="pull-right">
                @can('categoria-create')
                    <a class="btn btn-success" href="{{ route('crearCategoria') }}"> Nueva Categoria</a>
                @endcan
            </div>
        </div>
    </div>

    <br>

    <table class="table table-bordered">
        <tr>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
        @foreach ($sqllistaCategoria as $item)
	    <tr>
	        <td>{{ $item->idCategoria}}</td>
	        <td>{{ $item->nombreCategoria }}</td>
            <td>{{ $item->descripcionCategoria }}</td>
            <td>
                @can('categoria-list')
                    <a href="{{route('mostrarCategoria', $item->idCategoria)}}" class="btn btn-info">
                        Informacion
                    </a>
                @endcan

                @can('categoria-edit')
                    <a href="{{route('editarCategoria', $item->idCategoria)}}" class="btn btn-warning">
                        Modificacion
                    </a>
                @endcan
            </td>
	    </tr>
	    @endforeach
    </table>
    

@endsection