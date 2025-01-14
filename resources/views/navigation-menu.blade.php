
<nav class="bg-gray-800 sticky top-0 z-40 shadow-xl">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0">
                    <a href="/"><img class="h-14 w-auto" src="https://beanandbrew.com.au/wp-content/uploads/2021/01/Bean-Brew-LogoA-1.png" alt="F1"></a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class=" {{ request()->is('/')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="/menu" class="{{ request()->is('products')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Menu</a>
                        <a href="/bookings" class="{{ request()->is('bookings')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Book</a>
                        <a href="/cart" class="{{ request()->is('cart')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Cart</a>
                        <a href="/about" class="{{ request()->is('about')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">About</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @auth
                    <span class="block text-white px-3 py-2 text-base font-medium">Logged in as {{ Auth::user()->firstname }}</span>

                    <!-- Logout Form -->
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Logout
                        </button>
                    </form>
                @else
                    <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                @endauth
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
            <a href="/items" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Menu</a>
            <a href="/bookings" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Book</a>
            <a href="/basket" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Basket</a>
            <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="/basket" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
        </div>
    </div>
</nav>


