<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart clone</title>
    <link rel="icon" href="logo-2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="Product.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="" id="logo-img">
        </div>
        <div class="search">
            <input type="text" name="" id="search-bar" placeholder="Search for products, brands and more">
        </div>
        <div class="login">
            <button class="login-btn">Login</button><br>
            <!--<div class="login-dropdown-icon">
                <i class="material-icons" id="login-dropdown-arrow">arrow_drop_up</i>
            </div> -->
            <div class="login-dropdown">
                <div class="login-dropdown-items">
                    <ul>
                        <li id="new-customer"><a href="signup.html">New Customer?</a></li>
                        <li><a href="profile.html">My Profile</a></li>
                        <!--<li><a href="#">Flipkart Plus Zone</a></li>-->
                        <li><a href="orders.html">Orders</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <!--<li><a href="#">Rewards</a></li>-->
                        <!--<li><a href="#">Gift Cards</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <nav>
            <div class="nav-link1">
                <div class="become-seller"><a href="#">Become a Seller</a></div>
            </div>
            <div class="nav-link2">
                <div class="more-options"><a href="#">More</a>
                    <span>
                        <i class="material-icons" id="expand-more-icon">expand_more</i>
                    </span>
                    <div class="more-options-dropdown">
                        <div class="more-options-dropdown-items">
                            <ul>
                                <li><a href="#">Notification Preferences</a></li>
                                <li><a href="#">24/7 Customer Care</a></li>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">Download App</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-link3">
                <div class="cart">
                    <span>
                        <a href="cart.html"><i class="material-icons" id="cart-icon">shopping_cart</i></a>
                    </span><a href="cart.html">Cart</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="menu">
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="offers.jpg" alt="top offers icon">
                <p>Top Offers</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="mobile.jpg" alt="mobiles icon">
                <p class="menu-option-heading">Mobiles</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="fashion.jpg" alt="fashion icon">
                <p class="menu-option-heading">Fashion</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="electronics.jpg" alt="electronics icon">
                <p class="menu-option-heading">Electronics</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="beauty.png" alt="beauty icon">
                <p class="menu-option-heading">Beauty</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="furniture.jpg" alt="furniture icon">
                <p class="menu-option-heading">Home & Furniture</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="appliances.jpg" alt="appliances icon">
                <p class="menu-option-heading">Appliances</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="travel.jpg" alt="travel icon">
                <p class="menu-option-heading">Travel</p>
            </div>
        </div>
        <div class="menu-option">
            <div class="menu-option-info">
                <img src="grocery.jpg" alt="grocery icon">
                <p class="menu-option-heading">Grocery</p>
            </div>
        </div>
    </div>

   <div class="carousel-slide " >
        <img src="slider-1.png" alt="image is coming" id="last-clone">
        <img src="slider-2.jpeg" alt="image is coming">
        <img src="slider-3.jpeg" alt="image is coming">
        <img src="slider-4.jpeg" alt="image is coming">
        <img src="slider-1.png" alt="image is coming">
        <img src="slider-2.jpeg" alt="image is coming" id="first-clone">
    </div>
   
    <button class="slider-btn" id="prev-btn"><i class="material-icons"
            style="font-size: 46px;padding: 32px 0px;">chevron_left</i></button>
    <button class="slider-btn" id="next-btn"><i class="material-icons"
            style="font-size: 46px;padding: 32px 0px;">chevron_right</i></button>

    <div class="discount">
        <img src="discount.png" alt="image about discount" id="discount-img">
    </div><br><br>
    <div class="sale-galary-1">
        <img style="height: 210px; border-radius: 25px;" src="galary-img.png" alt="sale image">
        <img style="height: 210px; border-radius: 25px;" src="Card1.jpg" alt="sale image">
        <img  style="height: 210px; border-radius: 25px;" src="Card2.jpg" alt="sale image">
    </div>
    
    <!-------------------------------Product Section-------------------------------------------->
    <!-- sales and banner -->
    <div class="" >
        <div class="container-fluid bg-white pb-2 border" style="height: fit-content;">
            <div class="product-header">
                <div class="">
                    <h3>Deals Of the Day</h3>
                </div>
                <div class=" ">
                    <div>
                        <button class="">View All</button>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="product-section">
                <div class="card text-center sales">
                   <a href="p.html"><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
                        src="TV.png"></a>

                    <div class="card-body p-1" title="From ₹490">
                        <h6 class="card-title">Dell TV</h6>
                        <a href="#" class="card-link">From ₹9,999</a>
                        <p class="card-subtitle text-muted">Logitech, Quantum & more</p>
                    </div>
                </div>
<!---->
                <div class="card ">
                   <a href="iphone.html"> <img style="height: 110px;" class="card-img-top p-2 ml-5 img-fluid w-50" alt=""
                        src="Product/iphone.webp"></a>
                    <div class="card-body p-1" title="5000 mAh Battery">
                        <h6 class="card-title">Apple iPhone 13 (Midnight, 128 GB)</h6>
                        <a href="#" class="card-link">128 GB ROM</a>
                        <p class="card-subtitle text-muted">Now ₹52,999</p>
                    </div>
                </div>
