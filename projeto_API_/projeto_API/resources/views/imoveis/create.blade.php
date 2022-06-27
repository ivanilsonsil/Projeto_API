@extends('layouts.main')

@section('title', 'Criar Imovel')

@section('content')
<div class="row">
    <div class="col-md-5 mx-auto" id="product-create-container">
        <h1 class="mb-3">Cadastre seu imóvel</h1>
        <form action="/imovel" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="form-group mb-3">
                <label for="conteudo" class="form-label">Conteúdo:</label>
                <input type="text" class="form-control" name="conteudo" id="conteudo">
            </div>
            <div class="form-group mb-3">
                <label for="price" class="form-label">Preço</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group mb-3">
                <label for="banheiro" class="form-label">Quantidade de banheiros:</label>
                <input type="number" class="form-control" name="banheiro" id="banheiro">
            </div>
            <div class="form-group mb-3">
                <label for="quarto" class="form-label">Quantidade de quartos:</label>
                <input type="number" class="form-control" name="quarto" id="quarto">
            </div>
            <div class="form-group mb-3">
                <label for="area_propriedade" class="form-label">Área da propriedade:</label>
                <input type="text" class="form-control" name="area_propriedade" id="area_propriedade">
            </div>
            <div class="form-group mb-3">
                <label for="total_area_propriedade" class="form-label">Total área da propriedade</label>
                <input type="text" class="form-control" name="total_area_propriedade" id="total_area_propriedade">
            </div>
            <div class="form-group mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
            </div>
            <div class="form-group mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
            </div>


            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary" value="Cadastrar imovel">
            </div>
        </form>
    </div>
</div>
@endsection