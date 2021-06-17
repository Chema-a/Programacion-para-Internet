<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maestros</title>
</head>
<body>
    <a href="{{ route('teacher.index') }}">Ver maestris</a>
    <h1>Creacion maestros</h1>

    @if(isset($teacher))
        <form action="{{ route('teacher.update', $teacher) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('teacher.store') }}" method="POST">
    @endif  

        @csrf
        <label for="name_teacher">Nombre</label>
        <input type="text" name="name_teacher" id="name_teacher" value="{{ $teacher->name_teacher ?? ''  }}">
        <br>
        <label for="last_name_teacher">Apellidos</label>
        <input type="text" name="last_name_teacher" id="last_name_teacher" value="{{ $teacher->last_name_teacher ?? '' }}">
        <br>
        <label for="email">Correo Electronico </label>
        <input type="text" name="email" id="email" value="{{ $teacher->email ?? ''}}">
        <br>
        <label for="city">Ciudad</label>
        <input type="text" name="city" id="city" value="{{ $teacher->city ?? '' }}">
        <br>

        <input type="submit" value="Aceptar">
        
    </form>
</body>
</html>