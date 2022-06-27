@extends('layouts.main')

@section('title', 'Criar Imovel')

@section('content')
<div class="container">

    @foreach($imoveis as $imovel)
    <div class="row">
        <div id="image-container" class="offset-md-1 col-md-4">
            <img src="" class="img-fluid" alt="{{ $imovel['titulo'] ?? '' }}">
        </div>

        <div id="info-container" class="col-md-4">
            <h1>{{ $imovel["titulo"] ?? "" }}</h1>

            <p class="immobile-content">
                <i class="fa-solid fa-arrow-up-9-1"></i>
                <span>Conteúdo: </span>
                {{ $imovel["conteudo"] ?? "" }}
            </p>
            <p class="immobile-price">
                <i class="fa-solid fa-sack-dollar"></i>
                <span>Preço: R$</span>
                {{ $imovel["price"] ?? "" }}
            </p>
            <p class="immobile-quantity-restroom">
                <i class="fa-solid fa-restroom"></i>
                <span>Quantidade de banheiros: </span>
                {{ $imovel["banheiro"] ?? "" }}
            </p>
            <p class="immobile-quantity-bedroom">
                <i class="fa-solid fa-bed"></i>
                <span>Quantidade de quartos: </span>
                {{ $imovel["quarto"] ?? "" }}
            </p>
            <p class="immobile-area">
                <i class="fa-solid fa-chart-area"></i>
                <span>Área da propriedade: </span>
                {{ $imovel["area_propriedade"] ?? "" }}
            </p>
            <p class="immobile-total-area">
                <i class="fa-solid fa-chart-area"></i>
                <span>Área total da propriedade: </span>
                {{ $imovel["total_area_propriedade"] ?? "" }}
            </p>

            <div class="buttons-container">
                <a href="#" class="btn btn-primary">
                    Comprar
                </a>
                <a href="#" class="btn btn-success">
                    Alugar
                </a>
            </div>

        </div>
        <div id="description-container" class="col-md-10 mx-auto">
            <h4>Descrição:</h4>
            <p class="immobile-description">
                {{ $imovel["descricao"] ?? "" }}
            </p>
        </div>
    </div>
    @endforeach

</div>
@endsection