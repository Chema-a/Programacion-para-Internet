@extends('layouts.windmill')
@section('content')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Creacion de tarea
</h2>

    @if (isset($homework))
        <form action="{{ route('homework.update', $homework) }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @method('PATCH')
        @else
            <form action="{{ route('homework.store') }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <p>hola</p>
    @endif
    @csrf
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Nombre</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="name" value="{{ old('name') ?? $homework->name ?? '' }}">
            @error('name')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>
    <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Descripcion</span>
        <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
        name="description" id="description" cols="3" rows="5">{{  old('description') ?? $homework->description ?? '' }}</textarea>
        @error('description')
        <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
        </span>
            
        @enderror
      </label>

    <br>
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Fecha limite:</span>
        <input
            class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="date" name="end_date" value="{{ old('end_date') ?? $homework->end_date ?? '' }}">
            @error('end_date')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>

    <label class="block mt-4 text-sm" for="end_date">Nombre de clase</label>
    
    @if (isset($homework))
        <input type="hidden" s name="subject_id" value="{{ $homework->subject->id }}">
        <input type="text" name="" value="{{ $homework->subject->name ?? '' }} " readonly>
    @else
        <input type="hidden" s name="subject_id" value="{{ $subject->id }}">
        <input type="text" name="" value="{{ $subject->name ?? '' }} " readonly>
    @endif
    <br>

    <input type="submit" value="Aceptar"  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        
    </form>
    @if (isset($homework))
    <form action="{{ route('homework.destroy', $homework) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar tarea"  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    </form>
    @endif
    
@endsection