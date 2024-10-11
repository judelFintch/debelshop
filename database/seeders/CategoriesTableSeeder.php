<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'title' => 'Vilebrequin',
                'description' => 'Vilebrequin',
            ],
            [
                'title' => 'Transmission',
                'description' => 'Système de transmission pour véhicule.',
            ],
            [
                'title' => 'Boite de vitesse',
                'description' => 'Boite de vitesse manuelle',
            ],

            [
                'title' => 'Voiture',
                'description' => 'Voiture',
            ],
        ];

        // Insertion des catégories dans la base de données
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
