<div class="bg-white">
    <div class="pt-6">
        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <img src="https://placehold.co/600x400" alt="Two each of gray, white, and black shirts laying flat." class="hidden aspect-[3/4] size-full rounded-lg object-cover lg:block">
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <img src="https://placehold.co/600x400" alt="Model wearing plain black basic tee." class="aspect-[3/2] size-full rounded-lg object-cover">
                <img src="https://placehold.co/600x400" alt="Model wearing plain gray basic tee." class="aspect-[3/2] size-full rounded-lg object-cover">
            </div>
            <img src="https://placehold.co/600x400" alt="Model wearing plain white basic tee." class="aspect-[4/5] size-full object-cover sm:rounded-lg lg:aspect-[3/4]">
        </div>

        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $this->product->name }}</h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>
                <p class="text-3xl tracking-tight text-gray-900">{{ $this->product->price }}</p>

                <form class="mt-10">

                    <!-- Sizes -->
                    <div class="mt-10">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-900">Size</h3>
                        </div>

                        <fieldset aria-label="Choose a size" class="mt-4">
                            <select wire:model.change="variant" >
                                @foreach($this->product->variants as $variant)
                                    <option value="{{$variant->id}}" >{{$variant->size}} </option>
                                @endforeach
                            </select>

                            @error('variant')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </fieldset>
                    </div>

                    @csrf
                    <button wire:click="addToCart"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Add to cart
                    </button>
                </form>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                <!-- Description and details -->
                <div>
                    <h3 class="sr-only">Description</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900">{{ $this->product->description }}</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                    <div class="mt-4">
                        <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                            <li class="text-gray-400"><span class="text-gray-600">"description here"</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">"description here"</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">"description here" &amp; "description here"</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">"description here"</span></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Details</h2>

                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-gray-600">{{ $this->product->description }}</p>
                    </div>
                </div>
            </div>
            <script>
                window.addEventListener('cartUpdated', event => {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-start",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "success",
                        title: "Product added to cart"
                    });
                });
            </script>

        </div>
    </div>
</div>
