@extends('products.layout')

@section('content')
<div class="container mt-5">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded shadow-sm">
                <h2 class="text-primary mb-0">Adicionar Novo Produto</h2>
                <a class="btn btn-secondary btn-lg" href="{{ route('products.index') }}">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>

    <!-- Error Messages -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops!</strong> Houve alguns problemas com os dados fornecidos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Preencha os detalhes do produto</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Nome:</strong></label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome do Produto">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label"><strong>Detalhes:</strong></label>
                    <textarea class="form-control" id="detail" name="detail" rows="4" placeholder="Descrição do Produto..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="fas fa-check-circle"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
