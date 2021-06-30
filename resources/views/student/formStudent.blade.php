@extends('layouts.windmill')
@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Registro de estudiantes
    </h2>


    @if (isset($student))
        <form action="{{ route('student.update', $student) }}" method="POST"
            class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @method('PATCH')
        @else
            <form action="{{ route('student.store') }}" method="POST"
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @endif

    @csrf
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Fecha de nacimiento: </span>
        <input
            class=" mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="date" name="birthday" id="birthday" value="{{ old('birthday') ?? $student->birthday ?? '' }}">
            @error('birthday')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Condición: </span>
        <input
            class=" mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="string" name="condition" id="condition" value="{{ old('condition') ?? $subject->condition ?? '' }}">
            @error('condition')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>

    <br>

    <input type="submit" value="Aceptar"
        class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    </form>

@endsection
