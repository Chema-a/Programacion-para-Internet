<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
</head>

<body>
    <h1>Creacion de tarea</h1>

    @if (isset($homework))
        <form action="{{ route('homework.update', $homework) }}" method="POST">
            @method('PATCH')
        @else
            <form action="{{ route('homework.store') }}" method="POST">
    @endif
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" value="{{ $homework->name ?? '' }}">
    <br>
    <label for="description">Descripcion:</label>
    <textarea name="description" id="description" cols="30" rows="10">{{ $homework->description ?? '' }}</textarea>
    <br>
    <label for="end_date">Fecha limite:</label>
    <input type="date" name="end_date" value="{{ $homework->end_date ?? '' }}">
    <br>
    <label for="subject_id">Nombre de clase</label>
    <br>
    
    @if (isset($homework))
        <input type="hidden" s name="subject_id" value="{{ $homework->subject->id }}">
        <input type="text" name="" value="{{ $homework->subject->name ?? '' }} " readonly>
        <br>

        

    @else
        <input type="hidden" s name="subject_id" value="{{ $subject->id }}">
        <input type="text" name="" value="{{ $subject->name ?? '' }} " readonly>
    @endif
    <input type="submit" value="Aceptar">
        
    </form>
    @if (isset($homework))
    <form action="{{ route('homework.destroy', $homework) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar tarea">
    </form>
    @endif

</body>

</html>
