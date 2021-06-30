@extends('layouts.windmill')
@section('content')
    

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Generador de codigo de invitación
</h2>
<div>
    <a href="{{ route('registrator.index') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Ver codigos</a>
</div>
<br>

    @if (isset($registrator))
        <form action="{{ route('registrator.update', $registrator) }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @method('PATCH')
        @else
            <form action="{{ route('registrator.store') }}" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    @endif
    @csrf
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Correo electronico</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="email" id="email" value="{{ old('email') ?? $registrator->email ?? '' }}">
            @error('email')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
                
            @enderror
    </label>
    <br>
    <label class="block text-sm" for="code">
        <span class="text-gray-700 dark:text-gray-400">Codigo</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="code" id="code" value="{{ old('code') ?? $registrator->code ?? '' }}" readonly>
            <br>
            <input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="button" onclick="makeid()" value="Generate New Code">
            @error('code')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
            @enderror
    </label>
    <br>
    @if (isset($registrator))
        <input type="submit" value="Reenviar codigo" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    @else
        <input type="submit" value="Guardar cambios y enviar" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    @endif
    </form>
    @if (isset($registrator))
    <br>
    <form action="{{ route('registrator.destroy', $registrator) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar codigo" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    </form>   
    @endif

    <script type="text/javascript">
        function makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 5; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            document.getElementById("code").value = text;

        }
    </script>
@endsection
