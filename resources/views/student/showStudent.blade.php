@extends('layouts.windmill')
@section('content')

    <br>
    <div>
        <a class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            href="{{ route('student.index') }}">Ver estudiantes</a>
    </div>
    <br>
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $student->user->name }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            Correo: {{ $student->user->email }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Condición: {{ $student->condition }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Fecha de nacimiento: {{ $student->birthday }}
        </p>
        <br>
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            Clases
        </h4>
        @foreach ($student->subjects as $subject)
            <p class="text-purple-600">
                <a href="{{ route('subject.show', $subject) }}">{{ $subject->name }}</a>
            </p>

        @endforeach

    </div>

    <br>
    <form action="{{ route('student.destroy', $student) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar estudiante"
            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    </form>
@endsection
