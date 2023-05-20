<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Cadastramento de produto</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <form action="{{ route('produto.store') }}" method="POST">
        @csrf
            <label for="">Nome</label>
            <input type="text" name="nome"> <br>

            <label for="">Custo</label>
            <input type="text" name="custo"> <br>

            <label for="">Preço</label>
            <input type="text" name="preco"> <br>

            <label for="">Quantidade</label>
            <input type="text" name="qtde"> <br>

            <button type="submit">Salvar</button>
        </form>
    </body>
</html>