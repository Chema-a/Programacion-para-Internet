@extends('layouts.windmill')
@section('content')
    
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Registro de maestro
</h2>

    @if(isset($teacher))
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @method('PATCH')
    @else
        <form action="{{ route('teacher.store') }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @endif  

        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Ciudad: </span>
            <input
                class=" mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="city" id="city" value="{{ $teacher->city ?? '' }}">
        </label>
        <br>

        <input  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" value="Aceptar">
        
    </form>

@endsection