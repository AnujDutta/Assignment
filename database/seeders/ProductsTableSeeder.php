<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Laptop Category
        $laptopData = [
            [
                'Categories' => 'Laptop',
                'name' => 'HP Laptop',
                'brand' => 'HP',
                'price' => 500.00, // Assuming price is a decimal
                'originalPrice' => 799.00, // Assuming originalPrice is a decimal
                'imageSrc' => 'assets/image/laptop.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],

            [

                'Categories' => 'Laptop',
                'name' => 'Dell Laptop',
                'brand' => 'Dell',
                'price' => '$600',
                'originalPrice' => '$899',
                'imageSrc' => 'assets/image/dell-laptop.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

            ],
            [

                'Categories' => 'Laptop',
                'name' => 'Lenovo Laptop',
                'brand' => 'Lenovo',
                'price' => '$550',
                'originalPrice' => '$749',
                'imageSrc' => 'assets/image/lenovo-laptop.jpg',
                'stockStatus' => 'Out of Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

            ],
            [

                'Categories' => 'Laptop',
                'name' => 'Asus Laptop',
                'brand' => 'Asus',
                'price' => '$550',
                'originalPrice' => '$799',
                'imageSrc' => 'assets/image/asus-laptop.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

            ],
            // Add more laptop data records here as needed
        ];

        // Men's Fashion Category
        $mensFashionData = [
            [
                'Categories' => 'MensFashion',
                'name' => 'Slim Fit Suit',
                'brand' => 'GQ Fashion',
                'price' => 299.00, // Assuming price is a decimal
                'originalPrice' => 399.00, // Assuming originalPrice is a decimal
                'imageSrc' => 'assets/image/suit.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],
            [
                'Categories' => 'MensFashion',
                'name' => 'Leather Jacket',
                'brand' => 'Fashion Hub',
                'price' => '$199',
                'originalPrice' => '$249',
                'imageSrc' => 'assets/image/leather-jacket.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

            ],
            [
                'Categories' => 'MensFashion',
                'name' => 'Casual Shirt',
                'brand' => 'Casual Co.',
                'price' => '$49',
                'originalPrice' => '$59',
                'imageSrc' => 'assets/image/casual-shirt.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

            ],
            [
                'Categories' => 'MensFashion',
                'name' => 'Classic Watch',
                'brand' => 'Timepieces',
                'price' => '$99',
                'originalPrice' => '$129',
                'imageSrc' => 'assets/image/watch.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            
            ],
            // Add more men's fashion data records here as needed
        ];

        // Women's Fashion Category
        $womensFashionData = [
            [
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

            [
                'Categories' => 'WomenFashion',

                'name' => 'High Heels',
                'brand' => 'Fashionista',
                'price' => '$59',
                'originalPrice' => '$79',
                'imageSrc' => 'assets/image/high-heels.jpg',
                'stockStatus' => 'In Stock',
            ],
            [
                'Categories' => 'WomenFashion',
                'name' => 'Handbag',
                'brand' => 'Elegance',
                'price' => '$49',
                'originalPrice' => '$69',
                'imageSrc' => 'assets/image/handbag.jpg',
                'stockStatus' => 'In Stock',
            ],
            [
                'Categories' => 'WomenFashion',
                'name' => 'Earrings Set',
                'brand' => 'Glamour Gems',
                'price' => '$29',
                'originalPrice' => '$39',
                'imageSrc' => 'assets/image/earrings.jpg',
                'stockStatus' => 'In Stock',
            ],
        ];

        // Mobile Category
        $mobileData = [
            [
                'Categories' => 'Mobile',
                'name' => 'iPhone 13',
                'brand' => 'Apple',
                'price' => 799.00, // Assuming price is a decimal
                'originalPrice' => 999.00, // Assuming originalPrice is a decimal
                'imageSrc' => 'assets/image/iphone-13.jpg',
                'stockStatus' => 'In Stock',
                'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],

            [
                'Categories' => 'Mobile',
            'name' => 'Samsung Galaxy S21',
            'brand' => 'Samsung',
            'price' => '$699',
            'originalPrice' => '$899',
            'imageSrc' => 'assets/image/samsung-galaxy-s21.jpg',
            'stockStatus' => 'In Stock',
            'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

        ],
        [
            'Categories' => 'Mobile',
            'name' => 'Google Pixel 6',
            'brand' => 'Google',
            'price' => '$699',
            'originalPrice' => '$799',
            'imageSrc' => 'assets/image/google-pixel-6.jpg',
            'stockStatus' => 'Out of Stock',
            'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

        ],
        [
            'Categories' => 'Mobile',
            'name' => 'OnePlus 9 Pro',
            'brand' => 'OnePlus',
            'price' => '$799',
            'originalPrice' => '$899',
            'imageSrc' => 'assets/image/oneplus-9-pro.jpg',
            'stockStatus' => 'In Stock',
            'SmallDescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

        ],
        ];

        // Insert data into the 'products' table
        DB::table('products')->insert(array_merge($laptopData, $mensFashionData, $womensFashionData, $mobileData));
    }
}

