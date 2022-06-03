@extends('layouts.app')

@section('content')
<div class="main">
    <div class="row px-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Lista de Endereços</div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Membro</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Tipo Endereço</th>
                            <th scope="col">Logradouro</th>
                            <th scope="col">Número</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enderecos as $endereco)
                            <tr>
                                <td> {{$endereco->membro->nome}} </td>
                                <td> {{$endereco->cep}} </td>
                                <td> {{$endereco->tipo_endereco}} </td>
                                <td> {{$endereco->logradouro}} </td>
                                <td> {{$endereco->numero}} </td>
                                <td> {{$endereco->complemento}} </td>
                                <td> {{$endereco->bairro}} </td>
                                <td> {{$endereco->estado}} </td>
                                <td> {{$endereco->cidade}} </td>
                                <td >
                                     <div class="d-flex align-items-center justify-content-center">
                                        <a  class=" " href="/enderecos/{{$endereco->id}}/edit">
                                            <i class="fas fa-edit "> </i>                                  
                                        </a>                                      
                                        <form action="/enderecos/{{$endereco->id}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn" type="submit" title="delete" >
                                                <i class="fas fa-trash text-danger"> </i>  
                                            </button>
                                        </form>  
                                    </div>                     
                                </td>
                            </tr>
                        @endforeach      
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection
