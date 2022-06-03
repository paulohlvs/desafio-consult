<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\Contatos;
use App\Http\Requests\ContatosRequest;

class ContatosController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $contatos = Contatos::where('user_id', $user->id)->get();
        
        return view('contatos.index', compact('contatos'));
    }

 
    public function create()
    {
        $user = auth()->user();       
        $membros = Membros::where('user_id', $user->id)->get();
        $method = "POST"; 
      
        return view('contatos.form', compact('membros','method'));
    }

  
    public function store(ContatosRequest $request)
    {
        $user = auth()->user();      
        $data = $request->validated();  
        $data['user_id'] = $user->id; 
           
        Contatos::create($data);

        return redirect()->route('contatos.index')
            ->with('success', 'Contato cadastrado com sucesso.');
    }
    
    public function edit(Contatos $contato)
    {
        $user = auth()->user();
        $membros = Membros::where('user_id', $user->id)->get();
        $method = "PUT";

        return view('contatos.form', compact('contato', 'membros', 'method'));
    }

    
    public function update(ContatosRequest $request, Contatos $contato)
    {
        $data = $request->validated();   
        $contato->update($data);
        
        return redirect()->route('contatos.index')
            ->with('success', 'Contato atualizado com sucesso');
    }

   
    public function destroy(Contatos $contato)
    {
        $contato->delete();

        return redirect()->route('contatos.index')
            ->with('success', 'Contato excluido com sucesso');
    }
}
