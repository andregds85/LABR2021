<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setores;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class setoresController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:Hospital-list|Hospital-create|Hospital-edit|Hospital-delete', ['only' => ['index','show']]);
         $this->middleware('permission:Hospital-create', ['only' => ['create','store']]);
         $this->middleware('permission:Hospital-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Hospital-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
         return view('setores.index');
    }

    public function create()
        {
            return view('setores.create');
        }

        public function store(Request $request)
        {
            request()->validate([
                'nome' => 'required',
                'idHospital' => 'required',

              ]);

            Setores::create($request->all());
            return redirect()->route('setores.index')
                            ->with('Sucesso','Paciente Criado com Sucesso.');
        }

        public function show(Setores $item)
        {

            return view('setores.show',compact('setores'));

        }

         public function edit(Setores $setores)
        {

            return view('setores.edit',compact('setores'));

        }

         public function update(Request $request, Setores $setores)
        {
             request()->validate([
                'nome' => 'required',
                'idHospital' => 'required',
               ]);

            $setores->update($request->all());
            return redirect()->route('setores.index')
                            ->with('Sucesso','Setores Atualizado com Sucesso');
        }

         public function destroy(Setores $setores)
        {
            $setores->delete();
            return redirect()->route('setores.index')
                            ->with('Sucesso','Setores Deletado com Sucesso');
        }
    }
