@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Adicionar Membro</div>

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
                    <form class="p-4 needs-validation" action="/membros" method="POST" novalidate>
                    @csrf
                        <div class="mb-3">
                            <label class="form-label"  for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Informe seu nome completo" maxlength="80"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"  for="cpf">CPF</label>
                            <input class="form-control"  type="text" name="cpf"  id="cpf" placeholder="00011155566" maxlength="11"   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"  for="nascimento">Data de Nascimento</label>
                            <input class="form-control" type="date" name="nascimento"  id="nascimento"  required>
                        </div>                  
                        <button class="btn btn-primary " type="submit" >Cadastrar</button>
                    </form>
                @endif

                @if ( $method == 'PUT')
                    <form class=" p-4 needs-validation"action="/membros/{{$membro->id}}" method="POST" novalidate>
                        @csrf
                        @method('PUT', $membro )
                            <div class="mb-3">
                                <label class="form-label" for="nome">Nome</label>
                                <input class="form-control" type="text" name="nome" value="{{ $membro->nome }}" id="nome" placeholder="Informe seu nome completo" maxlength="80" required >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="cpf">CPF</label>
                                <input class="form-control" type="text" name="cpf" value="{{ $membro->cpf }}" id="cpf" placeholder="00011155566" maxlength="11" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="nascimento">Data de Nascimento</label>
                                <input class="form-control" type="date" name="nascimento" value="{{ $membro->nascimento }}" id="nascimento" required >
                            </div>
                            <button class=" btn btn-primary " type="submit">Atualizar</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
