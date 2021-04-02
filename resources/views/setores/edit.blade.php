@extends('layouts2.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Setor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('setores.index') }}"> Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Teve algum problema com sua entrada <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('setores.update',$setores->id) }}" method="POST">



         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nome:</strong>
		            <input type="text" name="nome" value="{{ $setores->nome }}" class="form-control" placeholder="Nome">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
		            <strong>Cnes:</strong>
		            <input type="text" name="cnes" value="{{ $setores->cnes }}" class="form-control" placeholder="Cnes">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Atualizar</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Setores</small></p>
@endsection
