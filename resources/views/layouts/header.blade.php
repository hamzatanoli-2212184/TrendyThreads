<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Trendy Threads</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Trendy Threads</a> <!-- Home -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        
        <!-- Shop Dropdown -->
        <li class="nav-item dropdown">
            <a 
                class="nav-link dropdown-toggle" 
                href="#" 
                id="shopDropdown" 
                role="button" 
                data-bs-toggle="dropdown" 
                aria-expanded="false">
                Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                <li><a class="dropdown-item text-secondary" href="{{ route('men') }}">Men</a></li>
                <li><a class="dropdown-item text-secondary" href="{{ route('women') }}">Women</a></li>
            </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>

    </div>
</nav>


      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script> <!-- Include the external JavaScript file -->
</body>
</head>
</html>