@extends('layouts.windmill')
@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Carga de archivos
    </h2>


    <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data"
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">


        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Selecciona el archivo a cargar </span>
<br>
            <input type="file" name="archivo" id="archivo">
            <div>
                <br>

            <button  type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"">
                <span>Cargar</span>
            </button>
        </div>
        </label>
        <br>


    </form>
@endsection
