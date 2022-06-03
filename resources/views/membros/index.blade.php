@extends('layouts.app')

@section('content')
<div class="main">
    <div class="row px-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> Lista de Membros</div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data de Nacimento</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($membros as $membro)
                        <tr>
                            <td> {{$membro->nome}} </td>
                            <td> {{$membro->cpf}} </td>
                            <td> {{$membro->nascimento}} </td>
                            <td> 
                                <div class="d-flex align-items-center justify-content-center">
                                    <a  class=" " href="/membros/{{$membro->id}}/edit">
                                        <i class="fas fa-edit "> </i>                                  
                                    </a>                                   
                                    <form action="/membros/{{$membro->id}}" method="post">
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
