@extends('products.layout')

@section('content')

<div class="container mt-4">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded shadow-sm">
                <h2 class="text-primary mb-0">Laravel 8 CRUD de Estoque</h2>
                <a class="btn btn-success btn-lg" href="{{ route('products.create') }}">
                    <i class="fas fa-plus-circle"></i> Novo Produto
                </a>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Products Table -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Lista de Produtos</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Detalhes</th>
                        <th width="280px" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td class="text-center">
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">
                                    <i class="fas fa-eye"></i> Show
                                </a>
                                <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>

@endsection
