@extends('products.layout')

@section('content')
<div class="container mt-5">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded shadow-sm">
                <h2 class="text-primary mb-0">Detalhes do Produto</h2>
                <a class="btn btn-secondary btn-lg" href="{{ route('products.index') }}">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>

    <!-- Product Details -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informações do Produto</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label"><strong>Nome:</strong></label>
                <p class="form-control-plaintext">{{ $product->name }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Detalhes:</strong></label>
                <p class="form-control-plaintext">{{ $product->detail }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
