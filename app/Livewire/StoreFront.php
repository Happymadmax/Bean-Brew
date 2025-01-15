<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Url;
use App\Models\User;
use Livewire\Component;


class StoreFront extends Component
{
    #[Url]
    public $search = '';


    public function getProductsProperty()
    {
        return Product::query()->get();
    }

    public function render()
    {
        $query = $this->search; // $this->search holds the user input from the Livewire component
        $this->products = Product::search($query)->get(); // Perform the search query

        return view('livewire.store-front', [
            'products' => $this->products, // Pass the filtered products to the view
        ]);
    }
}
