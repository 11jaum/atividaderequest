<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Empresa</title>
</head>
<body>
    <h1>Cadastrar Empresa</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
            @error('nome')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" value="{{ old('cnpj') }}">
            @error('cnpj')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}">
            @error('telefone')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ old('endereco') }}">
            @error('endereco')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}">
            @error('cidade')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="{{ old('estado') }}" maxlength="2">
            @error('estado')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Cadastrar Empresa</button>
    </form>
</body>
</html>
