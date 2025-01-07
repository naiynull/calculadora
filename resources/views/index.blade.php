@extends('layout')

@section('content')
<div class="form-container">
    <form class="form-signin" action="{{ route('calcular') }}" method="POST">
        @csrf
        <div class="texto">
            <h1 class="h3 mb-3 font-weight-normal">Calcular juros ao mês</h1>
        </div>

        <!-- Campo Capital Inicial -->
        <label for="capital" class="sr-only">Capital inicial: R$</label>
        <input 
            type="number" 
            id="capital" 
            class="form-control" 
            name="capital" 
            placeholder="100.00" 
            min="10" 
            required 
            autofocus>
        
        <!-- Campo Taxa Fixa -->
        <label for="taxa" class="sr-only">Taxa fixa: %</label>
        <input 
            type="number" 
            id="taxa" 
            class="form-control" 
            name="taxa" 
            placeholder="10" 
            min="1" 
            required>
        
        <!-- Campo Período de Tempo -->
        <label for="periodo" class="sr-only">Período de tempo: (meses)</label>
        <input 
            type="number" 
            id="periodo" 
            class="form-control" 
            name="periodo" 
            placeholder="3" 
            min="1" 
            required>
        
        <!-- Botão Calcular -->
        <button 
            class="btn btn-lg btn-primary btn-block" 
            type="submit">
            Calcular
        </button>

        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</div>
@endsection
