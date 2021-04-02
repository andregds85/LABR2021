@extends('layouts2.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Novo Setor </h2>
                <div><td>Hospital:</td><td> {{Auth::user()->categorias_id}}</td> </div>

            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('setores.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <?php $idHospital=Auth::user()->categorias_id; ?>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum erro na sua entrada<br><br>
            <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                     }  @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('setores.store') }}" method="POST">
    	@csrf






          <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nome do Setor:</strong>
		            <input type="text" name="nome" class="form-control" placeholder="Entre com o Nome do Setor">
           </div>


           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <label for="exampleInputCategoria">ID do Hospital</label>
                        <select class="form-control" name="idHospital" id="categoria">

                        <option value=<?php echo $idHospital; ?> ><?php echo $idHospital; ?> </option>
                        </select>
                    </div>
                </div>
        </div>









		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
		    </div>
		</div>
    </form>
@endsection


