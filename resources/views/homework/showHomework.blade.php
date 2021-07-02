@extends('layouts.windmill')
@section('content')
    <br>
    <div>
        <a class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            href="{{ route('subject.show', $homework->subject) }}">Ver materia</a>
    </div>
    <br>
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $homework->name }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            Descripcion: {{ $homework->description }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Fecha limite: {{ $homework->end_date }}
        </p>
        <p class="text-gray-600 dark:text-gray-400">
            Fecha de creacion: {{ $homework->created_at }}
        </p>
    </div>
    @if (auth()->user()->type == 1)
        <div>
            <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data"
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                @csrf
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Selecciona el archivo a cargar </span>
                    <br>
                    <input type="file" name="archivo" id="archivo">
                    <input type="hidden" name="homework_id" id="homework_id" value="{{ $homework->id }}">
                    <div>
                        <br>

                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"">
                      <span>Cargar</span>
                  </button>
              </div>
              </label>
              <br>
          </form>
        </div>
        <div>
            <br>
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Entregas hechas
            </h4>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @foreach ($archivos as $archivo)
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $archivo->name }}
                    </p>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <a href="{{ route('archivo.show', $archivo) }}"
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Edit">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </a>

                        </div>
                    </td>
                @endforeach
            </div>
        </div>
    @endif
         @if (auth()->user()->type == 2)


                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">Nombre de alumno</th>
                                            <th class="px-4 py-3">Nombre del archivo</th>
                                            <th class="px-4 py-3">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        @foreach ($homework->archivos as $archivo)
                                            <tr class="text-gray-700 dark:text-gray-400">

                                                <td class="px-4 py-3 text-sm">
                                                    {{ $archivo->student->user['name'] }}
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    {{ $archivo->name }}
                                                </td>

                                                <td class="px-4 py-3">
                                                    <div class="flex items-center space-x-4 text-sm">
                                                        <a href="{{ route('archivo.show', $archivo) }}"
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                            aria-label="Edit">
              
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>         </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
    @endif

@endsection
