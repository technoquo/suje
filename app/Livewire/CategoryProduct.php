<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CategoryProduct extends Component
{
    public $categories;
    public $selectedCategory = 0;
    public $groupedProducts = [];

    public function mount()
    {
        $this->categories = Category::whereActive(1)
            ->orderBy('name', 'desc')
            ->get();

        // Cargar productos de la primera categoría por defecto
        $this->loadProducts();
    }

    public function updatedSelectedCategory($value)
    {
        $this->loadProducts();
    }

    private function loadProducts()
    {
        // Si la categoría es 0 → mostrar todos
        if ($this->selectedCategory == 0) {
            $this->groupedProducts = Product::where('active', 1)
              //  ->where('stock', '>', 0)
                ->get();
        } else {
            $this->groupedProducts = Product::where('active', 1)
            //    ->where('stock', '>', 0)
                ->where('category_id', $this->selectedCategory)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.category-product');
    }
}
