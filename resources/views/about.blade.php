<x-layouts.layout>
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ __('messages.about') }}</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('messages.our_mission') }}</h2>
                <p class="text-gray-600 leading-relaxed">
                    El Instituto de Gestion Educativa tiene como mision principal proporcionar 
                    herramientas tecnologicas avanzadas para la administracion eficiente de 
                    centros educativos, facilitando la gestion de alumnos, profesores y 
                    recursos academicos.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('messages.our_vision') }}</h2>
                <p class="text-gray-600 leading-relaxed">
                    Ser la plataforma lider en gestion educativa, reconocida por su 
                    innovacion, facilidad de uso y compromiso con la excelencia academica. 
                    Buscamos transformar la manera en que las instituciones educativas 
                    gestionan su informacion.
                </p>
            </div>
        </div>
        
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('messages.our_values') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4">
                    <div class="text-4xl mb-2">📚</div>
                    <h3 class="font-semibold text-gray-700">{{ __('messages.education') }}</h3>
                    <p class="text-gray-600 text-sm">Comprometidos con el aprendizaje continuo</p>
                </div>
                <div class="text-center p-4">
                    <div class="text-4xl mb-2">🤝</div>
                    <h3 class="font-semibold text-gray-700">{{ __('messages.collaboration') }}</h3>
                    <p class="text-gray-600 text-sm">Trabajamos juntos por objetivos comunes</p>
                </div>
                <div class="text-center p-4">
                    <div class="text-4xl mb-2">💡</div>
                    <h3 class="font-semibold text-gray-700">{{ __('messages.innovation') }}</h3>
                    <p class="text-gray-600 text-sm">Buscamos soluciones creativas y efectivas</p>
                </div>
            </div>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('main') }}" class="btn btn-secondary">{{ __('messages.back_home') }}</a>
        </div>
    </div>
</x-layouts.layout>