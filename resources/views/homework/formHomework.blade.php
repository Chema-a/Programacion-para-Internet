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
    <p>{{ $subject->id }}</p>
    <form action="{{ route('homework.store')}}" method="POST">
            @csrf           
            <label for="name">Nombre</label>
            <input type="text" name="name">
            <br>
            <label for="description">Descripcion:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <label for="end_date">Fecha limite:</label>
            <input type="date" name="end_date" >
            <br>
            <label for="subject_id">Nombre de clase</label>
            <input type="hidden"s name="subject_id" value="{{ $subject->id }}">

            <input type="text" name="" value="{{ $subject->name ?? ''  }} ">
            
            <br>
            <input type="submit" value="Aceptar">
            
    </form>

</body>
</html>