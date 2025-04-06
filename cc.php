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
    <title>Casablanca Collectionn</title>
    <link rel="stylesheet" href="clock.css">
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
        <h2>Casablanca Collection</h2>
        <div class="pro-cont">
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008584310-1000008584309_01-2100.jpg" alt="garden product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Double-Sided Station Clock</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1999</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528899-1000012528898_01-2100.jpg" alt="Clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Aspire Classic Wall Clock - 30cm</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528902-1000012528901_01-2100.jpg" alt="Lamp" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Glass Map Printed Wall Clock - 30cm</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528914-1000012528913_01-2100.jpg" alt="mirror" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Luxe Aluminium Wall Clock - 30cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1299</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012555990-1000012555989_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Table Clock </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹299</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012559750-1000012559749_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Table Clock with Calendar </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1099</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528941-1000012528940_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Metal Classical Station Clock - 33x34cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1999</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013076802-1000013076801_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Glass Wall Clock - 35cm</h5>
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
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008613905-1000008613904_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Glass Wall Clock - 30cm </h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528896-1000012528895_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Classic Look Wall Clock - 35cm</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000007202189-1000007202188_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Wall Clock - 40cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012559723-1000012559722_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Glass Wall Clock - 35cm</h5>
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
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000010041115-1000010041114_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Metal Wall Clock - 30cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹699</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528959-1000012528958_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Wooden Wall Clock - 30cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹499</h4>
                </div>
              <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012573766-1000012573765_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corvus 3Pcs Decorative Clock and Mirror Set </h5>
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
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013880242-1000013880241_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Fiesta Mac Wall Clock - 30cm </h5><br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012559708-1000012559707_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Glass Alarm Clock - 16cm </h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012528950-1000012528949_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Metal Anchor Wall Clock - 39x19cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008584314-1000008584313_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Wall Clock - 60cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2199</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012560306-1000012560305_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Casablanca Digital Table Clock and Pen Stand </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹699</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012898195-1000012898194_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Lets Garden Riviera Wooden Printed Wall Clock - 9x47.5cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹649</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079400-1000014079399_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Kiki Wood Camera Table Clock </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079150-1000014079149_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Kyoto Metal Table Clock - 21x21cm
                    </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1849</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079144-1000014079143_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Fisher Wooden Table Clock </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1999</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079130-1000014079129_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Yug Metal Table Clock - 28cm </h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079126-1000014079125_01-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <span>adidias</span>
                    <h5  class="product-title">VEDAS Sayan Metal Wall Clock - 30cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹1539</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079122-1000014079121_01-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Rylan Heritage Wooden Wall Clock - 46cm</h5><br>
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
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079104-1000014079103_01-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Joy Metal Cycle Wall Clock - 33cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2599</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079090-1000014079089_01-2100.jpg" alt="clock" class="product-img" >
                <div class="des">
                    <h5 class="product-title">VEDAS Vivian Metal Wall Clock - 46cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2599</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000014079078-1000014079077_01-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">VEDAS Zubin Wooden Wall Clock - 36 cm</h5><br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹2699</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

        </div>
    </div>
    </section>
    <section>
        <div class="cartTab">
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
    <!-- <script src="script.js"></script> -->
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
