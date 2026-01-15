<x-layouts.layout>
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Contacto</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Informacion de Contacto</h2>
                
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-600">Calle Principal 123, Madrid, Espana</span>
                    </div>
                    
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-gray-600">+34 912 345 678</span>
                    </div>
                    
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-600">info@instituto.com</span>
                    </div>
                </div>
                
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Horario de Atencion</h3>
                    <p class="text-gray-600">Lunes a Viernes: 8:00 - 20:00</p>
                    <p class="text-gray-600">Sabados: 9:00 - 14:00</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Formulario de Contacto</h2>
                <p class="text-gray-600 mb-4">
                    @auth
                        Envianos tu mensaje y te responderemos a la brevedad.
                    @else
                        <span class="text-warning">Inicia sesion para enviar mensajes.</span>
                    @endauth
                </p>
                
                @auth
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-semibold">Asunto</span>
                        </label>
                        <input type="text" name="asunto" class="input input-bordered w-full" placeholder="Escribe el asunto" required>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-semibold">Mensaje</span>
                        </label>
                        <textarea name="mensaje" rows="4" class="textarea textarea-bordered w-full" placeholder="Escribe tu mensaje" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesion</a>
                @endauth
            </div>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('main') }}" class="btn btn-secondary">Volver al Inicio</a>
        </div>
    </div>
</x-layouts.layout>
