<?php
session_start();
if(isset($_POST['add_to_cart'])){

    //if user has already added a product to cart
    if(isset($_session['cart'])){
        $products_array_ids = array_column($_SESSION['cart'],"product_id");

        if( !in_array($_POST['product_id'], $products_array_ids)){
         

            $product_array= array(
                'id' =>  $_POST['product_id'],
                'name' => $_POST['product_name'],
                'prix' => $_POST['product_price'],
                'image' => $_POST['product_image'],
                'quantity' => $_POST['product_quantity'],
              );
              $_SESSION['cart'][$product_id] =  $product_array; 
        }else{
         
          echo  "<script
       alert('Product was already to cart ');
       </script>";
        
        }
    
    //if this is the first product
     }else{
            $product_id = $_POST['product_id'];
            $product_titre = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_image = $_POST['product_image'];
            $product_quantity = $_POST['product_quantity'];
  
        $product_array= array(
            'id' => $product_id,
            'titre' => $product_titre,
            'prix' => $product_price,
            'image' => $product_image,
            'quantity' => $product_quantity,
  
     );

     $_SESSION['cart'][$product_id] =  $product_array;

    }


    //caculate total
    calculateTotalCart();



//remove product from cart
}else if(isset($_POST['remove_product'])){

      $product_id=$_POST['product_id'];
      unset($_SESSION['cart'][$product_id]);
    


}else if(isset($_POST['edit_quantity'])){
  //get id and quantity from the form
  $product_id=$_POST['product_id'];
  $product_quantity=$_POST['product_quantity'];

  //get the product array from the session
  $product_array = $_SESSION['cart'][$product_id];

  //update product quantity
  $product_array['quantity'] = $product_quantity;

  //return array back its place
  $_SESSION['cart'][$product_id] = $product_array;
}else{
    header('location:clothes.php');
}

function calculateTotalCart(){
  $total = 0;

  foreach($_SESSION['cart'] as $key => $value){
     
    $product = $_SESSION['cart'][$key];
    $price = $product['prix'];
    $quantity = $product['quantity'];
    $total = $total + ($price * $quantity);
  }
  $_SESSION['total'] = $total;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads Boutique</title>
    <link rel="stylesheet" href="css/styleXX.css">
    <link rel="stylesheet" href="cart.css">
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
        <a href="#">Blog</a>
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
    </div>
 <!-- cart  -->
 <header>
 <section class="cart container my-5 py-5">
  <div class="container mt-5">
    <h2 class="font-weight-bolde">Your Cart</h2>
    <hr>
  </div>
  <table class="mt-5 pt-5">
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>

    <?php foreach($_SESSION['cart'] as $key =>$value){?>
    <tr>
        <td>
            <div class="product-info">
                <img src="img/<?php echo $value['image'];?>" alt=""/>
                <div>
                   <p> <?php echo $value['titre'];?></p>
                   <small><span>$</span><?php echo $value['prix'];?></small>
                   <br>
                   <form method="POST" action="cart.php">
                   <input type="hidden" name="product_id" value="<?php echo $value['id'];?>"/>
                   <input type="submit" name="remove-product"class="remove-btn" value="remove"/>
                   </form>
                  
                </div>
            </div>
        </td>
        <td>
          <form method="POST" action="cart.php">
            <input type="hidden" name="product_id" value="<?php echo $value['id'];?>">
            <input type="number" name="product_quantity" value="<?php echo $value['quantity'];?>">
            <input type="submit" class="edit-btn" value="edit" name="edit_quantity"/>
          </form>
        </td>
        <td>
            
        <span class="product_price"><?php echo $value['prix'] ;?></span>
        </td>
    </tr>
   <?php }?>
    
</table>
   <div class="cart-total">
    <table>
        <!--tr>
            <td>Subtotal</td>
            <td>$177</td>
        </tr-->
        <tr>
            <td>Total</td>
            <td><?php echo $_SESSION['total'];?></td>
            
        </tr>
        </tr>
    </table>
   </div>
<div class="checkout-container">
  <form  method="POST" action="checout.php" ></form>
    <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
</div>
 
 </section>
</header>









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
  
  
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script src="script.js"></script>
    </body>
  </html>
  