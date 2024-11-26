<x-web-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Trendy Threads</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/css/styles.css">
    <style>
        body {
            background-color: #343a40; /* Dark grey */
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .hero-section {
            text-align: center;
            background-color: #2c2f33;
            padding: 50px 0;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #ff6f00;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e65c00;
        }

        .card {
            background-color: #2c2f33;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card img {
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.05);
            filter: brightness(90%);
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-weight: 600;
            color: #fff;
        }

        .card-text {
            color: #ddd;
        }

        footer {
            background-color: #2c2f33;
            padding: 20px 0;
        }

        footer p, footer a {
            color: #ddd;
            margin: 0;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
   

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Shop the Latest Fashion Trends</h1>
            <p>Explore our exclusive collection of premium apparel.</p>
            <a href="#shop" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
    </section>

    <!-- Shop Section -->
    <section class="container my-5" id="shop">
        <h2 class="text-center mb-4">Our Bestsellers</h2>
        <div class="row g-4">
            <!-- Product Cards -->
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product1.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Classic T-Shirt</h5>
                        <p class="card-text">$25.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product2.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Stylish Jacket</h5>
                        <p class="card-text">$35.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product3.jpg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Denim Jeans</h5>
                        <p class="card-text">$45.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product4.jpg" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Trendy Hoodie</h5>
                        <p class="card-text">$49.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product5.jpg" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Summer Dress</h5>
                        <p class="card-text">$29.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product6.jpg" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Casual Shirt</h5>
                        <p class="card-text">$22.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product7.jpg" class="card-img-top" alt="Product 7">
                    <div class="card-body">
                        <h5 class="card-title">Formal Blazer</h5>
                        <p class="card-text">$55.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="build/assets/images/product8.jpg" class="card-img-top" alt="Product 8">
                    <div class="card-body">
                        <h5 class="card-title">Chic Skirt</h5>
                        <p class="card-text">$24.99</p>
                        <a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="build/assets/js/script.js"></script>

</body>

</html>

</x-web-layout>