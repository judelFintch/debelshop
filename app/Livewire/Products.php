<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Category;

#[Layout('layouts.app')]
class Products extends Component
{

    public $category = 'all';
    public $categories = [];
    public $inStock = true;
    public $images = ['1,2,3,4,5,6,7,8,9'];
    public function mount()
    {
      $this->updateProducts();
        $this->categories = [
            'all' => 'Toutes les catégories',
            'cars' => 'Voitures',
            'parts' => 'Pièces détachées',
            'accessories' => 'Accessoires',
        ];
    }

    public function updateProducts()
    {
        $categoryExists = Category::find(1) !== null;
     
        $updates = [
            1 => [
                'title' => 'Noah 4 cylindres Essence',
                'price' => 5000,
                'category_id' => 1,
                'description' => 'Le véhicule Noah à 4 cylindres essence offre une excellente performance et une grande fiabilité, idéal pour les trajets en famille ou les longs voyages.'
            ],
            2 => [
                'title' => 'Alphard 2002',
                'price' => 3000,
                'category_id' => 1,
                'description' => 'L’Alphard 2002 est un véhicule spacieux et confortable, parfait pour les longs voyages avec un style élégant et robuste.'
            ],
            3 => [
                'title' => 'Disque de frein',
                'price' => 100,
                'category_id' => 1,
                'description' => 'Disque de frein de haute qualité, conçu pour offrir des performances de freinage optimales, assurant la sécurité de votre véhicule sur la route.'
            ],
            4 => [
                'title' => 'Moteur Alphard',
                'price' => 2000,
                'category_id' => 1,
                'description' => 'Ce moteur Alphard est fiable et puissant, offrant une excellente performance et une durabilité exceptionnelle pour votre véhicule.'
            ],
            5 => [
                'title' => 'Radiateur',
                'price' => 300,
                'category_id' => 1,
                'description' => 'Radiateur haute performance conçu pour assurer une dissipation thermique optimale et garder votre moteur à la bonne température.'
            ],
            6 => [
                'title' => 'Batterie grand format',
                'price' => 200,
                'category_id' => 1,
                'description' => 'Batterie grand format avec une capacité élevée pour garantir une longue durée de vie et des performances stables dans tous les environnements.'
            ],

            7 => [
                'title' => 'Vilebrequin',
                'price' => 500,
                'category_id' => 1,
                'description' => 'Vilebrequin pour moteur, essentiel pour la conversion du mouvement linéaire des pistons en mouvement rotatif.'
            ],

            8 => [
                'title' => 'Transmission Alphard',
                'price' => 400,
                'category_id' => 1,
                'description' => 'Système de transmission pour véhicule Toyota Alphard, permettant de transférer la puissance du moteur aux roues.'
            ],

            9 => [
                'title' => 'Boite de vitesse',
                'price' => 1000,
                'category_id' => 1,
                'description' => 'Boite de vitesse manuelle, assurant le contrôle du régime moteur et la transmission de puissance à différents rapports.'
            ],

        ];

        foreach ($updates as $id => $data) {
            $product = Product::find($id);
            if ($product) {
                $product->title = $data['title'];
                $product->price = $data['price'];
                $product->description = $data['description']; // Utilise la description générée
                $product->category_id = $data['category_id'];

                $product->save(); // Enregistre les modifications
            } else {
                // Crée un nouveau produit s'il n'existe pas
                Product::create([
                    'title' => $data['title'],
                    'price' => $data['price'],
                    'description' => $data['description'],
                    'image' => $id . '.jpg',
                    'category_id' => $data['category_id'],
                ]);
            }
        }
    }


    public function render(): View
    {


        return view('livewire.products', [
            'products' => Product::paginate(10)
        ]);
    }
}
