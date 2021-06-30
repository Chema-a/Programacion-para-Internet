@extends('layouts.windmill')
@section('content')

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Formulario de materias
    </h2>
    <div>
        <a href="{{ route('subject.index') }}"
            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Ver materias
        </a>
    </div>
    <br>

    @if (isset($subject))
        <form action="{{ route('subject.update', $subject) }} " method="POST"
            class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @method('PATCH')
        @else
            <form action="{{ route('subject.store') }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @endif

    @csrf
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="name" id="name" value="{{ old('name') ?? $subject->name ?? '' }}">
            @error('name')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Lugares disponibles</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="number" name="available_places" id="available_places" value="{{ old('available_places') ?? $subject->available_places ?? '' }}">
            @error('available_places')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>
    <br>
    <input type="submit" value="Aceptar"
        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    </form>
@endsection
