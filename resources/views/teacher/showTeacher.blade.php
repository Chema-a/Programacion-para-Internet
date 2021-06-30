@extends('layouts.windmill')
@section('content')
    <br>
    <div>
    <a class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="{{ route('teacher.index') }}">Ver maestros</a>
</div>
    <br>

    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $teacher->user->name }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            Correo: {{ $teacher->user->email }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Ciudad:{{ $teacher->city }}
        </p>
        <br>
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            Clases
        </h4>
        @foreach ($teacher->subjects as $subject)
            <p class="text-purple-600">
                <a href="{{ route('subject.show', $subject) }}">{{ $subject->name }}</a>
            </p>

        @endforeach

    </div>
    <br>
    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" value="Eliminar maestro">

    </form>
@endsection