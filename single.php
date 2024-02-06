<?php
 $con = mysqli_connect("localhost","root","","vetements");
if(isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];
  $req4 = mysqli_query($con , "SELECT * FROM produits WHERE id = '$product_id'");
}else{
  header('location: ingo.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads Boutique</title>
   <!-- <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="styl.css">-->
    <link rel="stylesheet" href="css/singl.css">
    <link rel="stylesheet" href="css/styleXX.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"/>
</head>
<body>
  
<div class="header">
        <a href="#" id="logo">shopMe <span>.</span></a>
        <nav class="navbar">
        <a href="ingo.php">Home</a>
        <a href="clothes.php">clothes</a>
        <a href="#">about</a>
       <a href="#">Contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-bar"></div>
            <div class="fas fa-shopping-cart" id="shop-cart"></div>
            <div class="fas fa-search" id="search-bar"></div>
           <a href="login.php" id="form-open"><div class="fas fa-user"id="form-open" id='login-form'onclick="document.getElementById('login-page').style.display='block'" style="width:auto;"></div></a> 
        </div>

        <div class="search-box">
            <input type="search" placeholder="search here">
        </div>
        <!-- shoping cart -->

        <div class="shopping-cart">
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
        </div>

        <!-- shoping cart ended  -->

    </div>
    

        <!-- shoping cart ended  -->   
    <section id="prodetails" class="section-p1">
    <?php
           while($row = mysqli_fetch_assoc($req4)){
            //affichons les informations
            echo ' 
        <div class="single-pro-img">
            <img src="img/'.$row['image'].'" width="100%" id="MainImg" alt="">

            <div class="small-img-group">   
   
                    <div class="small-img-col">
                        <img src="img/'.$row['image'].'" width="100%"  class="small-img" alt="">
                    </div>    
                    <div class="small-img-col">
                        <img src="img/'.$row['image'].'" width="100%"  class="small-img" alt="">
                    </div>    
                    <div class="small-img-col">
                        <img src="img/'.$row['image'].'" width="100%"  class="small-img" alt="">
                    </div>  
                    <div class="small-img-col">
                        <img src="img/'.$row['image'].'" width="100%"  class="small-img" alt="">
                    </div>    
             </div>  
             
        </div>

        <div class="single-pro-details">
          <h6>Home/ clothes</h6>
          <h4>'.$row['titre'].'</h4>
          <h2>'.$row['prix'].' </h2>
         <select>
          <option>Select Size</option>
          <option>XL</option>
          <option>XXL</option>
          <option>S</option>
          <option>L</option>
          <option>M</option>
         </select>
        
         <form method="POST" action="cart.php">
         <input type="hidden" name="product_id" value='.$row['id'].'/>
         <input type="hidden" name="product_image" value='.$row['image'].'/>
         <input type="hidden" name="product_name" value='.$row['titre'].'/>
         <input type="hidden" name="product_price" value='.$row['prix'].'/>
          <input type="number" name="product_quantity" value="1">
          <button class="normal" type="submit" name="add_to_cart">Add To Cart</button>
          </form>
          <h4>Product Details</h4>
          <span>'.$row['description'].'</span>
        </div>
        ';
           }
           ?>
    </section>   
        <footer class="section__container footer__container">
      <div class="footer__col">
        <h4 class="footer__heading">CONTACT INFO</h4>
        <p>
          <i class="ri-map-pin-2-fill"></i> 123, London Bridge Street, London
        </p>
        <p><i class="ri-mail-fill"></i> support@monsa.com</p>
        <p><i class="ri-phone-fill"></i> (+213) 3456 6789</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">COMPANY</h4>
        <p>Home</p>
        <p>About Us</p>
        <p>Work With Us</p>
        <p>Our Blog</p>
        <p>Terms & Conditions</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">USEFUL LINK</h4>
        <p>Help</p>
        <p>Track My Order</p>
        <p>Men</p>
        <p>Women</p>
        <p>Shoes</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">Our Social Network</h4>
        <p>If you have any seggestions or inquiries, contact us througt our social Network
          shown below
        </p>
        <div class="social-link">
          <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-google-plus"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </footer>

    <hr />

    <div class="section__container footer__bar">
      <div class="copyright">
        Copyright © Trendy Threads Boutique. All rights reserved.
      </div>
      <div class="footer__form">
        <form>
          <input type="text" placeholder="ENTER YOUR EMAIL" />
          <button class="btn" type="submit">SUBSCRIBE</button>
        </form>
      </div>
    </div>

     </section>            
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>
</body>             
</html>