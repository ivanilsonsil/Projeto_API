@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="row">
    <div class="col-md-3 mx-auto" id="product-create-container">
        <h1 class="mb-3">Login</h1>
        <form action="/imovel" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group mb-5">
                <label for="password" class="form-label">Senha:</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection