<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
    
</head>
<body>
    <a href="{{ route('subject.index') }}">Ver materias</a>
    <table>
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Maestros en el programa</th>
        <th>Lugares Disponibles</th>

    </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $subject->name }}</td>
                <td>
                   @foreach ($subject->teacher as $teacher)
                   {{ $teacher->name_teacher }}
                       
                   @endforeach
                    
                </td>
                <td>{{ $subject->available_places }}</td>
            </tr>
    </tbody>
    </table>
    <form action=" {{ route('subject.addTeacher', $subject) }}" method="POST">
        @csrf
        <select name="teacher_id[]" id="teacher_id" multiple>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ array_search($teacher->id, $subject->teacher->pluck('id')->toArray()) !== false ? 'selected' : ''}}> {{ $teacher->name_teacher }}</option>
            @endforeach
        </select>
        <input type="submit" value="Agregar Maestro">

    </form>
    <form action="{{ route('subject.destroy', $subject) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar programa">

    </form>

    <div>
        <form action="{{ route('subject.addHomework', $subject) }} " method= POST>
            @csrf
            <input type="submit" value="Agregar tarea">
        </form>
        
        
        <h1>Tareas</h1>
        
        <table>
            <thead>
                <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Fecha limite</th>
    
        </tr>
        </thead>
        <tbody>
        
            @foreach ($homeworks as $homework)
            <tr>
                <td>
                    <a href="{{ route('homework.show',[$subject, $homework]) }}">{{ $homework->name }}</a>
                </td>
                <td>{{ $homework->description }}</td>
                <td>{{ $homework->end_date}}</td>
                <td>
                    <a href="{{ route('homework.edit', [$subject,$homework]) }}">Editar</a>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</body>
</html>