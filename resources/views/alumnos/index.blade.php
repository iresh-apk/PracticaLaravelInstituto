<x-layouts.layout>
    <div class="container mx-auto p-6">
        <div class="flex gap-2 mb-6">
            @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))
                <a href="{{ route('alumnos.create') }}" class="btn btn-primary">{{ __('messages.create_student') }}</a>
            @endif
            <a href="{{ route('dashboard') }}" class="btn btn-warning">{{ __('messages.back') }}</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr class="text-gray-600">
                        @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                        <th class="font-normal">ID</th>
                        @endif
                        <th class="font-normal">{{ __('messages.name') }}</th>
                        <th class="font-normal">{{ __('messages.birth_date') }}</th>
                        @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                        <th class="font-normal">{{ __('messages.dni') }}</th>
                        @endif
                        <th class="font-normal">{{ __('messages.email') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnos as $alumno)
                        <tr class="border-b border-gray-200">
                            @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                            <td class="text-gray-700">{{ $alumno->id }}</td>
                            @endif
                            <td class="text-blue-600">{{ $alumno->nombre }} {{ $alumno->apellidos }}</td>
                            <td class="text-gray-700">{{ $alumno->f_nac->format('Y-m-d') }}</td>
                            @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                            <td class="text-gray-700">{{ $alumno->dni }}</td>
                            @endif
                            <td class="text-blue-600">{{ $alumno->email }}</td>
                            <td class="flex gap-4 items-center">
                                @if(auth()->user()->hasRole('admin'))
                                    <a href="{{ route('alumnos.edit', $alumno) }}" class="text-gray-500 hover:text-gray-700" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar este alumno?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-500 hover:text-gray-700" title="Eliminar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                                <a href="{{ route('alumnos.show', $alumno) }}" class="text-blue-600 hover:text-blue-800">{{ __('messages.view') }}</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">{{ __('messages.no_students') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.layout>
