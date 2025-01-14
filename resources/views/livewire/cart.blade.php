<div>
    <div class="font-sans md:max-w-4xl max-md:max-w-xl mx-auto bg-white py-4">
        <div class="grid md:grid-cols-3 gap-4">
            <div class="md:col-span-2 bg-gray-100 p-4 rounded-md">
                <h2 class="text-2xl font-bold text-gray-800">Cart</h2>
                <hr class="border-gray-300 mt-4 mb-8" />

                <div class="space-y-4">
                    @foreach($this->items as $item)
                        <div class="grid grid-cols-3 items-center gap-4">
                            <div class="col-span-2 flex items-center gap-4">
                                <div class="w-24 h-24 shrink-0 bg-white p-2 rounded-md">
                                    <img src='https://readymadeui.com/images/product14.webp' class="w-full h-full object-contain" />
                                </div>

                                <div>
                                    <h3 class="text-base font-bold text-gray-800">{{ $item->product->name }}</h3>
                                    <p class="text-sm">{{ $item->variant->size }}</p>
                                    <button wire:click="deleteItem({{ $item->id }})"
                                            class="text-xs text-red-500 cursor-pointer mt-0.5">Remove
                                    </button>

                                    <div class="flex gap-4 mt-4">
                                        <div class="relative group">
                                            <div></div>
                                        </div>

                                        <div class="flex justify-between">
                                            <button wire:click="decrement({{ $item->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>

                                            </button>
                                            <div class="px-1">{{$item->quantity}}</div>
                                            <button wire:click="increment({{ $item->id }})"
                                                    class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <h4 class="text-base font-bold text-gray-800">{{$item->subtotal}}</h4>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="bg-gray-100 rounded-md p-4 md:sticky top-0">
                @auth
                    <div class="text-gray-800 mt-8 space-y-4">
                        <div class="grid grid-cols-1">
                            <div class="font-medium text-lg">Subtotal</div>
                            <div class="font-medium">   {{$this->cart->total}}</div>
                            <div></div>
                        </div>
                    </div>

                    <div class="mt-8 space-y-2">
                        <button wire:click="checkout" type="button" class="text-sm px-4 py-2.5 w-full font-semibold tracking-wide bg-blue-600 hover:bg-blue-700 text-white rounded-md">Checkout</button>
                    </div>
                @endauth
                @guest
                    <div>
                        <div class="md:col-span-2 bg-gray-100  rounded-md">
                            <h2 class="text-2xl font-bold text-gray-800">Title</h2>
                            <hr class="border-gray-300 mt-4 mb-6" />
                            <div>
                                <div class="text-gray-800 text-sm">
                                    Please <a href="/login" class="text-gray-700">login</a> or <a href="/register" class="text-gray-800">register</a> to checkout.
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
            </div>
        </div>
