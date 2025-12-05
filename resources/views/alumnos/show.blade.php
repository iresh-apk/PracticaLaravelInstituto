<x-layouts.layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ __('messages.student_details') }}</h1>

        <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
            <div class="grid grid-cols-2 gap-4">
                @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                <div>
                    <span class="font-semibold text-gray-600">ID:</span>
                    <p class="text-lg">{{ $alumno->id }}</p>
                </div>
                @endif
                @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                <div>
                    <span class="font-semibold text-gray-600">{{ __('messages.dni') }}:</span>
                    <p class="text-lg">{{ $alumno->dni }}</p>
                </div>
                @endif
                <div>
                    <span class="font-semibold text-gray-600">{{ __('messages.name') }}:</span>
                    <p class="text-lg">{{ $alumno->nombre }}</p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600">{{ __('messages.surname') }}:</span>
                    <p class="text-lg">{{ $alumno->apellidos }}</p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600">{{ __('messages.email') }}:</span>
                    <p class="text-lg">{{ $alumno->email }}</p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600">{{ __('messages.birth_date') }}:</span>
                    <p class="text-lg">{{ $alumno->f_nac->format('d/m/Y') }}</p>
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')))
                <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
                @endif
                <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">{{ __('messages.back') }}</a>
            </div>
        </div>
    </div>
</x-layouts.layout>
