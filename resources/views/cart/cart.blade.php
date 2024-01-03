<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-1 text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

   <div class="container py-5">
    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Cart - 2 items</h5>
                </div>
                <div class="card-body">
                    <!-- Single item -->
                    <div class="row">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                            <!-- Image -->
                            <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                                    class="w-100" alt="Blue Jeans Jacket" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                </a>
                            </div>
                            <!-- Image -->
                        </div>

                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                            <!-- Data -->
                            <p><strong>Blue denim shirt</strong></p>
                            <p>Color: blue</p>
                            <p>Size: M</p>
                            <button class="btn btn-danger mt-2 btn-block">Remove</button>

                            <!-- Data -->
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Quantity -->
                            <div class="d-flex align-items-center mb-4" style="max-width: 300px">
                                <!-- Minus -->
                                <button class="btn btn-primary me-2 mb-3">
                                    &#8722;
                                </button>

                                <div class="form-outline flex-grow-1 mt-3 ">
                                    <input id="form1" min="0" name="quantity" value="1" type="number"
                                        class="form-control" />
                                    <label class="form-label" for="form1">Quantity</label>
                                </div>

                                <!-- Plus -->
                                <button class="btn btn-primary  ms-2 mb-3">
                                    &#43;
                                </button>
                            </div>
                            <!-- Quantity -->

                            <!-- Price -->
                            <p class="text-start text-md-center">
                                <strong>$17.99</strong>
                            </p>
                            <!-- Price -->
                        </div>
                    </div>
                    <!-- Single item -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Summary</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            Products
                            <span>$53.98</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>Gratis</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                                <strong>Total amount</strong>
                                <p class="mb-0">(including VAT)</p>
                            </div>
                            <span><strong>$53.98</strong></span>
                        </li>
                    </ul>

                    <button class="btn btn-success mt-2 btn-block">
                        Go to checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


</x-app-layout>
