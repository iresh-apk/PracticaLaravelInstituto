<x-layouts.layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ __('messages.edit_student') }}</h1>

        <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
            <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-control mb-4">
                    <label class="label" for="nombre">
                        <span class="label-text font-semibold">{{ __('messages.name') }}</span>
                    </label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $alumno->nombre) }}" 
                           class="input input-bordered w-full @error('nombre') input-error @enderror" required>
                    @error('nombre')
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-4">
                    <label class="label" for="apellidos">
                        <span class="label-text font-semibold">{{ __('messages.surname') }}</span>
                    </label>
                    <input type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', $alumno->apellidos) }}" 
                           class="input input-bordered w-full @error('apellidos') input-error @enderror" required>
                    @error('apellidos')
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-4">
                    <label class="label" for="email">
                        <span class="label-text font-semibold">{{ __('messages.email') }}</span>
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email', $alumno->email) }}" 
                           class="input input-bordered w-full @error('email') input-error @enderror" required>
                    @error('email')
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-4">
                    <label class="label" for="dni">
                        <span class="label-text font-semibold">{{ __('messages.dni') }}</span>
                    </label>
                    <input type="text" name="dni" id="dni" value="{{ old('dni', $alumno->dni) }}" 
                           class="input input-bordered w-full @error('dni') input-error @enderror" required>
                    @error('dni')
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label" for="f_nac">
                        <span class="label-text font-semibold">{{ __('messages.birth_date') }}</span>
                    </label>
                    <input type="date" name="f_nac" id="f_nac" value="{{ old('f_nac', $alumno->f_nac->format('Y-m-d')) }}" 
                           class="input input-bordered w-full @error('f_nac') input-error @enderror" required>
                    @error('f_nac')
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
