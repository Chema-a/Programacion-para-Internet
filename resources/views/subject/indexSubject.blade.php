@extends('layouts.windmill')
@section('content')

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Listado de materias
    </h2>
    <div>
        @if(auth()->user()->type == 3)
        <a href="{{ route('subject.create') }}"
            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear materia
        </a>
        @endif
        @if(auth()->user()->type == 1)
        <a href="{{ route('student.viewSubject') }}"
            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Agregar materias
        </a>
        @endif
    </div>
    <br>


    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Maestro</th>
                    <th class="px-4 py-3">Lugares</th>
                    @if (auth()->user()->type == 3)
                    <th class="px-4 py-3">Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

           
                @foreach ($subjects as $subject)
                    <tr class="text-gray-700 dark:text-gray-400">

                        <td class="px-4 py-3">
                            <a href="{{ route('subject.show', $subject) }}" class="text-purple-600">{{ $subject->name }}</a>
                        </td>

                        <td class="px-4 py-3 text-sm">
                            @foreach ($subject->teacher as $teacher)
                                {{ $teacher->user->name }}
                            @endforeach
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $subject->available_places }}
                        </td>
                        <td class="px-4 py-3">
                            @if (isset($student))
                            <form action="{{ route('subject.addStudent', $student) }}" method="POST">
                                @csrf
                            <input type="hidden" name="subject" id="subject" value="{{ $subject->id }}">
                            <input type="submit" value="Agregar"  class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            </form>
                            @endif
                            @if (auth()->user()->type == 3)
                            <div class="flex items-center space-x-4 text-sm">
                              <a href="{{ route('subject.edit', $subject) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                            </a>
                            @endif

                            </div>
                          </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
