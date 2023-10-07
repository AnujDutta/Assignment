<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Product View Design</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="{{ asset('css/ajax-modal.js') }}"></script>
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
            'imageSrc' => 'assets/image/iphone.jpg',
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
            'imageSrc' => 'assets/image/Samsung Galaxy S21.jpg',
            'stockStatus' => 'In Stock',
        ],
        [
            'id' => 7,
            'name' => 'Google Pixel 6',
            'brand' => 'Google',
            'price' => '$699',
            'originalPrice' => '$799',
            'imageSrc' => 'assets/image/Google Pixel 5.jpg',
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
    $product= null;
    // Search in $mensFashion array
        foreach ($mensFashion as $item) {
        if ($item['id'] == $id) {
            $data = $item;
            break;  // Stop searching once a match is found
        }
    }

    // If not found in $mensFashion, search in $womensFashion
    if (!$data) {
        foreach ($womensFashion as $item) {
        if ($item['id'] == $id) {
            $data = $item;
            break;  // Stop searching once a match is found
        }
    }
    }
    if (!$data) {
        foreach ( $mobiles as $item) {
        if ($item['id'] == $id) {
            $data = $item;
            break;  // Stop searching once a match is found
        }
    }
    }
    if (!$data) {
        foreach (  $products as $item) {
        if ($item['id'] == $id) {
            $data = $item;
            break;  // Stop searching once a match is found
        }
    }
    }
    $product = $data;
    // Now, $data will contain the product data if found, or it will remain null
}



?>

</head>
<body>
    @if(isset($data))

        @csrf
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        <img src="{{ asset($data['imageSrc']) }}" id="img" name="img" alt="{{ $data['name'] }}">
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $data['name'] }}
                            <button id="closeModalBtn">Close</button>
                            <label class="label-stock bg-success">{{ $data['stockStatus'] }}</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / {{ $data['name'] }}
                        </p>
                        <div>
                            <span class="selling-price">{{ $data['price'] }}</span>
                            <span class="original-price">{{ $data['originalPrice'] }}</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <?php
                                // Initialize the $i variable
                                $i = 1;
                                ?>
                                <span class="btn btn1" id="decrement"><i class="fa fa-minus"></i></span>
                                <input type="text" value="<?php echo $i; ?>" class="input-quantity" id="quantity" readonly />
                                <span class="btn btn1" id="increment"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">

                            <a href="/payment/{{ $id }}" class="btn btn1 open-modal-btn2 buy">Buy Now</a>

                            <a href="/addtocart/{{ $id }}" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
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
    @else
    <p>Product not found.</p>
    @endif


    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID"></script>


    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Function to initialize PayPal integration
      function initializePayPal() {
        // Load the PayPal JavaScript SDK
        paypal.Buttons({
          createOrder: function(data, actions) {
            // This function sets up the details of the transaction
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '10.00' // Replace with the actual amount you want to charge
                }
              }]
            });
          },
          onApprove: function(data, actions) {
            // This function captures the funds from the transaction
            return actions.order.capture().then(function(details) {
              // Redirect to a thank you page or perform other actions upon successful payment
              window.location.href = 'thank-you.html';
            });
          }
        }).render('.buy');
      }

      // Call the initializePayPal function when the DOM is ready
      document.addEventListener("DOMContentLoaded", initializePayPal);
    </script>
</body>
</html>
