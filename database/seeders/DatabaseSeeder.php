<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Creación de roles
        $this->call(RolesTableSeeder::class);

        // Administrador
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@instituto.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Profesor
        $teacher = User::create([
            'name' => 'Pedro Jimenez',
            'email' => 'profesor@instituto.com',
            'password' => bcrypt('password'),
        ]);
        $teacher->assignRole('teacher');

        // Estudiante
        $student = User::create([
            'name' => 'Maria Garcia',
            'email' => 'estudiantemaria@instituto.com',
            'password' => bcrypt('password'),
        ]);
        $student->assignRole('student');

        // Alumnos de prueba
        Alumno::create([
            'nombre' => 'D. Alex',
            'apellidos' => 'Granado',
            'email' => 'alexgranado1@example.net',
            'dni' => '75761425-T',
            'f_nac' => '2009-11-30',
        ]);

        Alumno::create([
            'nombre' => 'Jesus',
            'apellidos' => 'Baca',
            'email' => 'jesusbaca1@example.com',
            'dni' => '14946918-T',
            'f_nac' => '2020-02-04',
        ]);

        Alumno::create([
            'nombre' => 'Vera',
            'apellidos' => 'Saez',
            'email' => 'versasaez1@example.com',
            'dni' => '25180305-C',
            'f_nac' => '1981-07-02',
        ]);

        Alumno::create([
            'nombre' => 'Iker',
            'apellidos' => 'Sepulveda',
            'email' => 'ikersepulveda1@example.org',
            'dni' => '74860851-Z',
            'f_nac' => '2005-01-12',
        ]);

        Alumno::create([
            'nombre' => 'Dr. Nicolas',
            'apellidos' => 'Negron',
            'email' => 'nicolasnegron1@example.org',
            'dni' => '34775437-N',
            'f_nac' => '1978-06-02',
        ]);
    }
}


