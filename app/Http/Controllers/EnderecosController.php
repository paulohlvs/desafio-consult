<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\Enderecos;
use App\Http\Requests\EnderecosRequest;

class EnderecosController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $enderecos = Enderecos::where('user_id', $user->id)->get();
       
        return view('enderecos.index', compact('enderecos'));
    }
 
    public function create()
    {
        $user = auth()->user();       
        $membros = Membros::where('user_id', $user->id)->get();
        $method = "POST"; 
      
        return view('enderecos.form', compact('membros','method'));
    }

    public function store(EnderecosRequest $request)
    {
        $user = auth()->user();      
        $data = $request->validated();  
        $data['user_id'] = $user->id; 

        Enderecos::create($data);

        return redirect()->route('enderecos.index')
            ->with('success', 'Endereço cadastrado com sucesso.');
    }
    
    public function edit(Enderecos $endereco)
    {
        $user = auth()->user();
        $membros = Membros::where('user_id', $user->id)->get();
        $method = "PUT";

        return view('enderecos.form', compact('endereco', 'membros', 'method'));
    }
    
    public function update(EnderecosRequest $request, Enderecos $endereco)
    {
        $data = $request->validated();   
        $endereco->update($data);
        
        return redirect()->route('enderecos.index')
            ->with('success', 'Contato atualizado com sucesso');
    }

    public function destroy(Enderecos $endereco)
    {
        $endereco->delete();

        return redirect()->route('enderecos.index')
            ->with('success', 'Contato excluido com sucesso');
    }
}
