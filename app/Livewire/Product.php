<?php

namespace App\Livewire;

use App\Actions\Test\AddProductVariantToCart;
use Livewire\Component;


class Product extends Component
{
    public $productId;
    public $variant;

    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id'],
    ];

    public function mount()
    {
        $this->variant = $this->product->variants()->first()->id;
    }

    public function addToCart(AddProductVariantToCart $cart)
    {
        $this->validate();

        $cart->add(
            variantId: $this->variant
        );

        $this->dispatch('cartUpdated');

        $this->dispatch('productAddedToCart');
    }

    public function getProductProperty()
    {
        return \App\Models\Product::query()->findOrFail($this->productId);
    }

    public function render()
    {
        return view('livewire.product');
    }
}
