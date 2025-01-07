@extends('layout')

@section('content')
<div class="container">
    <div class="form-signin">
        <h1 class="texto mb-4">Faça a Simulação</h1>
        <form method="POST" action="{{ route('calcular') }}">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" required>
                @error('nome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="valor_emprestimo" class="form-label">Valor do Empréstimo</label>
                <input type="number" step="0.01" class="form-control @error('valor_emprestimo') is-invalid @enderror" id="valor_emprestimo" name="valor_emprestimo" required>
                @error('valor_emprestimo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="taxa_juros" class="form-label">Taxa de Juros (%)</label>
                <input type="number" step="0.01" class="form-control @error('taxa_juros') is-invalid @enderror" id="taxa_juros" name="taxa_juros" required>
                @error('taxa_juros')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quantidade_parcelas" class="form-label">Quantidade de Parcelas</label>
                <input type="number" class="form-control @error('quantidade_parcelas') is-invalid @enderror" id="quantidade_parcelas" name="quantidade_parcelas" required>
                @error('quantidade_parcelas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Calcular Empréstimo</button>
        </form>
    </div>
</div>
@endsection
