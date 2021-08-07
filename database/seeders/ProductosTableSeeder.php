<?php

namespace Database\Seeders;

Use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Producto::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 200; $i++) {
            Producto::create([
                'nombre' => $faker->name,
                'sku' => $faker->word,
                'descripcion' => $faker->text,
                'precio' => $faker->randomNumber,
                'cantidad' => $faker->randomDigit,
                'estado' => true,
                'categoria_id' => 1,
            ]);
        }
    }
}
