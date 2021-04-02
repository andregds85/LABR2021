@extends('layouts2.app')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div><td>Macro:</td><td> {{Auth::user()->macro}}</td> </div>
    <div><td>Hospital:</td><td> {{ Auth::user()->categorias_id}}</td> </div>
    <?php $idhsop=Auth::user()->categorias_id; ?>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Setores</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('setores.create') }}"> Novo Setor</a>
            </div>
        </div>
    </div>



<?php
use App\Models\Setores;
$tabela = setores::all();
$itensP = setores::where('idHospital',$idhsop)->get();

?>


    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Setor</th>
            <th>ID do Hospital</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach($itensP as $setores)
	    <tr>
            <td>{{ $setores->id }}</td>
            <td>{{ $setores->nome }}</td>
            <td>{{ $setores->idHospital }}</td>

            <td>
                <form action="{{ route('setores.destroy',$setores->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('setores.show',$setores->id }}">Mostrar</a>


                </form>
	        </td>
        </tr>
        @endforeach
    </table>







<p class="text-center text-primary"><small>Hospital</small></p>

@endsection
