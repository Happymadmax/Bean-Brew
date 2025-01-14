<?php

namespace App\Livewire;

use App\Actions\Test\CreateStripeCheckoutSession;
use App\Factories\CartFactory;
use Livewire\Component;

class Cart extends Component
{
    public function getCartProperty()
    {
        return CartFactory::make();
    }

    public function checkout(CreateStripeCheckoutSession $checkoutSession)
    {
        return $checkoutSession->createFromCart($this->cart);
    }

    public function getItemsProperty()
    {
        return CartFactory::make()->items;
    }

    public function deleteItem($itemId)
    {
        CartFactory::make()->items()->where('id', $itemId)->delete();

        $this->dispatch('productRemovedFromCart');
    }

    public function increment($itemId)
    {
        return CartFactory::make()->items()->find($itemId)->increment('quantity');

    }

    public function decrement($itemId)
    {
        $item = CartFactory::make()->items()->find($itemId);
        if ($item->quantity > 1) {
            $item->decrement('quantity');
            $this->dispatch('productRemovedFromCart');
        }
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
