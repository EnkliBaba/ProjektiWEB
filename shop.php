<?php
session_start();

class Database {
    private $host = 'localhost';
    private $db_name = 'shop';
    private $username = 'root'; 
    private $password = ''; 
    public $conn;

    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

class Product {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    public function getAllProducts() {
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    public function register($username, $password, $email) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);
        
        return $stmt->execute();
    }
}


$productObj = new Product();
$userObj = new User();


$products = $productObj->getAllProducts();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($password) && !empty($email)) {
        if ($userObj->register($username, $password, $email)) {
            echo "Regjistrimi ishte i suksesshëm!";
        } else {
            echo "Dështoi regjistrimi!";
        }
    } else {
        echo "Të gjitha fushat janë të detyrueshme.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<section id="header">
    <a href="#"><img src="images/orgi/logo1.png" class="logo" alt="" width="130px" height="50px"></a>
    <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="card.php"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="login.php"><button class="btnLogin">Login</button></a></li>
            <a href="#" id="close"><i class="fas fa-times"></ i></a>
        </ul>
    </div>
    <div id="mobile">
        <li><a href="card.php"><i class="fas fa-shopping-cart"></i></a></li>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header">
    <h2>#stayathome</h2>
    <p>Save more with coupons & up to 70% off</p>
</section>

<section id="slider">
    <div class="slides">
        <div class="slide fade">
            <img src="images/slider1.jpg" style="width:100%">
        </div>
        <div class="slide fade">
            <img src="images/slider2.jpg" style="width:100%">
        </div>
        <div class="slide fade">
            <img src="images/slider3.jpg" style="width:100%">
        </div>
    </div>
</section>

<section id="product1" class="section-p1">
    <div class="pro-container">
        <?php foreach ($products as $product): ?>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="<?php echo $product['image']; ?>" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5><?php echo $product['name']; ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$<?php echo number_format($product['price'], 2); ?></h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart" style="color: #088178;"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-right-long"></i></a>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstexts">
        <h4>Sign Up For NewsLetters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>


<footer class="section-p1">
    <div class="cool">
        <img src="images/orgi/logo1.png" class="logo" alt="" width="130px" height="50px"></a>
        <h4>Contact</h4>
        <p><strong>Address:</strong>500 Rruga C, Bedri Berisha, Prishtine </p>
        <p><strong>Phone:</strong> +383 48 xxx xxx/ +383 49 xxx xxx</p>
        <p><strong>Hours:</strong> 10:00 - 18:00 Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="images/pay/app.jpg" alt="">
            <img src="images/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="images/pay/pay.png" alt="">
    </div>
</footer>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex - 1].style.display = "block";  
    setTimeout(showSlides, 2000);
}
</script>

</body>
</html>