<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrator Code</title>
</head>

<body>

    <h1>Code Generator</h1>
    <a href="{{ route('registrator.index') }}">Ver codigos</a>
    @if (isset($registrator))
        <form action="{{ route('registrator.update', $registrator) }}" method="POST">
            @method('PATCH')
        @else
            <form action="{{ route('registrator.store') }}" method="POST">
    @endif
    @csrf
    <label for="email">Correo Electronico </label>
    <input type="text" name="email" id="email" value="{{ $registrator->email ?? '' }}">
    <br>
    <label for="code"></label>
    <input type="text" name="code" id="code" value="{{ $registrator->code ?? '' }}" readonly>
    <input type="button" onclick="makeid()" value="Generate New Code">
    <br>
    @if (isset($registrator))
        <input type="submit" value="Reenviar codigo">
        <form action="{{ route('registrator.destroy', $registrator) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar codigo">

        </form>
    @else
        <input type="submit" value="Guardar cambios y enviar">
    @endif
    </form>

    <script type="text/javascript">
        function makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 5; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            document.getElementById("code").value = text;

        }

    </script>
</body>

</html>
