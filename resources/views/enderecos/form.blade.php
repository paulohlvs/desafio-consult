@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastrar Endereço</div>

       
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
                <form class="row g-3 p-4 needs-validation" action="/enderecos" method="POST" novalidate>
                @csrf
                    <div class="col-md-12">
                        <label class="form-label"  for="membro_id">Membro</label>
                        <select class="form-select" name="membro_id" id="membro_id" >
                            @foreach ($membros as $membro)
                                <option value="{{$membro->id}}">{{$membro->nome}}</option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"  for="cep">CEP</label>
                        <input class="form-control" type="text" name="cep"  id="cep" placeholder="72831030"  maxlength="8"  required>     
                    </div>
                    <div class="col-md-9">
                        <label class="form-label"  for="tipo_endereco">Tipo Endereço</label>
                        <input class="form-control" type="text" name="tipo_endereco"  id="tipo_endereco" placeholder="Residencial/Comercial" maxlength="80" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label"  for="logradouro">Logradouro</label>
                        <input class="form-control" type="text" name="logradouro"  id="logradouro" placeholder="São Paulo" maxlength="80" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"  for="numero">Numero</label>
                        <input class="form-control" type="string" name="numero"  id="numero" placeholder="99997777" maxlength="10" required>
                    </div>
                    <div class="col-md-9">
                        <label class="form-label"  for="complemento">Complemento</label>
                        <input class="form-control" type="text" name="complemento"  id="complemento" placeholder="Lote 12" maxlength="80" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"  for="bairro">Bairro</label>
                        <input class="form-control" type="text" name="bairro"  id="bairro" placeholder="América" maxlength="80" required>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label"  for="estado">Estado</label>
                        <input class="form-control" type="text" name="estado"  id="estado" placeholder="SP" maxlength="2" required >
                    </div>
                    <div class="col-md-5">
                        <label class="form-label"  for="cidade">Cidade</label>
                        <input class="form-control" type="text" name="cidade"  id="cidade" placeholder="São Paulo" maxlength="80" required >
                    </div>
                    
                    <div class="col-md-3">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </form>
                @endif
                @if ( $method == 'PUT')
                <form  class="row g-3 p-4 needs-validation" action="/enderecos/{{$endereco->id}}" method="POST" novalidate>
                @csrf
                @method('PUT', $endereco )
                    <div class="col-md-12">
                        <label class="form-label"  for="membro_id">Membro</label>
                        <select class="form-select" name="membro_id" id="membro_id" >
                            @foreach ($membros as $membro)
                                <option value="{{$membro->id}}">{{$membro->nome}}</option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        
                        <label class="form-label"  for="cep">CEP</label>
                        <input class="form-control" type="text" name="cep" value="{{$endereco->cep}}" id="cep" placeholder="72831030" maxlength="8"  required>
                    </div>
                    <div class="col-md-9">
                        <label class="form-label"  for="tipo_endereco">Tipo Endereço</label>
                        <input class="form-control" type="text" name="tipo_endereco" value="{{$endereco->tipo_endereco}}"  id="tipo_endereco" placeholder="Residencial/Comercial" maxlength="80" required>
                    </div>

                     <div class="col-md-12">                    
                        <label class="form-label"  for="logradouro">Logradouro</label>
                        <input class="form-control" type="text" name="logradouro" value="{{$endereco->logradouro}}"  id="logradouro" placeholder="São Paulo" maxlength="80" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"  for="numero">Numero</label>
                        <input class="form-control" type="text" name="numero" value="{{$endereco->numero}}"  id="numero"  placeholder="99997777" maxlength="10" required>
                    </div>
                    <div class="col-md-9">
                        <label class="form-label"  for="complemento">Complemento</label>
                        <input class="form-control" type="text" name="complemento" value="{{$endereco->complemento}}"  id="complemento" placeholder="Lote 12" maxlength="80" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"  for="bairro">Bairro</label>
                        <input class="form-control" type="text" name="bairro" value="{{$endereco->bairro}}"  id="bairro" placeholder="América" maxlength="80" required >
                    </div>
                    <div class="col-md-1">
                        <label class="form-label"  for="estado">Estado</label>
                        <input class="form-control" type="text" name="estado" value="{{$endereco->estado}}"  id="estado" placeholder="SP"  maxlength="2" required >
                    </div>
                    <div class="col-md-5">
                        <label class="form-label"  for="cidade">Cidade</label>
                        <input class="form-control" type="text" name="cidade" value="{{$endereco->cidade}}"  id="cidade" placeholder="São Paulo" maxlength="80" required >
                    </div>
                    <div class="col-md-3">                    
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
