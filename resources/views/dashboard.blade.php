<x-layouts.layout>
    <div class="container mx-auto p-6">
        {{-- Mostrar rol del usuario --}}
        <div class="mb-6 flex items-center gap-4">
            <span class="text-gray-600">{{ __('messages.welcome') }}, <strong>{{ auth()->user()->name }}</strong></span>
            <span class="badge badge-primary badge-lg">
                {{ __('messages.role') }}: {{ __('messages.role_' . (auth()->user()->getRoleNames()->first() ?? 'student')) }}
            </span>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card bg-gradient-to-br from-gray-700 to-gray-900 text-white shadow-xl rounded-2xl overflow-hidden">
                <div class="card-body p-6">
                    <h2 class="card-title text-xl font-bold text-yellow-400">{{ __('messages.student_management') }}</h2>
                    <p class="text-sm text-gray-300">{{ __('messages.student_management_desc') }}</p>
                    <div class="flex justify-between items-end mt-4">
                        <img src="https://img.freepik.com/free-vector/group-students-concept-illustration_114360-7638.jpg" alt="Estudiantes" class="h-28 rounded-lg">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-sm">{{ __('messages.view_students') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>


