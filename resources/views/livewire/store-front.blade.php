<x-slot:photo>
    <div class="grid h-screen object-center overflow-hidden content-center ">
        <img src="https://wallpapers.com/images/hd/coffee-beans-with-leaves-xjack9rx9v60yf8l.jpg" class="w-screen">
    </div>
    <div class="absolute inset-0">
        <h3 id="bean-brew" class="pr-8 absolute text-white text-8xl z-50 bottom-[250px] left-[90px] border-r-[6px] border-white">
            Bean <br> & <br> Brew
        </h3>
    </div>
    <style>
        #bean-brew { position: absolute; opacity: 1; transition: opacity 1.5s ease; }
    </style>
    <script>
        window.addEventListener('scroll', () => {
            const el = document.getElementById('bean-brew');
            const { top, bottom } = el.getBoundingClientRect();
            el.style.opacity = (top < 0 || bottom > window.innerHeight) ? 0 : 1;
        });
    </script>
</x-slot:photo>
<div class="h-screen">
    <div class="grid grid-cols-3 gap-6">
        @foreach($this->products as $product)
            <a href="{{ route('product', $product) }}"
               class="">
                <div class="p-4">
                    <img src="https://placehold.co/600x400"
                         class="rounded-t-lg"/>
                    <div class="bg-gray-400
                    border-t-[3px]  border-gray-500 rounded-b-lg">
                        <div class="flex items-center justify-between
                            p-2
                            text-white">
                            <div class="">
                                <div class="text-lg font-medium">{{ $product->name }}</div>
                                <div class="text-xs text-gray-200">{{ $product->price }}</div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
