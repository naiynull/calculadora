<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de Juros</title>
    @vite(['resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos Adicionais */
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            max-width: 1200px;  /* Aumentando a largura máxima do container */
            padding: 20px;
        }

        .imagem {
            text-align: center;
            margin-left: 40px;  /* Ajuste para a imagem */
            flex: 1 1 300px; /* A imagem ocupa 1/3 da largura */
        }

        .imagem img {
            max-width: 100%; /* A imagem vai se ajustar para caber na coluna */
            height: auto;
        }

        .form-signin {
            background-color: #ffffff;
            padding: 50px;  /* Aumentando o padding do formulário */
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            flex: 3 1 800px; /* Aumentando o espaço do formulário */
        }

        .texto {
            font-size: 32px;  /* Aumentando o tamanho do título */
            font-weight: bold;
            color: #007bff;
            margin-bottom: 40px;  /* Aumentando o espaçamento abaixo do título */
        }

        .form-signin .form-control {
            height: 50px;  /* Aumentando a altura dos campos */
            padding: 15px;
            font-size: 18px;  /* Aumentando o tamanho da fonte */
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 25px;  /* Aumentando o espaço entre os campos */
            transition: border-color 0.3s ease;
        }

        .form-signin .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .form-signin .invalid-feedback {
            font-size: 14px;
            color: #e74c3c;
            margin-top: 5px;
        }

        .form-signin .btn {
            width: 100%;
            padding: 18px;  /* Aumentando o tamanho do botão */
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 20px;  /* Aumentando o tamanho da fonte do botão */
            transition: background-color 0.3s ease;
        }

        .form-signin .btn:hover {
            background-color: #0056b3;
        }

        .form-signin .btn:active {
            background-color: #00408c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-signin">
            <h1 class="texto mb-4">Empréstimo</h1>
            @hasSection('content')
                @yield('content')
            @endif
        </div>

        <div class="imagem">
            <img src="{{asset('storage/image/logo.png') }}" alt="Logo" width="150" height="150">
        </div>
    </div>
</body>
</html>
