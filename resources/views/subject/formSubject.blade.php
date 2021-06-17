<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
</head>
<body>
    <a href="{{ route('teacher.index') }}">Ver materias</a>
    <h1>Creacion de materias</h1>

    @if(isset($subject))
        <form action="{{ route('subject.update', $subject) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('subject.store') }}" method="POST">
    @endif  

        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="namer" value="{{ $subject->name ?? ''  }}">
        <br>

        <label for="available_places"> Lugares Disponibles </label>
        <input type="number" name="available_places" id="available_places" value="{{ $subject->available_places ?? ''}}">
        <br>
        
        <input type="submit" value="Aceptar">
        
    </form>
</body>
</html>