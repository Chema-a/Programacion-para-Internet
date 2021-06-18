<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
</head>
<body>
    <a href="{{ route('registrator.create') }}">Enviar codigo de invitacion</a>
    <h1>Listado de codigos</h1>
    <table>
        <thead>
            <tr>
        <th>Codigo</th>
        <th>Correo</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($registrators as $registrator)
            <tr>
                <td>{{ $registrator->code }}</td>
                <td>{{ $registrator->email}}</td>
                <td>
                    <a href="{{ route('registrator.edit', $registrator) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>