<!---->
                <div class="card ">
                    <a href="laptop.html"><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
                        src="Product/laptop.webp"></a>
                    <div class="card-body p-1" title="Upto 50% Off">
                        <h6 class="card-title">HP Laptop</h6>
                        <a href="#" class="card-link">Upto 50% Off</a>
                        <p class="card-subtitle text-muted">Intel Core i3 11th Gen - </p>
                    </div>
                </div>
<!---->
                <div class="card ">
                    <a href="keybord.html"><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
                        src="keybord.webp"></a>
                    <div class="card-body p-1" title="Min 50% Off">
                        <h6 class="card-title">Portronics Key5 Combo 
                        </h6>
                        <a href="#" class="card-link">Min 50% Off</a>
                        <p class="card-subtitle text-muted">Now ₹2,000 </p>
                    </div>
                </div>
<!---->
                <div class="card ">
                  <a href="printer.html">  <img style="height: 110px;" class="card-img-top p-2 img-fluid w-100"
                        alt=""
                        src="printer.webp"></a>
                    
                    <div class="card-body p-1" title="50-80% Off">
                        <h6 class="card-title">Canon PIXMA TS207 Single Function Color printer
                        </h6>
                        <a href="#" class="card-link">50-80% Off</a>
                        <p class="card-subtitle text-muted">Canon</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<br>
<hr>
<br>
<!----------------------------Second-Product-line---------------------------------------->
<div class="product-section" >
    <div class="card text-center sales" style="margin-left: 50px;">
       <a href="cycle.html"><img style="height: 110px; " class="card-img-top p-2 img-fluid w-100" alt=""
            src="cycle.webp"></a>

        <div class="card-body p-1" title="EMotorad X1 Blue 27.5 inches ">
            <h6 class="card-title">EMotorad X1 Blue 27.5 inches</h6>
            <a href="#" class="card-link">From ₹20,999</a>
            <p class="card-subtitle text-muted">EMotorad X1 Blue 27.5 inches Single cycle
            </p>
        </div>
    </div>
<!---->
    <div class="card ">
       <a href=""> <img style="height: 120px;" class="card-img-top p-2 ml-5 img-fluid w-50" alt=""
            src="violin.webp"></a>
        <div class="card-body p-1" title="musical works ">
            <h6 class="card-title">musical works 564487 4/4 Semi- Acoustic Violin 
            </h6>
            <a href="#" class="card-link">Upto 20% off</a>
            <p class="card-subtitle text-muted">Now ₹3,999</p>
        </div>
    </div>
<!---->
    <div class="card ">
        <a href=""><img style="height: 110px; " class="card-img-top p-2 img-fluid w-100" alt=""
            src="toycar.webp"></a>
        <div class="card-body p-1" title="Upto 50% Off">
            <h6 class="card-title">Kidsmate Junior  Kids/Baby Tricycle, Storage Basket, Cushion Seat, Seat Belt With Parental Control </h6>
            <a href="#" class="card-link">Upto 50% Off</a>
            <p class="card-subtitle text-muted">Now ₹5,000</p>
        </div>
    </div>
<!---->
    <div class="card ">
        <a href=""><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
            src="vivo.webp"></a>
        <div class="card-body p-1" title="">
            <h6 class="card-title">vivo Y200 5G (Jungle Green, 128 GB)  (8 GB RAM)

            </h6>
            <a href="#" class="card-link">Min 70% Off</a>
            <p class="card-subtitle text-muted">Now ₹22,000 </p>
        </div>
    </div>
<!---->
    <div class="card ">
      <a href="">  <img style="height: 110px;" class="card-img-top p-2 img-fluid w-100"
            alt=""
            src="trim.webp"></a>
        
        <div class="card-body p-1" title="50-80% Off">
            <h6 class="card-title">PHILIPS S1121/45 Shaver For Men  (Black, Blue)

            </h6>
            <a href="#" class="card-link">₹2,045</a>
            <p class="card-subtitle text-muted">PHILIPS </p>
        </div>
    </div>
</div>
</div>
<br>
<hr>
<br>

<!--------------------------------3ed-Producr-Line------------------------------------------->

<div class="" >
    <div class="container-fluid bg-white pb-2 border" style="height: fit-content;">
        <div class="product-header">
            </div>
            </div>
        
        <div class="product-section">
            <div class="card text-center sales">
               <a href="p.html"><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
                    src="TV.png"></a>

                <div class="card-body p-1" title="From ₹490">
                    <h6 class="card-title">Dell TV</h6>
                    <a href="#" class="card-link">From ₹9,999</a>
                    <p class="card-subtitle text-muted">Logitech, Quantum & more</p>
                </div>
            </div>
<!---->
            <div class="card ">
               <a href="iphone.html"> <img style="height: 110px;" class="card-img-top p-2 ml-5 img-fluid w-50" alt=""
                    src="iphone.webp"></a>
                <div class="card-body p-1" title="5000 mAh Battery">
                    <h6 class="card-title">Apple iPhone 13 (Midnight, 128 GB)</h6>
                    <a href="#" class="card-link">128 GB ROM</a>
                    <p class="card-subtitle text-muted">Now ₹52,999</p>
                </div>
            </div>
