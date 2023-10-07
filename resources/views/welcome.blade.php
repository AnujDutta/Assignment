{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebMantra Technologies Store</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- @php
    $products = [
        [
            "image" => "https://via.placeholder.com/150x150?text=Product+1",
            "name" => "Wearable 1",
            "description" => "Description of Wearable 1.",
            "price" => 19.99
        ],
        [
            "image" => "https://via.placeholder.com/150x150?text=Product+2",
            "name" => "Wearable 2",
            "description" => "Description of Wearable 2.",
            "price" => 29.99
        ],
        [
        "image" => "https://via.placeholder.com/150x150?text=Product+3",
        "name" => "Wearable 3",
        "description" => "Description of Wearable 3.",
        "price" => 39.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+4",
        "name" => "Wearable 4",
        "description" => "Description of Wearable 4.",
        "price" => 49.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+5",
        "name" => "Wearable 5",
        "description" => "Description of Wearable 5.",
        "price" => 59.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+6",
        "name" => "Wearable 6",
        "description" => "Description of Wearable 6.",
        "price" => 69.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+7",
        "name" => "Wearable 7",
        "description" => "Description of Wearable 7.",
        "price" => 79.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+8",
        "name" => "Wearable 8",
        "description" => "Description of Wearable 8.",
        "price" => 89.99
    ],
    [
        "image" => "https://via.placeholder.com/150x150?text=Product+9",
        "name" => "Wearable 9",
        "description" => "Description of Wearable 9.",
        "price" => 99.99
    ]
    ];
    @endphp --}}

@include('header')
{{-- @include('navbar') --}}

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce Category Design</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="{{ asset('css/ajax-modal.js') }}"></script>
    </head>
    <body>
        @include('slider')
        <div class="py-3 py-md-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Our Categories</h4>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <a href="#" onclick="toggleCategory('laptops')">
                                <div class="category-card-img">
                                    <img src="{{ asset('assets/image/laptop.jpg') }}" class="w-100" alt="Laptop">
                                </div>

                                <div class="category-card-body">
                                    <h5>Laptop</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <a href="#" onclick="toggleDivs()">
                                <div class="category-card-img">
                                    <img src="{{ asset('assets/image/mobile.jpg') }}" class="w-100" alt="Mobile Devices">
                                </div>
                                <div class="category-card-body">
                                    <h5>Mobile</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <a href="#" onclick="toggleDivs()">
                                <div class="category-card-img">
                                    <img src="{{ asset('assets/image/mens-fashion.jpg') }}" class="w-100" alt="Mens Fashion">
                                </div>
                                <div class="category-card-body">
                                    <h5>Mens Fashion</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <a href="#" onclick="toggleDivs()">
                                <div class="category-card-img">
                                    <img src="{{ asset('assets/image/women.jpg') }}" class="w-100" alt="Women Fashion">
                                </div>
                                <div class="category-card-body">
                                    <h5>Women Fashion</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('prodect')

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="modalContent">

                    <div class="py-3 py-md-5 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 mt-3">
                                    <div class="bg-white border">
                                        <img src="hp-laptop.jpg" class="w-100" alt="Img">
                                    </div>
                                </div>
                                <div class="col-md-7 mt-3">
                                    <div class="product-view">
                                        <h4 class="product-name">
                                            HP Laptop 15IQasd54
                                            <label class="label-stock bg-success">In Stock</label>
                                        </h4>
                                        <hr>
                                        <p class="product-path">
                                            Home / Category / Product / HP Laptop
                                        </p>
                                        <div>
                                            <span class="selling-price">$399</span>
                                            <span class="original-price">$499</span>
                                        </div>
                                        <div class="mt-2">
                                            <div class="input-group">
                                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                                <input type="text" value="1" class="input-quantity" />
                                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="mb-0">Small Description</h5>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h4>Description</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            @include('footer')
            <script>
                function toggleCategory(categoryId) {
                  var category = document.getElementById(categoryId);

                  // Toggle the visibility of the category
                  if (category.style.display === 'none') {
                    category.style.display = 'block';
                  } else {
                    category.style.display = 'none';
                  }
                }
                </script>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

    {{-- <main>
        @foreach ($products as $product)
        <section class="product">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
            <h2>{{ $product['name'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <p>Price: ${{ $product['price'] }}</p>
            <button>Add to Cart</button>
        </section>
        @endforeach

        <!-- More product listings go here -->
    </main> --}}

