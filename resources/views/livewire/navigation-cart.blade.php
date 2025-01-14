
<a href="/cart"
    class="{{ request()->is('cart')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">
    Cart ({{ $this->count }})
</a>
