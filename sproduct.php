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
            <li><a  href="index.php">Home</a></li>
            <li><a  href="shop.php">Shop</a></li>
            <li><a  href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="card.php"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="login.php"><button class="btnLogin">Login</button></a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <li><a  href="card.php"><i class="fas fa-shopping-cart"></i></a></li>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/Products/product1.jpg" width="100%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="images/Products/product1.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/Products/product2.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/Products/product3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/Products/product4.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / Jackets</h6>
            <h4>CROPPED FAUX FUR JACKET</h4>
            <h2>$69.95</h2>
            <select>
                <option>Select Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>XL</option>
            </select>
            <input type="number" value="1" min="0">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed est orci.
            Morbi arcu tellus, mattis cursus metus vel, gravida aliquam augue. Proin semper 
            auctor arcu, eu vestibulum odio pellentesque sed. Integer vitae malesuada sapien. 
            Nam ac elit eu turpis fringilla imperdiet quis at mi. Vestibulum nec ante sit amet arcu
            rhoncus ultrices ornare a arcu. Nam auctor pretium mi. Vivamus ut nisi sem. Nam quis ex diam.
            Quisque at ullamcorper purus. Sed euismod imperdiet nibh ut facilisis. Integer volutpat dapibus 
            varius. Suspendisse a elementum lacus. Donec sit amet turpis est. Sed sit amet urna vitae quam 
            maximus sodales. Ut placerat, neque nec scelerisque interdum, tortor massa molestie erat, ut sodales
            felis felis eget eros.</span>
        </div>
    </section>

     <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Collection</p>
        <div class="pro-container">
                       <div class="pro">
                            <img src="images/Products/product2.jpg" alt="">
                            <div class="des">
                                <span>Zara</span>
                                <h5>COLLECTION FAUX FUR JACKET</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$89.95</h4>
                            </div>
                            <a href="#"><i class="fa-solid fa-cart-shopping cart" style="color: #088178;"></i></a>
                            </div>
                            <div class="pro">
                                <img src="images/Products/product3.jpg" alt="">
                                <div class="des">
                                    <span>Zara</span>
                                    <h5>DOUBLE-FACED SHORT JACKET</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>$59.95</h4>
                                </div>
                                <a href="#"><i class="fa-solid fa-cart-shopping cart" style="color: #088178;"></i></a>
                                </div>
                                <div class="pro">
                                    <img src="images/Products/product8.jpg" alt="">
                                    <div class="des">
                                        <span>Zara</span>
                                        <h5>OVERSIZED BLACK HOODIE</h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4>$27.95</h4>
                                    </div>
                                    <a href="#"><i class="fa-solid fa-cart-shopping cart" style="color: #088178;"></i></a>
                                    </div>
                                    <div class="pro">
                                        <img src="images/Products/product7.jpg" alt="">
                                        <div class="des">
                                            <span>Zara</span>
                                            <h5>OPEN CROPPED BLAZER</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>$39.95</h4>
                                        </div>
                                        <a href="#"><i class="fa-solid fa-cart-shopping cart" style="color: #088178;"></i></a>
                                        </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstexts">
            <h4>Sign Up For NewsLetters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email addres">
            <button class="normal">Sign Up</button>
        </div>
    </section>
    
    <footer class="section-p1">
        <div class="cool">
            <img class="logo" src="images/logoo.png" alt="">
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
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>

    <script src="script.js"></script>
</body>
</html>