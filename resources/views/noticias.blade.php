<x-layouts.layout>
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Noticias</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400" alt="Noticia 1" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Nuevo Curso Academico 2024-2025</h2>
                    <p class="text-gray-600 text-sm">15 de Septiembre, 2024</p>
                    <p>El instituto abre sus puertas para un nuevo ano lleno de oportunidades educativas y crecimiento personal.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
            
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400" alt="Noticia 2" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Jornadas de Puertas Abiertas</h2>
                    <p class="text-gray-600 text-sm">10 de Octubre, 2024</p>
                    <p>Invitamos a familias y futuros estudiantes a conocer nuestras instalaciones y metodologia educativa.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
            
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400" alt="Noticia 3" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Exito en Competiciones Academicas</h2>
                    <p class="text-gray-600 text-sm">5 de Noviembre, 2024</p>
                    <p>Nuestros alumnos destacan en las olimpiadas de matematicas y ciencias a nivel regional.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
            
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400" alt="Noticia 4" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Nuevas Tecnologias en el Aula</h2>
                    <p class="text-gray-600 text-sm">20 de Noviembre, 2024</p>
                    <p>Implementamos herramientas digitales innovadoras para mejorar la experiencia educativa de nuestros estudiantes.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
            
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400" alt="Noticia 5" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Programa de Intercambio Internacional</h2>
                    <p class="text-gray-600 text-sm">1 de Diciembre, 2024</p>
                    <p>Abrimos convocatoria para el programa de intercambio con instituciones educativas europeas.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
            
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400" alt="Noticia 6" class="h-48 w-full object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Feria de Ciencias 2024</h2>
                    <p class="text-gray-600 text-sm">15 de Diciembre, 2024</p>
                    <p>Los alumnos presentan sus proyectos cientificos en nuestra feria anual. Gran participacion y creatividad.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Leer mas</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('main') }}" class="btn btn-secondary">Volver al Inicio</a>
        </div>
    </div>
</x-layouts.layout>
