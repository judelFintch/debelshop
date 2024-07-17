<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .jumbotron {
            background: url('https://via.placeholder.com/1920x800') center center/cover no-repeat;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .product-card {
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #343a40;
            color: #f8f9fa;
            padding: 30px 0;
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer a:hover {
            color: #adb5bd;
        }

        .btn-primary {
            background-color: #4b6cb7;
            border-color: #4b6cb7;
        }

        .btn-primary:hover {
            background-color: #182848;
            border-color: #182848;
        }

        .product-card img {
            transition: transform 0.2s;
        }

        .product-card img:hover {
            transform: scale(1.1);
        }

        .product-section {
            background-color: #fff;
            padding: 50px 0;
        }

        .price-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">DebelShop Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-3">Découvrez notre collection</h1>
            <p class="lead">Trouvez les meilleurs produits au meilleur prix</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Découvrir</a>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container product-section">
        <h2 class="text-center mb-4">Nos Produits</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow product-card">
                    <div class="price-tag">$49.99</div>
                    <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="Produit 1">
                    <div class="card-body">
                        <h5 class="card-title">Produit 1</h5>
                        <p class="card-text">Description du produit 1.</p>
                        <a href="#" class="btn btn-primary stretched-link">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow product-card">
                    <div class="price-tag">$59.99</div>
                    <img src="{{asset('img/3.jpg')}}" class="card-img-top" alt="Produit 1">
                    <div class="card-body">
                        <h5 class="card-title">Produit 2</h5>
                        <p class="card-text">Description du produit 2.</p>
                        <a href="#" class="btn btn-primary stretched-link">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow product-card">
                    <div class="price-tag">$39.99</div>
                    <img src="{{asset('img/2.jpg')}}" class="card-img-top" alt="Produit 1">
                    <div class="card-body">
                        <h5 class="card-title">Produit 3</h5>
                        <p class="card-text">Description du produit 3.</p>
                        <a href="#" class="btn btn-primary stretched-link">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p>&copy; 2024 DebelShop Test. Tous droits réservés.</p>
            <p>
                <a href="#">Accueil</a> |
                <a href="#">Produits</a> |
                <a href="#">Promotions</a> |
                <a href="#">Contact</a>
            </p>
            <p>Contact: contact@monecommerce.com | +243 456 789 | 123 Rue Commerce, Lubumbashi, RDC</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
