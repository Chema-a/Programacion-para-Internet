@extends('layouts.windmill')
@section('content')
<br>
    <div>
    <a class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="{{ route('subject.show',$homework->subject) }}">Ver materia</a>
    </div>
    <br>
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $homework->name}}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            Descripcion: {{ $homework->description }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Fecha limite: {{ $homework->end_date }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Fecha de creacion:  {{ $homework->created_at}}
        </p>
      </div>
    
    
    @endsection