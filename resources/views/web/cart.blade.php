<x-web-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/css/styles.css">
    <style>
        body {
            background-color: #343a40;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .cart-items {
            margin-bottom: 20px;
        }

        .cart-item {
            background-color: #2c2f33;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .cart-summary {
            background-color: #2c2f33;
            padding: 20px;
            text-align: center;
        }

        .cart-summary p {
            color: #ddd;
        }

        .remove-btn {
            background-color: #ff6f00;
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: #e65c00;
        }
    </style>
</head>

<body>
<section class="container my-5">
        <h2 class="text-center mb-4">Your Cart</h2>
        <div class="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-summary">
            <p>Total Items: <span class="cart-count">0</span></p>
            <button class="checkout-btn btn btn-primary">Proceed to Checkout</button>
        </div>
    </section>

   
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="build/assets/js/script.js"></script> <!-- Include the external JavaScript file -->
   
</body>

</html>
</x-web-layout>



