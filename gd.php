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
    <link rel="stylesheet" href="gd.css">
    <link rel="stylesheet" href="style.css">
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
        <h2>GARDER COLLECTION</h2>
        <p>New Arrivals</p>
        <div class="pro-cont">
            <div class="pro">
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://c91c3c982cd2296581e1-2751fb2ef0ac9c796a59d48739fed575.lmsin.net/homecentre/1000013076343-1000013076342_01-2100.jpg" alt="garden product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gardenia Rancher Plus Set of 3 Metal Floor Planters</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012458919-1000012458918_03-2100.jpg "alt="Clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Alpine Polyresin Tree and Peeble Fountain - 22x34x20cm</h5>
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
                <img src=https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012613528-1000012613527_01-2100.jpg alt="Lamp" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Artificial Hanging Creepers in Pot</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008585456-1000008585455_03-2100.jpg" alt="mirror" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Artificial Leaves</h5>
                    <br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹349</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008735124-1000008735123_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Artificial Pine Sticks</h5>
                    <br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012540934-1000012540933_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Artificial Flower Stick - 71cm</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008585500-1000008585499_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Rose Artificial Flower</h5>
                    <br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹349</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000012929318-1000012929317_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Alpine Carnival Polyresin Fountain - 13x20cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹899</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000013832364-1000013832363_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Austin Metal Embossed Plante</h5>
                    <br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012540925-1000012540924_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Artificial Tiger Lily Stick - 82cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹549</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012458922-1000012458921_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Alpine Polyresin Pot-to-Pot Fountain - 18x15x25cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹3439</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012535163-1000012535162_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Natural Dried Dates Stick- 75cm </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹349</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000006361217-1000006361216-3518_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Botanical Fern Artificial Plan</h5>
                    <br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000008586247-1000008586246_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Cascade Floating Lotus Plastic Artificial Flowe</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹159</h4>
                </div>
              <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000011298471-1000011298470_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Eden Dried Flower Arrangement in Ceramic Pot </h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012852018-1000012852017_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Lets Garden Ceramic Planter</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹149</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000010463292-1000010463291_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Corsica Cascade Polyresin Modern Fountain - 21x17x25cm</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000012794708-1000012794707_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gardenia Set of 2 Metal Planters with Stand </h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000012514134-1000012514133_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gardenia Artificial Mum Flowers in Pot</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000005223008-1000005223007_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gardenia Artificial Rose Flowers in Ceramic Pot</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012524330-1000012524329_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Garnet Gardenia Artificial Banana Croton Plant in Pot</h5>
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
                <img src="https://lmsin.net/cdn-cgi/image/h=750,w=750,q=85,fit=cover/https://aaeff43fe32172cbcecc-ae2a4e9a8cbc330ede5588dedf56886e.lmsin.net/homecentre/1000012497563-1000012497562_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Sepia Set of 3 Wooden Tiered Photo Frames </h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012525055-1000012525054_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Artificial Plants in Ceramic Planter </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹899</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000010968422-1000010968421_01-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Cairo Metal Planter Stand </h5>
                    <br>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹899</h4>
                </div>
               <i class="fal fa-shopping-cart cart"></i>
            </div>
            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012524038-1000012524037_02-2100.jpg" alt="1st product" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Ceramic Pig Planter </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹899</h4>
                </div>
                <i class="fal fa-shopping-cart cart"></i>
            </div>

            <div class="pro">
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012524026-1000012524025_02-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Ceramic Rabbit Planter</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012524032-1000012524031_01-2100.jpg" alt="figuriness" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Ceramic Giraffe Planter</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012524029-1000012524028_01-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Gloria Ceramic Owl Planter</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="price">₹299</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://media-us.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012723203-1000012723202_02-2100.jpg" alt="clock" class="product-img" >
                <div class="des">
                    <h5 class="product-title">Gloria Ceramic Ribbed Planter</h5>
                    <br>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012523987-1000012523986_02-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Garnet Garden Artificial Flower in Ceramic Planter</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012523987-1000012523986_02-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Garnet Garden Artificial Flower in Ceramic Planter</h5>
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
                <img src="https://media-uk.landmarkshops.in/cdn-cgi/image/h=750,w=750,q=85,fit=cover/homecentre/1000012523987-1000012523986_02-2100.jpg" alt="clock" class="product-img">
                <div class="des">
                    <h5  class="product-title">Garnet Garden Artificial Flower in Ceramic Planter</h5>
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
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateCartCount(); // Update cart count
    updatetotal();
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
        var price = parseFloat(priceElement.innerText.replace("₹", ""));
        var quantity = quantityElement.value;
        total += price * quantity;
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName("Total-price")[0].innerText = "₹" + total;
}

function updateCartCount() {
    let cartItems = document.getElementsByClassName("cartbox").length;
    cartBadge.innerText = cartItems;
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







</script>
</body>
</html>
