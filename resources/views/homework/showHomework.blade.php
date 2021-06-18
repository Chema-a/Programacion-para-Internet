<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
</head>
<body>
    <a href="{{ route('subject.show',$homework->subject) }}">Ver materia</a>
    <table>
        <thead>
            <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha limite</th>
        <th>Clase</th>
        <th>Creado</th>
    </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $homework->name}}</td>
                <td>
                   {{ $homework->description }}
                    
                </td>
                <td>{{ $homework->end_date }}</td>
                @foreach ($homework->subject->teacher as $teacher)
                <td>{{ $teacher->name_teacher }}</td>
                    
                @endforeach
                <td>{{ $homework->created_at}}</td>
            </tr>
    </tbody>
    </table>

</body>
</html>