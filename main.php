<?php
// Always include this file first
require_once 'main.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomelyHaven</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .cart-count {
    background-color: #ff4757;
    color: white;
    border-radius: 50%;
    padding: 2px 8px;
    font-size: 10px;
    position: absolute;
    top: -4px;
    right: -2px;
}
</style>
</head>
<body>
    <section id="header">
        <img src="logo.png" alt="logo" class="logo" >

        <div>
            <ui id="navbar">
                <li><a class="active" href="">Home</a></li>
                <li id="n1"><a href="">Shop</a></li>
                <li id="n1"><a href="">About</a></li>
                <li id="n1"><a href="">Contact</a></li>
                <li><a href="signup.html"><i class="fa-solid fa-user"></i></a></li>
                <li><i class="fa-solid fa-cart-shopping" id="carticon"></i>
                <span id="cart-count" class="cart-count">0</span>
            </li>


            </ui>
        </div>

    </section>

    <section id="feature" class="section-p1">

        <a href="gd.html"><div class="fe-box">
            <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://c91c3c982cd2296581e1-2751fb2ef0ac9c796a59d48739fed575.lmsin.net/homecentre/1000013076343-1000013076342_01-2100.jpg" alt="Garden">
            <h6>Garden</h6>
        </div></a>

        <a href="PF.html"><div class="fe-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHG-xr3H2DOBC2ScKvkbEqmMaVZa_ap0p-0QLnsSYDUg&s" alt="photo frames ">
            <h6>Photo Frames</h6>
        </div></a>

        <a href="clock.html"><div class="fe-box">
            <img src="https://images.meesho.com/images/products/280922244/nucgf_512.webp" alt="Clock">
            <h6>Clock</h6>
        </div></a>

        <a href="lamps.html"><div class="fe-box">
            <img src="https://images.meesho.com/images/products/273653070/u2ktb_512.webp" alt="Lamps">
            <h6>Lamps</h6>
        </div></a>

        <a href="mirrors.html"><div class="fe-box">
            <img src="https://m.media-amazon.com/images/I/817+LyvA1DL._AC_UF894,1000_QL80_.jpg" alt="Mirrors">
            <h6>Mirrors</h6>
        </div></a>

        <a href="figuriness.html"><div class="fe-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyjcdMYib_bRgjfuVMg9NxoJcCFWkoxT420uW7i37gyQ&s" alt="Figuriness">
            <h6>Figuriness</h6>
        </div></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>New Collection</p>
        <div class="pro-cont">
            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://c91c3c982cd2296581e1-2751fb2ef0ac9c796a59d48739fed575.lmsin.net/homecentre/1000013076343-1000013076342_01-2100.jpg" alt="garden product"  class="product-img">
                <div class="des">
                    <h5 class="product-title">Gardenia Rancher Plus Set of 3 Metal Floor Planters
                    </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹5999</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012559714-1000012559713_01-2100.jpg" alt="Clock" class="product-img">
                <div class="des">
                    <h5 class="product-title">Corsica Wooden Wall Clock</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹799</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012869291-1000012869290_01-2100.jpg" alt="Lamp" class="product-img">
                <div class="des">
                    <h5 class="product-title">Albama Vogue Metal Set of 2 Touch Table Lamps</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2799</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000011268273-1000011268272_01-2100.jpg" alt="mirror" class="product-img">
                <div class="des">
                    <h5 class="product-title">Reflection Flicker Metal Rectangular Wall Mirror</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹4999</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012497563-1000012497562_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5 class="product-title">Sepia Set of 3 Wooden Tiered Photo Frames </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012514575-1000012514574_01-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <span>adidias</span>
                    <h5 class="product-title">Corsica Kadence Polyresin African Flute Figurine</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1039</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000010207571-1000010207570_01-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <h5 class="product-title">Corsica Harmony Polyresin Ganesha Figurine</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹399</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000006731352-1000006731351_01-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5 class="product-title">Casablanca Glass Station Wall Clock</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4  class="price">₹1599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
        </div>
        
    </section>


    <section id="product1" class="section-p1">
        <h2>TOP SELLING</h2>
        <p>New Collection</p>
        <div class="pro-cont">
            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012509898-1000012509897_01-2100.jpg" alt="1st product">
                <div class="des">
                    <h5 class="htag">Gloria Collection</h5>  
                </div>
            </div>
            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012559720-1000012559719_01-2100.jpg" alt="Casablanca">
                <div class="des">
                        <h5 class="htag">Casablanca Collection</h5>  
                </div>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000008811727-1000008811726_02-2100.jpg" alt="Stellar">
                <div class="des">
                        <h5 class="htag">Stellar Collection</h5>  
                </div>

            </div>

            <div class="pro">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4ygLY_rC4pwlr6LXpmdKIyB52PGoVOyinPEXHopuACw&s" alt="figuriness">
                <div class="des">
                        <h5 class="htag">figuriness Collection</h5>  
                </div>

            </div>

            <div class="pro">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS2kD0SSAdjhv2NCP7h7Yiru2FJN0DRvEj1rlaxV_6Qw&s" alt="Wall Decor">
                <div class="des">
                        <h5 class="htag">Wall Decor Collection</h5>  
                </div>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://c91c3c982cd2296581e1-2751fb2ef0ac9c796a59d48739fed575.lmsin.net/homecentre/1000012948605-1000012948604_01-2100.jpg" alt="photo frames">
                <div class="des">
                        <h5 class="htag">Photo Frames Collection</h5>  
                </div>
            </div>

            <div class="pro">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC4cG2OU1BFtSaG1FKZzHu0sBofD1Ml4_MEDXVRPnc3A&s" alt="mirror">
                <div class="des">    
                        <h5 class="htag">Mirrors  Collection</h5>  
                </div>
            </div>

            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000013032363-1000013032362_02-2100.jpg" alt="lamps">
                <div class="des">
                        <h5 class="htag">Lamps Collection</h5>  
                </div>
            </div>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>JUST ARRIVED</h2>
        <div class="pro-cont"> 
        <div class="pro">
        <img  src="https://lmsin.net/cdn-cgi/image/w=616,q=70,fit=cover/https://b37db184fa09e5ba0292-662caecad9dd967cd19824f80fb1538c.lmsin.net/Home-Centre/Test-UI/Desktop-2-1-Decor-816x400-Block2-08Feb2024.jpg" alt="golden collection">
        </div>

        <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/w=616,q=70,fit=cover/https://b37db184fa09e5ba0292-662caecad9dd967cd19824f80fb1538c.lmsin.net/Home-Centre/Test-UI/Desktop-2-1-Decor2-816x400-Block2-08Feb2024.jpg" alt="blossomcollection">
        </div>

        <div class="pro">
            <img src="https://lmsin.net/cdn-cgi/image/w=616,q=70,fit=cover/https://b37db184fa09e5ba0292-662caecad9dd967cd19824f80fb1538c.lmsin.net/Home-Centre/Test-UI/Desktop-2-1-Decor3-816x400-Block2-08Feb2024.jpg" alt="eternity">
        </div>

        <div class="pro">
            <img src="https://hometown.gumlet.io/media/cms/icons/wall-clocks.jpg?w=1140&dpr=1.3" alt="eternity">
        </div>
        </div>
        

    </section> 
    <section>
    <div class="cartTab" style="overflow-y:auto ;">
        <h1 class>Shopping Cart</h1>
        <div class="cartcontent">

        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="Total-price">₹0</div>
        </div>
        <button type="button" class="btn-buy">Buy Now</button>
        <div class="btn">
            <i class="bx bx-x" id="close-cart"></i>
        </div>
    </div>
    </section>
    <footer id="footers">
        <div class="footer-container">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>
                    We are a team of passionate individuals dedicated to providing the best services in the industry. Our mission is to deliver quality and excellence in everything we do.
                </p>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: HomelyHeaven@gmail.com</p>
                <p>Phone: 8421062364 , 7058218273</p>
                <p>Address: MGM Clg Of Engineering , Nanded, India</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Homely Heaven. All rights reserved.
        </div>
   
    </footer>
    <script src="script.js"></script>
    <script>
             var isLoggedIn = false;

function alertLogin() {
    alert("Please first log in."); 
}

// Attach click event to components
function attachClickEvents() {
    document.querySelectorAll(' #product1, #footers, #feature, #n1').forEach(function(element) {
        element.onclick = function(event) {
            if (!isLoggedIn) {
                event.preventDefault(); 
                alertLogin(); // Show alert
            }
        };
    });
}
attachClickEvents();

// window.onload = function () {
//     if (sessionStorage.getItem("isLoggedIn") == "true") {
//         window.location.href = "home.php"; // Redirect to the main page
//     }
// };
    </script>
    </body>
</html>