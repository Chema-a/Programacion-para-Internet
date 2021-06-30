@extends('layouts.windmill')
@section('content')

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ $subject->name }}
    </h2>
    <br>
    <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Maestros Disponibles
        </span>
        <form action=" {{ route('subject.addTeacher', $subject) }}" method="POST">
            @csrf
            <select
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                name="teacher_id[]" id="teacher_id" multiple>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}"
                        {{ array_search($teacher->id, $subject->teacher->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                        {{ $teacher->user->name }}</option>
                @endforeach
            </select>



            <br>
            <input type="submit" value="Agregar Maestro"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple self-center">

        </form>
    </label>
    <br>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Maestros asignados
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        @foreach ($subject->teacher as $teacher)
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ $teacher->user->name }}
            </p>
        @endforeach
    </div>

    <form action="{{ route('subject.destroy', $subject) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar programa"
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

    </form>

    <div>
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tareas
        </h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
                <h4 class="mb-4 font-semibold"> Faltan valores de tarea </h4>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  
                </div>
        </ul>
    </div>
    <br>
@endif

        <form action="{{ route('subject.addHomework', $subject) }} " method=POST>
            @csrf
            <input type="submit" value="Agregar tarea"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple self-center">
        </form>
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Descripcion</th>
                        <th class="px-4 py-3">Fecha Limite</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($homeworks as $homework)
                        <tr class="text-gray-700 dark:text-gray-400">

                            <td class="px-4 py-3 text-sm"">
                                    <a class=" text-purple-600"
                                href="{{ route('homework.show', [$subject, $homework]) }}">{{ $homework->name }}</a>
                            </td>
                            <td class="px-4 py-3 text-sm">
                            {{ $homework->description }}
                            </td>

                            <td class="px-4 py-3 text-sm">
                            {{ $homework->end_date }}
                            </td>
                            <td class="px-4 py-3">

                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('homework.edit', [$subject, $homework]) }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>


                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
