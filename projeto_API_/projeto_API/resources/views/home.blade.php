@extends('layouts.main')

@section('title', 'Página inicial')

@section('content')
<div class="container" id="immobile-container">
    <div class="row">

        <h1>Imóveis</h1>
        <p class="subtitle">Veja todos os imóveis</p>

        @foreach($imoveis as $imovel)
        <div class="col-md-3">
            <div class="card">
                <img src="" class="img-fluid" alt="{{ $imovel['titulo'] ?? '' }}">

                <div class="card-body">

                    <h1 class="card-title">{{ $imovel["titulo"] ?? "" }}</h1>
                    <p class="card-description">{{ $imovel["descricao"] ?? "" }}</p>
                    <p class="card-content"><strong>Conteúdo: </strong>{{ $imovel["conteudo"] ?? "" }}</p>
                    <p class="card-price"><strong>Preço: R$</strong>{{ $imovel["price"] ?? "" }}</p>

                    <a href="/imovel/{{ $imovel['id'] ?? '' }}" class="btn btn-primary">
                        Mais detalhes
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection