<x-layout>
    <x-slot:photo>
    <div class="grid h-screen object-center overflow-hidden content-center bg-black">
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
    <div class="bg-white mt-6">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-6 px-4 py-6  lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
                <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>
            </div>
            <img src="https://placehold.co/600x400" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-2xl bg-gray-100">
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-6 px-4 py-6 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <img src="https://placehold.co/600x400" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-2xl bg-gray-100">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
                <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>
            </div>
        </div>
    </div>
</x-layout>
