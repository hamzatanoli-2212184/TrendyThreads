<x-web-layout>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
<div>
    <form class="d-flex search-form" method="GET" action="search_results.html">
                    <input type="text" class="search-input" placeholder="Search..." name="query" required>
                    <button class="search-button" type="submit">Search</button>
                    
                </form>

   

    <style>
        body {
            background-color: #343a40;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 400;
            font-size: 1.1rem;
        }

        h1, h2 {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
        }

        .search-input {
            padding: 8px;
            font-size: 1rem;
            border-radius: 20px;
            border: 1px solid #007bff;
            margin-right: 10px;
        }

        .search-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        /* Custom Styles for Slider */
        .slider {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .shop-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .shop-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

  

    <!-- Hero Section with Slider -->
    <section class="hero-section text-center my-5">
        <div class="slider">
            <div class="slides">
                <!-- Slide 1 -->
                <div class="slide">
                    <div class="slide-content">
                        <h2>Start Shopping</h2>
                        <div><a href="{{ route('shop') }}" class="shop-button">Shop Now</a></div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide">
                    <img src="build/assets/images/h2.jpeg" alt="Shop for Men">
                </div>
                <!-- Slide 3 -->
                <div class="slide">
                    <img src="build/assets/images/h1.jpeg" alt="Shop for Women">
                </div>
                <!-- Slide 4 -->
                <div class="slide">
                    <img src="build/assets/images/hhh.jpeg" alt="Trendy Outfits">
                </div>
            </div>
            <!-- Navigation buttons -->
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery my-5 bg-dark text-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Collection</h2>
            <div class="row g-4">
                <!-- Row 1 -->
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/p3.png" class="img-fluid" alt="Gallery Image 1">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/pp.avif" class="img-fluid" alt="Gallery Image 2">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/po.avif" class="img-fluid" alt="Gallery Image 3">
                </div>
                <!-- Row 2 -->
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/ol.jpg" class="img-fluid" alt="Gallery Image 4">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/men.png" class="img-fluid" alt="Gallery Image 5">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/men1.png" class="img-fluid" alt="Gallery Image 6">
                </div>
                <!-- Row 3 -->
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/t1.png" class="img-fluid" alt="Gallery Image 7">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/m3.jpg" class="img-fluid" alt="Gallery Image 8">
                </div>
                <div class="col-md-4 text-center">
                    <img src="build/assets/images/kk.webp" class="img-fluid" alt="Gallery Image 9">
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="build/assets/js/script.js" defer></script>
</body>


</html>
</x-web-layout>
