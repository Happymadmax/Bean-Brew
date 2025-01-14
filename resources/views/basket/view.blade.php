<!-- resources/views/basket/view.blade.php -->
<x-layout>
    <x-slot:photo></x-slot:photo>

    <div class="bg-white">
        <div class="pt-6">
            <h1 class="text-2xl font-bold">Your Basket</h1>

            <!-- Check if there are items in the basket -->
            @if(session()->has('basket') && count(session('basket')) > 0)
                <div class="mt-6">
                    <ul>
                        @foreach(session('basket') as $item)
                            <li class="flex justify-between mt-4 border-b pb-4">
                                <p>Item ID: {{ $item['id'] }}</p>
                                <p>Item Name: {{ $item['name'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <p>Your basket is empty.</p>
            @endif
        </div>
    </div>
</x-layout>