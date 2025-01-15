
<div class="h-screen">
    <div class="p-[16px]">
        <div class="text-lg font-semibold py-1 text-dark-brown">Search Products</div>
        <input class="rounded-lg w-1/2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border-2 border-dark-brown
        transition duration-300 ease focus:outline-none focus:border-warm-brown shadow-sm focus:shadow"
        type="text" wire:model.live="search">
    </div>
    <div class="grid grid-cols-3 gap-6">
        @foreach($this->products as $product)
            <a href="{{ route('product', $product) }}"
               wire:key="{{ $product->id }}"
               class="">
                <div class="p-4">
                    <img src="https://placehold.co/600x400"
                         class=""/>
                    <div class="bg-warm-brown
                    border-t-[3px]  border-t-dark-brown rounded-b-lg">
                        <div class="flex items-center justify-between
                            p-2
                            text-light-gray">
                            <div class="">
                                <div class="text-lg font-medium">{{ $product->name }}</div>
                                <div class="text-sm text-light-brown">{{ $product->price }}</div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
