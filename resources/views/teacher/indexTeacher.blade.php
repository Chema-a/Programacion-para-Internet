<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maestros</title>
</head>
<body>
    <h1>Listado de Maestros</h1>
    <a href="{{ route('teacher.create') }}">Crear maestro</a>
    <table>
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Ciudad</th>
        <th>Clases</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>

                    <a href="{{ route('teacher.show', $teacher) }}">{{ $teacher->name_teacher }}</a>
                </td>
                <td>{{ $teacher->last_name_teacher }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->city }}</td>
                @foreach ($teacher->subjects as $subject)
                    <td>{{ $subject->name }}</td>
                @endforeach
                <td>
                    <a href="{{ route('teacher.edit', $teacher) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>