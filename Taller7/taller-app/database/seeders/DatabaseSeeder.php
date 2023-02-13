<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\DocumentType;
use App\Models\Person;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        /*ciudades*/
        City::create([
            'name' => 'Bogotá',
            'description' => 'Capital del país'
        ]);

        City::create([
            'name' => 'Medellín',
            'description' => 'Ciudad de la eterna primavera'
        ]);

        City::create([
            'name' => 'Bucaramanga',
            'description' => 'Ciudad Bonita'
        ]);

        City::create([
            'name' => 'Neiva',
            'description' => 'la capital bambuquera de América'
        ]);

        /*tipos de documentos*/
        DocumentType::create([
            'name' => 'CC',
            'description' => 'Cédula de Ciudadanía'
        ]);

        DocumentType::create([
            'name' => 'TI',
            'description' => 'Tarjeta de Identidad'
        ]);

        /*personas*/
        Person::create([
            'name' => 'Juan',
            'lastname' => 'Trujillo',
            'email' => 'juanstt99@gmail.com',
            'username' => 'juanstt99',
            'password' => '12345',
            'phone' => '3104778865',
            'document' => '1098815389',
            'birthdate' => '199-01-20',
            'residence_place' => 1,
            'document_type_id' => 1
        ]);

    }
}
