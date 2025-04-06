<?php
session_start(); // Start the session

// Assuming user data is stored in the session after login
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30 Grid Layout with Images</title>
    <link rel="stylesheet" href="mirrors.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .profile img {
            width: 30px;
            height: 30px; 
            border-radius: 50%;
            cursor: pointer;
        }
        .profile-info {
              position: absolute;
              top: 80px;
              right:30px;
              background-color: #ffffff;
              color: #000000;
              padding: 10px;
              border-radius: 4px;
              box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
              display: none;
          }
          .profile-info p {
              margin: 0;
              font-size: 14px;
          }
          .profile-info p:first-child {
              font-weight: bold;
              margin-bottom: 5px;
          }
          .profile-info button {
              margin-top: 10px;
              padding: 5px 10px;
              background-color: #4285f4;
              color: #ffffff;
              border: none;
              border-radius: 4px;
              cursor: pointer;
          }
          .profile-info button:hover {
              background-color: #357ae8;
          }
     
        </style>
</head>
<body>
    <section id="header">
        <img src="logo.png" alt="logo" class="logo" >

        <div>
            <ui id="navbar">
                <li><a  href="./home.php">Home</a></li>
                <li><a href="gd.php">Shop</a></li>
                <li><a href="#footers">About</a></li>
                <li><a href="#footers">Contact</a></li>
                <li>
                <div class="profile" onclick="toggleProfileInfo()">
                <img alt="Profile Picture"  height="30" src="https://storage.googleapis.com/a1aa/image/bC4oSBVoEr7fX6Aix5zAuDzsJyViIVIfSs2wQB5HtnaQI40TA.jpg" width="30"/></li>
                
                <li><i class="fa-solid fa-cart-shopping" id="carticon"></i>
                <span id="cart-count" class="cart-count">0</span>
            </li>
            </ui>
        </div>
    </section>
    <div class="profile-info" id="profileInfo">
        <p>Your Account</p>
        <p>Email:  <?=htmlspecialchars($user['email']); ?></p>
        <a href="logout.php"><button>Log out</button></a>
    </div>
    <section id="product1" class="section-p1">
        <h2>MIRRORS COLLECTION</h2>
        <p>New Arrivals</p>
        <div class="pro-cont">
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000011137353-1000011137352_01-2100.jpg" alt="garden product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Reflection Round Decorative Mirror - 39cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1749</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012573784-1000012573783_01-2100.jpg" alt="Clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Corvus Set of 3 Decorative Wall Mirrors</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹719</h4>
                </div>
                     <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012573766-1000012573765_01-2100.jpg" alt="Lamp" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corvus 3Pcs Decorative Clock and Mirror Set</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <h4 class="price">₹1499</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012599874-1000012599873_01-2100.jpg" alt="mirror" class="product-img">
                <div class="des">
                    <h5  class="product-title">Panorama Fresco Metal Floral Decorative Wall Mirror - 49cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1799</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011154-1000013011153_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Mansion Polypropylene Window Decorative Wall Mirror - 50x71.5cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1499</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012531192-1000012531191_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Rectangular Wall Mirror - 55x45cm</h5><br><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹799
                    </h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011157-1000013011156_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Neo Polypropylene Decorative Wall Mirror - 47.5x65cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1199</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012531183-1000012531182_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Square Wall Mirror - 50x50cm</h5><br><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹999</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012508394-1000012508393_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Splendid Dastkari Wooden Decorative Vanity Mirror </h5><br><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1279 </h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011139-1000013011138_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Classic Polypropylene Round Decorative Wall Mirror - 50.5cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1199</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012825357-1000012825356_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Ananda Carnival Set of 3 Modern Mirrors</h5><br><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1439</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000011268255-1000011268254_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Broadway Gold Framed Rectangular Wall Mirror </h5><br><br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000011268273-1000011268272_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Flicker Metal Rectangular Wall Mirror - 60x90cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹4999                    </h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011142-1000013011141_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Classic Polypropylene Round Decorative Wall Mirror - 50.5cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1199</h4>
                </div>
              <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011148-1000013011147_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Geophy Polypropylene Window Decorative Wall Mirror - 38x56cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹999</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011145-1000013011144_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Geophy Polypropylene Modern Mirror - 38x56cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹999</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013011160-1000013011159_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Reflection Neo Polypropylene Wall Mirror - 47.5x65cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1199</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRBCkmw2CVONH71C6enW4E1V7W_UiVUUlGXN7zoHuOHgjUJEQCs9i4PVqulU3Iwi8nZibTkZDTeMBrGefCUv8x1r8gyBxnyLw&usqp=CAY" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">THE HANDMADE FLAIR Gold-Toned Irregular Mirror </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹719</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTT62hAeaRuqgs4ZRkDgAAWpjeXUwvIWpn0GKi0iHSmbMAfNVgttY2x6pzy6cL9iSnbZ8fzOakcb7tUJbbCGWzLBTe9P6UWMbtV1WoKx0M" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gaperz Wall Mirror For Bedroom Modern Mirror </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹254</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRuob6GJRX5Us1iZdrgD1ZDigRdiK3vnSsIZSzBlrQcYq_kSiTcGXyBOZdDoTOi7VoaGY87kv2jEUt6JeLuJMpjABd6iZU0XKXqJ6D_sqs" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Glamo Large LED Smart Mirror</h5><br><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1,100</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
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

    <script>
        let iconCart = document.querySelector("#carticon");
