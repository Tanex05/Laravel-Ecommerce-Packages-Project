<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-1 text-gray-800 leading-tight">
            {{ __('Shopping') }}
        </h2>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss='alert'></button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif



            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card mt-2" style="width: 18rem;">
                            <img src="{{ asset($product->image) }}" class="card-img-top w-100 h-50" alt="...">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px">{{ $product->name }}</h4>
                                <h4 class="card-title text-primary" style="font-size: 20px">${{ $product->price}}</h4>
                                <p class="card-text">{{ $product->description }}</p>

                                <div class="d-flex flex-column">
                                    <a href="{{ route('add-to-cart', $product->id)}}" class="btn btn-primary mt-3 btn-block">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
