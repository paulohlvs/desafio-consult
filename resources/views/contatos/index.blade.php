@extends('layouts.app')

@section('content')
<div class="main">
    <div class="row px-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Lista de Contatos</div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Membro</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">DDD</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contatos as $contato)
                            <tr>
                                <td> {{$contato->membro->nome}} </td>
                                <td> {{$contato->tipo}} </td>
                                <td> {{$contato->ddd}} </td>
                                <td> {{$contato->telefone}} </td>
                                <td> 
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a  class=" " href="/contatos/{{$contato->id}}/edit">
                                            <i class="fas fa-edit "> </i>                                  
                                        </a>                                      
                                        <form action="/contatos/{{$contato->id}}" method="post">
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
