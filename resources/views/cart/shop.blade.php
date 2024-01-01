<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-1 text-gray-800 leading-tight">
            {{ __('Shopping') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card" style="width: 18rem;">
                <img src="image.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Montano Kiseo</h5>
                    <p class="card-text">Product Description goes here.</p>
                    <p class="card-text">Price: $99.99</p>
                    <button class="btn btn-danger mt-2">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
