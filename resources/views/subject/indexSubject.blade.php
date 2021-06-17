<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
</head>
<body>
    <h1>Listado de materias</h1>
    <a href="{{ route('subject.create') }}">Crear materia</a>
    <table>
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Teacher ID</th>
        <th>Available Places</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
            <tr>
                <td>
                    <a href="{{ route('subject.show', $subject) }}">{{ $subject->name }}</a>
                </td>
                <td>{{ $subject->teacher_email }}</td>
                <td>{{ $subject->available_places}}</td>
                <td>
                    <a href="{{ route('subject.edit', $subject) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>