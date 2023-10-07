
// <html lang="en">
//   <head>
//     <title>Title</title>
//     <!-- Required meta tags -->
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

//     <!-- Bootstrap CSS -->
//     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
//   </head>
//   <body>

//     <!-- Optional JavaScript -->
//     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
//     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
//     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

//     <script>
//     document.addEventListener('DOMContentLoaded', function() {
//         // Get all elements with the open-modal-btn class
//         var modalButtons = document.querySelectorAll('.open-modal-btn');

//         // Get the modal element
//         var modal = document.getElementById('myModal');

//         // Function to open the modal and display data
//         function openModal(productData) {
//             var modalContent = modal.querySelector('.modal-content');
//             // You can customize the modal content here using productData
//             modalContent.innerHTML = '<p>Product Name: ' + productData.name + '</p>';
//             // Add more content as needed

//             // Show the modal
//             modal.style.display = 'block';
//         }

//         // Add click event listeners to all modal buttons
//         modalButtons.forEach(function(button) {
//             button.addEventListener('click', function() {
//                 // Get the product data from the data-product attribute
//                 var productData = JSON.parse(this.getAttribute('data-product'));
//                 // Open the modal with the product data
//                 openModal(productData);
//             });
//         });

//         // Close the modal when clicking outside of it
//         window.addEventListener('click', function(event) {
//             if (event.target == modal) {
//                 modal.style.display = 'none';
//             }
//         });
//     });
// </script>



//   </body>
// </html>
