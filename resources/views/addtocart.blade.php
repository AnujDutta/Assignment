<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Cart/Wishlist Page Design</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <?php
    $products = [

    [
        'id' => 1,
        'name' => 'HP Laptop',
        'brand' => 'HP',
        'price' => '$500',
        'originalPrice' => '$799',
        'imageSrc' => 'assets/image/hp.jpg',
        'stockStatus' => 'In Stock',
        'SmallDescription'=>'  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
            'Description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

    ],
    [
        'id' => 2,
        'name' => 'Dell Laptop',
        'brand' => 'Dell',
        'price' => '$600',
        'originalPrice' => '$899',
        'imageSrc' => 'assets/image/dell.jpg',
        'stockStatus' => 'In Stock',
        'SmallDescription'=>'  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
            'Description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

    ],
    [
        'id' => 3,
        'name' => 'Lenovo Laptop',
        'brand' => 'Lenovo',
        'price' => '$550',
        'originalPrice' => '$749',
        'imageSrc' => 'assets/image/Lenovo.jpg',
        'stockStatus' => 'Out of Stock',
        'SmallDescription'=>'  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
            'Description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

    ],
    [
        'id' => 4,
        'name' => 'Asus Laptop',
        'brand' => 'Asus',
        'price' => '$550',
        'originalPrice' => '$799',
        'imageSrc' => 'assets/image/Asus.jpg',
        'stockStatus' => 'In Stock',
        'SmallDescription'=>'  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
            'Description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

    ],
    ];
    ?>
    <?php
    $mobiles = [
        [
            'id' => 5,
            'Categories'=> 'mobile',
            'name' => 'iPhone 13',
            'brand' => 'Apple',
            'price' => '$799',
            'originalPrice' => '$999',
            'imageSrc' => 'assets/image/iphone-13.jpg',
            'stockStatus' => 'In Stock',
            'SmallDescription'=>'  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
            'Description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

        ],
        [
            'id' => 6,
            'name' => 'Samsung Galaxy S21',
            'brand' => 'Samsung',
            'price' => '$699',
            'originalPrice' => '$899',
            'imageSrc' => 'assets/image/samsung-galaxy-s21.jpg',
            'stockStatus' => 'In Stock',
        ],
        [
            'id' => 7,
            'name' => 'Google Pixel 6',
            'brand' => 'Google',
            'price' => '$699',
            'originalPrice' => '$799',
            'imageSrc' => 'assets/image/google-pixel-6.jpg',
            'stockStatus' => 'Out of Stock',
        ],
        [
            'id' => 8,
            'name' => 'OnePlus 9 Pro',
            'brand' => 'OnePlus',
            'price' => '$799',
            'originalPrice' => '$899',
            'imageSrc' => 'assets/image/oneplus-9-pro.jpg',
            'stockStatus' => 'In Stock',
        ],
    ];
    ?>
    <?php
    $mensFashion = [
        [
            'id' => 9,
            'name' => 'Slim Fit Suit',
            'brand' => 'GQ Fashion',
            'price' => '$299',
            'originalPrice' => '$399',
            'imageSrc' => 'assets/image/suit.jpg',
            'stockStatus' => 'In Stock',
        ],
        [
            'id' => 10,
            'name' => 'Leather Jacket',
            'brand' => 'Fashion Hub',
            'price' => '$199',
            'originalPrice' => '$249',
            'imageSrc' => 'assets/image/leather-jacket.jpg',
            'stockStatus' => 'In Stock',
        ],
        [
            'id' => 11,
            'name' => 'Casual Shirt',
            'brand' => 'Casual Co.',
            'price' => '$49',
            'originalPrice' => '$59',
            'imageSrc' => 'assets/image/casual-shirt.jpg',
            'stockStatus' => 'In Stock',
        ],
        [
            'id' => 12,
            'name' => 'Classic Watch',
            'brand' => 'Timepieces',
            'price' => '$99',
            'originalPrice' => '$129',
            'imageSrc' => 'assets/image/watch.jpg',
            'stockStatus' => 'In Stock',
        ],
    ];
    ?>
    <?php
    $womensFashion = [
        ['id' => 13,
                'Categories' => 'WomenFashion',
                'name' => 'Floral Dress',
                'brand' => 'Chic Boutique',
                'price' => 79.00, // Assuming price is a decimal
                'originalPrice' => 99.00, // Assuming originalPrice is a decimal
                'imageSrc' => 'assets/image/floral-dress.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],

            ['id' => 14,
                'Categories' => 'WomenFashion',

                'name' => 'High Heels',
                'brand' => 'Fashionista',
                'price' => '$59',
                'originalPrice' => '$79',
                'imageSrc' => 'assets/image/high-heels.jpg',
                'stockStatus' => 'In Stock',
            ],
            [
                'id' => 15,
                'Categories' => 'WomenFashion',
                'name' => 'Handbag',
                'brand' => 'Elegance',
                'price' => '$49',
                'originalPrice' => '$69',
                'imageSrc' => 'assets/image/handbag.jpg',
                'stockStatus' => 'In Stock',
            ],
            [
                'id' => 16,
                'Categories' => 'WomenFashion',
                'name' => 'Earrings Set',
                'brand' => 'Glamour Gems',
                'price' => '$29',
                'originalPrice' => '$39',
                'imageSrc' => 'assets/image/earrings.jpg',
                'stockStatus' => 'In Stock',
            ],
        ];
        if (isset($id)) {
    $data = null;  // Initialize the data variable

    // Search in $mensFashion array
    foreach ($mensFashion as $product) {
        if ($product['id'] == $id) {
            $data = $product;
            break;  // Stop searching once a match is found
        }
    }

    // If not found in $mensFashion, search in $womensFashion
    if (!$data) {
        foreach ($womensFashion as $product) {
            if ($product['id'] == $id) {
                $data = $product;
                break;  // Stop searching once a match is found
            }
        }
    }
    if (!$data) {
        foreach ( $mobiles as $product) {
            if ($product['id'] == $id) {
                $data = $product;
                break;  // Stop searching once a match is found
            }
        }
    }
    if (!$data) {
        foreach (  $products as $product) {
            if ($product['id'] == $id) {
                $data = $product;
                break;  // Stop searching once a match is found
            }
        }
    }
    // Now, $data will contain the product data if found, or it will remain null
}
        ?>
        @inc
</head>
<body>
    @include('header')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
