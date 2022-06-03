<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membros;
use App\Http\Requests\MembrosRequest;

class MembrosController extends Controller
{
  
    public function index()
    {
        $user = auth()->user();
        $membros = Membros::where('user_id', $user->id)->get();

        return view('membros.index', compact('membros'));
            
    }

    
    public function create()
    {
        $method = "POST";

        return view('membros.form', compact('method'));
    }

    
    public function store(MembrosRequest $request)
    {
        $user = auth()->user();
        $data = $request->validated();   
        $data['user_id'] = $user->id;      
        
        Membros::create($data);

        return redirect()->route('membros.index')
            ->with('success', 'Membro cadastrado com sucesso.');
    }
   
    public function edit(Membros $membro)
    {
        $method = "PUT";

        return view('membros.form', compact('membro','method'));
    }
    
    public function update(MembrosRequest $request, Membros $membro)
    {
        $data = $request->validated();   
        $membro->update($data);
        
        return redirect()->route('membros.index')
            ->with('success', 'Membros updated successfully');
    }
    
    public function destroy(Membros $membro)
    {
        $membro->delete();

        return redirect()->route('membros.index')
            ->with('success', 'Membros excluido com sucesso');
    }

}

