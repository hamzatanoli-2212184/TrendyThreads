<x-web-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads - Men</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/css/styles.css">

    <style>
        body {
            background-color: #343a40; /* Dark grey */
            color: white;
            font-family: 'Poppins', sans-serif; /* Apply beautiful font */
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem; /* Slightly larger for branding */
        }
        .nav-link {
            font-weight: 400;
            font-size: 1.1rem;
        }
        h1, h2 {
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .gallery img {
            border-radius: 10px;
            transition: transform 0.3s ease, filter 0.3s ease;
        }
        .gallery img:hover {
            transform: scale(1.05);
            filter: brightness(90%);
        }
        .card {
            background-color: #2c2f33;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
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
        .btn-cart {
            background-color: #ff6f00;
            color: white;
            border: none;
            padding: 10px 20px;
        }
        .btn-cart:hover {
            background-color: #e65c00;
        }
        
    </style>
</head>
<body>
 

    <!-- Gallery Section -->
    <section class="gallery my-5 bg-dark text-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Collection</h2>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/p3.png" class="img-fluid" alt="Gallery Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Stylish T-Shirt</h5>
                            <p class="card-text">$29.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men2.png" class="img-fluid" alt="Gallery Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Casual Jacket</h5>
                            <p class="card-text">$29.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men3.png" class="img-fluid" alt="Gallery Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Leather Boots</h5>
                            <p class="card-text">$49.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men4.png" class="img-fluid" alt="Gallery Image 4">
                        <div class="card-body">
                            <h5 class="card-title">Slim Fit Jeans</h5>
                            <p class="card-text">$24.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men.png" class="img-fluid" alt="Gallery Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Cotton Hoodie</h5>
                            <p class="card-text">$24.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men5.jpg" class="img-fluid" alt="Gallery Image 6">
                        <div class="card-body">
                            <h5 class="card-title">Summer Shorts</h5>
                            <p class="card-text">$49.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men6.jpg" class="img-fluid" alt="Gallery Image 7">
                        <div class="card-body">
                            <h5 class="card-title">Chinos Pants</h5>
                            <p class="card-text">$34.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men7.jpg" class="img-fluid" alt="Gallery Image 8">
                        <div class="card-body">
                            <h5 class="card-title">Denim Jacket</h5>
                            <p class="card-text">$39.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men8.jpg" class="img-fluid" alt="Gallery Image 9">
                        <div class="card-body">
                            <h5 class="card-title">Winter Coat</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 10 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men9.jpg" class="img-fluid" alt="Gallery Image 10">
                        <div class="card-body">
                            <h5 class="card-title">Sporty Shoes</h5>
                            <p class="card-text">$49.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 11 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men10.jpg" class="img-fluid" alt="Gallery Image 11">
                        <div class="card-body">
                            <h5 class="card-title">Baseball Cap</h5>
                            <p class="card-text">$19.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 12 -->
                <div class="col-md-3 text-center card">
                    <div class="card">
                        <img src="build/assets/images/men11.jpg" class="img-fluid" alt="Gallery Image 12">
                        <div class="card-body">
                            <h5 class="card-title">Sunglasses</h5>
                            <p class="card-text">$14.99</p>
                            <a href="{{ route('cart') }}" class="btn btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-web-layout>