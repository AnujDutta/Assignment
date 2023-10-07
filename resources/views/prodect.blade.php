<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Navbar Design</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('css/ajax-modal.js') }}"></script> --}}
    <script src="{{ asset('css/script.php') }}"></script>
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
    ],
    [
        'id' => 2,
        'name' => 'Dell Laptop',
        'brand' => 'Dell',
        'price' => '$600',
        'originalPrice' => '$899',
        'imageSrc' => 'assets/image/dell.jpg',
        'stockStatus' => 'In Stock',
    ],
    [
        'id' => 3,
        'name' => 'Lenovo Laptop',
        'brand' => 'Lenovo',
        'price' => '$550',
        'originalPrice' => '$749',
        'imageSrc' => 'assets/image/Lenovo.jpg',
        'stockStatus' => 'Out of Stock',
    ],
    [
        'id' => 4,
        'name' => 'Asus Laptop',
        'brand' => 'Asus',
        'price' => '$550',
        'originalPrice' => '$799',
        'imageSrc' => 'assets/image/Asus.jpg',
        'stockStatus' => 'In Stock',
    ],
];
?>
<?php
$mobiles = [
    [
        'id' => 5,
        'name' => 'iPhone 13',
        'brand' => 'Apple',
        'price' => '$799',
        'originalPrice' => '$999',
        'imageSrc' => 'assets/image/iphone.jpg',
        'stockStatus' => 'In Stock',
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
        'imageSrc' => 'assets/image/oneplus.jpg',
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
    [
        'id' => 13,
        'name' => 'Floral Dress',
        'brand' => 'Chic Boutique',
        'price' => '$79',
        'originalPrice' => '$99',
        'imageSrc' => 'assets/image/floral-dress.jpg',
        'stockStatus' => 'In Stock',
    ],
    [
        'id' => 14,
        'name' => 'High Heels',
        'brand' => 'Fashionista',
        'price' => '$59',
        'originalPrice' => '$79',
        'imageSrc' => 'assets/image/high-heels.jpg',
        'stockStatus' => 'In Stock',
    ],
    [
        'id' => 15,
        'name' => 'Handbag',
        'brand' => 'Elegance',
        'price' => '$49',
        'originalPrice' => '$69',
        'imageSrc' => 'assets/image/handbag.jpg',
        'stockStatus' => 'In Stock',
    ],
    [
        'id' => 16,
        'name' => 'Earrings Set',
        'brand' => 'Glamour Gems',
        'price' => '$29',
        'originalPrice' => '$39',
        'imageSrc' => 'assets/image/earrings.jpg',
        'stockStatus' => 'In Stock',
    ],
];
?>

</head>
<body>

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Products</h4>
            </div>

            <?php

            echo '<h3 class="mb-4">Laptops</h3>'; // Added a semicolon at the end
            foreach ($products as $product) {
                echo '<div class="col-md-3">';
                echo '<div class="product-card">';
                echo '<div class="product-card-img">';
                echo '<label class="stock bg-success">' . $product['stockStatus'] . '</label>';
                echo '<img src="' . $product['imageSrc'] . '" id="img" name="img" alt="' . $product['name'] . '">';
                echo '</div>';
                echo '<div class="product-card-body">';
                echo '<p class="product-brand">' . $product['brand'] . '</p>';
                echo '<h5 class="product-name">';
                echo '<a href="">' . $product['name'] . '</a>';
                echo '</h5>';
                echo '<div>';
                echo '<span class="selling-price">' . $product['price'] . '</span>';
                echo '<span class="original-price">' . $product['originalPrice'] . '</span>';
                echo '</div>';
                echo '<div class="mt-2">';
                    echo '<a href="#" class="btn btn1 open-modal-btn" data-product="' . htmlspecialchars(json_encode($product)) . '">Add To Cart</a>';


                echo '<a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>';
                echo '<a href="" class="btn btn1"> View </a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '<br>';
             echo '<h3 class="mb-4">Mobiles </h3>'; // Added a semicolon at the end
             foreach ($mobiles as $product) {
                 echo '<div class="col-md-3">';
                 echo '<div class="product-card">';
                 echo '<div class="product-card-img">';
                 echo '<label class="stock bg-success">' . $product['stockStatus'] . '</label>';
                 echo '<img src="' . $product['imageSrc'] . '" id="img" name="img" alt="' . $product['name'] . '">';
                 echo '</div>';
                 echo '<div class="product-card-body">';
                 echo '<p class="product-brand">' . $product['brand'] . '</p>';
                 echo '<h5 class="product-name">';
                 echo '<a href="">' . $product['name'] . '</a>';
                 echo '</h5>';
                 echo '<div>';
                 echo '<span class="selling-price">' . $product['price'] . '</span>';
                 echo '<span class="original-price">' . $product['originalPrice'] . '</span>';
                 echo '</div>';
                 echo '<div class="mt-2">';
                    echo '<a href="#" class="btn btn1 open-modal-btn" data-product="' . htmlspecialchars(json_encode($product)) . '">Add To Cart</a>';
                 echo '<a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>';
                 echo '<a href="" class="btn btn1"> View </a>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
             }
             echo '<br>';
             echo '<h3 class="mb-4">Mens Fashion</h3>'; // Added a semicolon at the end
             foreach ($mensFashion as $product) {
                 echo '<div class="col-md-3">';
                 echo '<div class="product-card">';
                 echo '<div class="product-card-img">';
                 echo '<label class="stock bg-success">' . $product['stockStatus'] . '</label>';
                 echo '<img src="' . $product['imageSrc'] . '" id="img" name="img" alt="' . $product['name'] . '">';
                 echo '</div>';
                 echo '<div class="product-card-body">';
                 echo '<p class="product-brand">' . $product['brand'] . '</p>';
                 echo '<h5 class="product-name">';
                 echo '<a href="">' . $product['name'] . '</a>';
                 echo '</h5>';
                 echo '<div>';
                 echo '<span class="selling-price">' . $product['price'] . '</span>';
                 echo '<span class="original-price">' . $product['originalPrice'] . '</span>';
                 echo '</div>';
                 echo '<div class="mt-2">';
                    echo '<a href="#" class="btn btn1 open-modal-btn" data-product="' . htmlspecialchars(json_encode($product)) . '">Add To Cart</a>';
                 echo '<a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>';
                 echo '<a href="" class="btn btn1"> View </a>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
             }
             echo '<br>';
             echo '<h3 class="mb-4">Womens Fashion</h3>'; // Added a semicolon at the end
             foreach ($womensFashion  as $product) {
                 echo '<div class="col-md-3">';
                 echo '<div class="product-card">';
                 echo '<div class="product-card-img">';
                 echo '<label class="stock bg-success">' . $product['stockStatus'] . '</label>';
                 echo '<img src="' . $product['imageSrc'] . '" id="img" name="img" alt="' . $product['name'] . '">';
                 echo '</div>';
                 echo '<div class="product-card-body">';
                 echo '<p class="product-brand">' . $product['brand'] . '</p>';
                 echo '<h5 class="product-name">';
                 echo '<a href="">' . $product['name'] . '</a>';
                 echo '</h5>';
                 echo '<div>';
                 echo '<span class="selling-price">' . $product['price'] . '</span>';
                 echo '<span class="original-price">' . $product['originalPrice'] . '</span>';
                 echo '</div>';
                 echo '<div class="mt-2">';
                    echo '<a href="#" class="btn btn1 open-modal-btn" data-product="' . htmlspecialchars(json_encode($product)) . '">Add To Cart</a>';
                 echo '<a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>';
                 echo '<a href="" class="btn btn1"> View </a>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
             }
             ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all elements with the open-modal-btn class
        var modalButtons = document.querySelectorAll('.open-modal-btn');

        // Get the modal element
        var modal = document.getElementById('myModal');
        var modalContent = modal.querySelector('.modal-content');

        // Function to open the modal and display data
        function openModal(productData) {
            // Use AJAX to load the Blade view dynamically
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    modalContent.innerHTML = xhr.responseText;
                    modal.style.display = 'block';

                    // Add an event listener to the close button
                    var closeModalBtn = document.getElementById('closeModalBtn');
                    closeModalBtn.addEventListener('click', function() {
                        modal.style.display = 'none';
                    });
                }
            };

            // Replace 'productdata.blade.php' with the path to your Blade view
            xhr.open('GET', '/view/' + productData.id, true);
            xhr.send();
        }

        // Add click event listeners to all modal buttons
        modalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the product data from the data-product attribute
                var productData = JSON.parse(this.getAttribute('data-product'));
                // Open the modal with the product data
                openModal(productData);
            });
        });

        // Close the modal when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>


</body>
</html>