<!---->
            <div class="card " >
                <a href="laptop.html"><img style="height: 110px; " class="card-img-top p-2 img-fluid w-100" alt=""
                    src="laptop.webp"></a>
                <div class="card-body p-1" title="Upto 50% Off">
                    <h6 class="card-title">HP Laptop</h6>
                    <a href="#" class="card-link">Upto 50% Off</a>
                    <p class="card-subtitle text-muted">Intel Core i3 11th Gen - </p>
                </div>
            </div>
<!---->
            <div class="card ">
                <a href="keybord.html"><img style="height: 110px;" class="card-img-top p-2 img-fluid w-100" alt=""
                    src="keybord.webp"></a>
                <div class="card-body p-1" title="Min 50% Off">
                    <h6 class="card-title">Portronics Key5 Combo 
                    </h6>
                    <a href="#" class="card-link">Min 50% Off</a>
                    <p class="card-subtitle text-muted">Now ₹2,000 </p>
                </div>
            </div>
<!---->
            <div class="card ">
              <a href="">  <img style="height: 110px;" class="card-img-top p-2 img-fluid w-100"
                    alt=""
                    src="printer.webp"></a>
                
                <div class="card-body p-1" title="50-80% Off">
                    <h6 class="card-title">Canon PIXMA TS207 Single Function Color printer
                    </h6>
                    <a href="#" class="card-link">50-80% Off</a>
                    <p class="card-subtitle text-muted">Canon</p>
                </div>
            </div>
        </div>
    </div>
    
</div>

</div>
    <!--------------------------------------------Footer------------------------------------------------------------------------------------->
    <br>
    <footer>
        <div class="footer-row">
            <div class="footer-menu">
                <div class="footer-menu-item">
                    <div class="heading">
                        <h6>ABOUT</h6>
                    </div>
                    <div class="items">
                        <a href="#">Contact Us</a>
                        <a href="#">About Us</a>
                        <a href="#">Careers</a>
                        <a href="#">Flipkart Stories</a>
                        <a href="#">Press</a>
                        <a href="#">Flipkart Wholesale</a>
                        <a href="#">Corporate Information</a>
                    </div>
                </div>
                <div class="footer-menu-item">
                    <div class="heading">
                        <h6>HELP</h6>
                    </div>
                    <div class="items">
                        <a href="#">Payments</a>
                        <a href="#">Shipping</a>
                        <a href="#">Cancellation & Returns</a>
                        <a href="#">FAQ</a>
                        <a href="#">Report Infringement</a>
                    </div>
                </div>
                <div class="footer-menu-item">
                    <div class="heading">
                        <h6>POLICY</h6>
                    </div>
                    <div class="items">
                        <a href="#">Return Policy</a>
                        <a href="#">Terms Of Use</a>
                        <a href="#">Security</a>
                        <a href="#">Privacy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">ERP Compliance</a>
                    </div>
                </div>
                <div class="footer-menu-item">
                    <div class="heading">
                        <h6>SOCIAL</h6>
                    </div>
                    <div class="items">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">YouTube</a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="footer-contact">
                <div class="contact-address">
                    <div class="heading">
                        <h6>Mail Us:</h6>
                    </div>
                    <div class="items">
                        <p>
                            Flipkart Internet Private Limited, <br>
                            Buildings Alyssa, Begonia &<br>
                            Clove Embassy Tech Village,<br>
                            Outer Ring Road, Devarabeesanahalli Village,<br>
                            Bengaluru, 560103,<br>
                            Karnataka, India
                        </p>
                    </div>
                </div>
                <div class="contact-address">
                    <div class="heading">
                        <h6>Registered Office Address:</h6>
                    </div>
                    <div class="items">
                        <p>
                            Flipkart Internet Private Limited,<br>
                            Buildings Alyssa, Begonia &<br>
                            Clove Embassy Tech Village,<br>
                            Outer Ring Road, Devarabeesanahalli Village,<br>
                            Bengaluru, 560103,<br>
                            Karnataka, India<br>
                            CIN : U51109KA2012PTC066107<br>
                            Telephone: <span style="color: rgb(88, 88, 247);">044-45614700</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-other">
            <div class="item">
                <div class="icon">
                    <i class="material-icons footer-icons">business_center</i>
                </div>
                <div class="text">
                    Become a Seller
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="material-icons footer-icons">add_circle</i>
                </div>
                <div class="text">
                    Advertise
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="material-icons footer-icons">card_giftcard</i>
                </div>
                <div class="text">
                    Gift Cards
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="material-icons footer-icons">help</i>
                </div>
                <div class="text">
                    Help Center
                </div>
            </div>
            <div class="item">
                <div class="text">
                    2007-2022 Flipcart.com
                </div>
            </div>
            <!-- <div class="payment-cards">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
                <img src="img/visa.png" alt="payment-option">
            </div>
        </div> -->
    </footer>

    <script src="script1.js"></script>
</body>



</html>
