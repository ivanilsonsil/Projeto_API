@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="col-md-8 mx-auto dashboard-container">
    <h1>Meus imóveis</h1>



    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrção</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imoveis as $imovel)
            <tr>
                <td scope="row">{{ $loop->index + 1 }}</td>
                <td><a href="/imovel/{{ $imovel['id'] ?? '' }}">
                        {{ $imovel["titulo"] ?? "" }}
                </td>
                <td>{{ $imovel["descricao"] ?? "" }}</td>
                <td>{{ $imovel["price"] ?? "" }}</td>
                <td>
                    <a href="/editar/{{ $imovel['id'] ?? '' }}" class="btn btn-outline-info btn-sm edit-btn">
                        
                        <i class="fa-solid fa-pen-to-square"></i>
                        EDITAR
                    </a>
                    <form action="/apagar/{{ $imovel['id'] ?? '' }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm delete-btn">
                            <i class="fa-regular fa-trash-can"></i>
                            DELETAR
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    

</div>
@endsection