let cartBadge = document.querySelector("#cart-count"); // Cart count badge
let body = document.querySelector("body");
let closeCart = document.querySelector("#close-cart");

iconCart.addEventListener("click", () => {
    body.classList.toggle("showCart");
});

closeCart.addEventListener("click", () => {
    body.classList.toggle("showCart");
});

if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready() {
    loadCart(); // Load cart items from localStorage
    updatetotal(); // Update total after loading cart
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button

    var removeCartButtons = document.getElementsByClassName("cart-remove");
    updateActiveLink(); // Update active link on page load

    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    var addCart = document.getElementsByClassName("cart");
    for (var i = 0; i < addCart.length; i++) {
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }

    document
        .getElementsByClassName("btn-buy")[0]
        .addEventListener("click", buyButtonClicked);
}

function buyButtonClicked() {
    alert("Your order is placed successfully");
    var cartContent = document.getElementsByClassName("cartcontent")[0];
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updateCartCount(); // Reset cart count
    updatetotal();
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateCartCount(); // Update cart count
    updatetotal();
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updatetotal();
}

function addCartClicked(event) {
    updateActiveLink(); // Update active link when adding to cart

    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;

    addProductToCart(title, price, productImg);
    updatetotal();
    updateCartCount(); // Update cart count when item is added
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function addProductToCart(title, price, productImg) {
    saveCart(); // Save cart items to localStorage

    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cartbox");
    var cartItems = document.getElementsByClassName("cartcontent")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");

    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText == title) {
            alert("You have already added this item to the cart");
            return;
        }
    }

    var cartBoxContent = `
        <img src="${productImg}" alt="" class="cart-img">
        <div class="detailbox">
            <div class="cart-product-title">${title}</div>
            <div class="cart-price">${price}</div>
            <input type="number" value="1" class="cart-quantity">
        </div>
        <i class="fal fa-trash-alt cart-remove"></i>
    `;

    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);

    cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
    cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);

    updateCartCount(); // Update cart count when item is added
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function updatetotal() {
    saveCart(); // Save cart items to localStorage after total update

    var cartContent = document.getElementsByClassName("cartcontent")[0];
    var cartBoxes = cartContent.getElementsByClassName("cartbox");
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("₹", "").trim());

        var quantity = quantityElement.value;
        total += price * quantity;
    }
    total = Math.round(total * 100) / 100; 
    console.log("Total calculated:", total); // Debugging log

    document.getElementsByClassName("Total-price")[0].innerText = "₹" + total;
}

function updateCartCount() {
    let cartItems = document.getElementsByClassName("cartbox").length;
    cartBadge.innerText = cartItems;
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function updateBuyNowButtonVisibility() {
    const buyNowButton = document.getElementsByClassName("btn-buy")[0];
    const cartItems = document.getElementsByClassName("cartbox").length;
    buyNowButton.style.display = cartItems > 0 ? "block" : "none"; // Show button if items are present
}

function saveCart() {
    const cartItems = [];
    const cartBoxes = document.getElementsByClassName("cartbox");
    for (let i = 0; i < cartBoxes.length; i++) {
        const cartBox = cartBoxes[i];
        const title = cartBox.getElementsByClassName("cart-product-title")[0].innerText;
        const price = cartBox.getElementsByClassName("cart-price")[0].innerText;
        const quantity = cartBox.getElementsByClassName("cart-quantity")[0].value;
        cartItems.push({ title, price, quantity });
    }
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function loadCart() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartContent = document.getElementsByClassName("cartcontent")[0];
    cartContent.innerHTML = ''; // Clear existing cart content
    cartItems.forEach(item => {
        const cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cartbox");
        cartShopBox.innerHTML = `
            <img src="placeholder.jpg" alt="" class="cart-img">
            <div class="detailbox">
                <div class="cart-product-title">${item.title}</div>
                <div class="cart-price">${item.price}</div>
                <input type="number" value="${item.quantity}" class="cart-quantity">
            </div>
            <i class="fal fa-trash-alt cart-remove"></i>
        `;
        cartContent.append(cartShopBox);
        cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
        cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);
    });
    updateCartCount(); // Update cart count based on loaded items
    updateBuyNowButtonVisibility(); // Update visibility of Buy Now button
}

function updateActiveLink() {
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll("#navbar a");
    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
}

function toggleProfileInfo() {
            var profileInfo = document.getElementById('profileInfo');
            if (profileInfo.style.display === 'block') {
                profileInfo.style.display = 'none';
            } else {
                profileInfo.style.display = 'block';
            }
        }

        function logout() {
          // Redirect to logout.php to handle session destruction
          window.location.href = 'logout.php';
      }

    </script>
</body>
</html>
