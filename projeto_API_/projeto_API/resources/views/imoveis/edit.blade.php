@extends('layouts.main')

@section('title', 'Editar Imovel')

@section('content')
<div class="col-md-5 mx-auto">
    @foreach($imoveis as $imovel)

    <h1 class="mb-3">Editar imóvel</h1>
    <form action="/atualizar/{{ $imovel['id'] ?? '' }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $imovel['titulo'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $imovel['descricao'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="conteudo" class="form-label">Conteúdo:</label>
            <input type="text" class="form-control" name="conteudo" id="conteudo" value="{{ $imovel['conteudo'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $imovel['price'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="banheiro" class="form-label">Quantidade de banheiros:</label>
            <input type="text" class="form-control" name="banheiro" id="banheiro" value="{{ $imovel['banheiro'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="quarto" class="form-label">Quantidade de quartos:</label>
            <input type="text" class="form-control" name="quarto" id="quarto" value="{{ $imovel['quarto'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="area_propriedade" class="form-label">Área da propriedade:</label>
            <input type="text" class="form-control" name="area_propriedade" id="area_propriedade" value="{{ $imovel['area_propriedade'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="total_area_propriedade" class="form-label">Total área da propriedade</label>
            <input type="text" class="form-control" name="total_area_propriedade" id="total_area_propriedade" value="{{ $imovel['total_area_propriedade'] ?? '' }}">
        </div>
        <div class="form-group mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ $imovel['slug'] ?? '' }}">
        </div>

        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-primary" value="Editar imovel">
        </div>
    </form>

    @endforeach
</div>
@endsection