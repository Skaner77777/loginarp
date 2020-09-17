@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nueva Categoria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('listaCategoria') }}"> Regresar </a>
            </div>
        </div>
    </div>

    <br>

    <form action="{{ route('guardarCategoria') }}" method="POST">

    	@csrf

        <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nombre:</strong>
		            <input type="text" name="nombreCategoria" class="form-control" placeholder="Nombre de la categoria">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Descripción:</strong>
		            <textarea class="form-control" style="height:150px" name="descripcionCategoria" placeholder="Descripcion de la categoria"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Guardar</button>
		    </div>
		</div>

    </form>

@endsection