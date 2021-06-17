<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
    
</head>
<body>
    <a href="{{ route('teacher.index') }}">Ver maestros</a>
    <table>
        <thead>
            <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha limite</th>
    </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $teacher->name_teacher }}</td>
                <td>
                   {{ $teacher->last_name_teacher }}
                    
                </td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->city }}</td>
            </tr>
    </tbody>
    </table>
    <form action="{{ route('teacher.destroy', $teacher) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar programa">

    </form>
</body>
</html>