
<a href="/cart"
    class="{{ request()->is('cart')? 'bg-warm-brown text-white': 'text-white hover:bg-warm-brown hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">
    Cart ({{ $this->count }})
</a>
