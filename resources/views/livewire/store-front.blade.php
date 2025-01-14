

<div class="bg-white pb-16">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-3 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only"></h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach($this->products as $product)
                <a href="{{ route('product', $product) }}" class="group relative">
                    <div class="pb-20">
                        <div class="ml-[5px] aspect-h-1 aspect-w-1 w-full overflow-hidden xl:aspect-h-8 xl:aspect-w-7 max-w-[275px] border-r-2 border-b-2 rounded-br-lg border-black group-hover:border-blue-400">
                            <img src="https://placehold.co/273x273" alt="Alex Albon" class="object-cover object-center w-full h-auto relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110">
                        </div>
                        <div class="grid grid-cols-5 max-h-[70px] max-w-[275px] absolute top-[273.5px] border-l-2 border-t-2 border-black group-hover:border-blue-400 rounded-tl-lg">
                            <div class="col-span-3">
                                <h3 class="pt-4 pl-2 text-sm group-hover:text-lg group-hover:font-medium text-gray-900 group-hover:text-blue-400 duration-300 ease-in-out">{{$product->name}}</h3>
                                <p class="mt-1 pl-2 text-lg font-medium group-hover:text-sm group-hover:font-normal text-gray-900 group-hover:text-blue-400 duration-300 ease-in-out">{{$product->price}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- More products... -->
        </div>
    </div>
</div>
