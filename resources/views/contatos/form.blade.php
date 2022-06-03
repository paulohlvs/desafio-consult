@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cadastrar Contato</div>

       
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> 
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

        
                @if ( $method == 'POST')
                    <form class="p-4 needs-validation" action="/contatos" method="POST" novalidate>
                    @csrf
                        <div class="mb-3">          
                            <label class="form-label" for="membro_id">Membro</label>
                            <select class=" form-select " name="membro_id" id="membro_id" >
                                @foreach ($membros as $membro)
                                    <option value="{{$membro->id}}">{{$membro->nome}}</option>                            
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">   
                            <label class="form-label" for="tipo">Tipo</label>
                            <select class=" form-select " name="tipo" id="tipo">
                                <option value="residencial">Residencial</option>
                                <option value="celular">Celular</option>
                                <option value="whatsApp">WhatsApp</option>                          
                            </select>                  
                        </div>
                        <div class="mb-3">   
                            <label class="form-label" for="ddd">DDD</label>
                            <input class="form-control" type="text" name="ddd"  id="ddd" placeholder="0xx"  maxlength="3" required>
                        </div>
                        <div class="mb-3">   
                            <label class="form-label" for="telefone">Telefone</label>
                            <input class="form-control" type="text" name="telefone"  id="telefone" placeholder="90907070"  maxlength="8" required>
                        </div>
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </form>
                @endif
                @if ( $method == 'PUT')
                    <form  class="p-4 needs-validation" action="/contatos/{{$contato->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT', $contato )
                        <div class="mb-3">    
                            <label class="form-label" for="membro_id">Membro</label>
                            <select class=" form-select  " name="membro_id" id="membro_id" >
                                @foreach ($membros as $membro)
                                    <option value="{{$membro->id}}">{{$membro->nome}}</option>                            
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tipo">Tipo</label>
                            <select  class="  form-select  " name="tipo" id="tipo">
                                <option value="residencial">Residencial</option>
                                <option value="celular">Celular</option>
                                <option value="whatsApp">WhatsApp</option>                          
                            </select>                
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ddd">DDD</label>
                            <input class="form-control" type="text" name="ddd" value="{{$contato->ddd}}" id="ddd" placeholder="0xx"  maxlength="3" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="telefone">Telefone</label>
                            <input class="form-control" type="text" name="telefone" value="{{$contato->telefone}}" id="telefone" placeholder="90907070"  maxlength="8" required>
                        </div>
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
