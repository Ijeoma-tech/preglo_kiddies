<?php
// Include the database connection file
include '../include/db.php';  

// Fetch featured products from the database
try {
    $stmt = $pdo->query("SELECT * FROM products LIMIT 4");
    $featured_products = $stmt->fetchAll();
} catch (Exception $e) {
    echo "Error fetching products: " . $e->getMessage();
    $featured_products = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreGlo Kiddies - Home</title>
    <link rel="stylesheet" href="../assets/assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/assets/css/style.css">
    <link rel="stylesheet" href="../assets/assets/fontawesome/css/all.css">
    <style>
        /* Background image styling */
        body {
            background: url('../assets/assets/image/presglo1.jpg') no-repeat center center;
            background-size: cover;
            height: 100dvh
        }

        /* Centered content */
        .content-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 80vh;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        /* Featured products card styling */
        .card {
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           <img src="../assets/assets/image/preglokiddieslogo1.png" alt=""
           style="height: auto; width:200px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <!-- Login Button -->
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="content-center">
        <h1 style="font-weight:800; font-size:60px;">Shop Your Kiddies Wears at Ease</h1>
        <p style="font-weight:500; font-size:20px;">Discover the best kiddies' fashion at affordable prices.</p>
        <a href="shop.php" class="btn btn-primary btn-lg" style="font-weight:600; font-size:20px;">Shop Now</a>
    </section>



    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 PreGlo Kiddies. All rights reserved.</p>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/assets/bootstrap.bundle.min.js"></script>
</body>
</html>