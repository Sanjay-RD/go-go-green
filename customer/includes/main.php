</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <!-- <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div> -->
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="/ecommerce-website-php/index.php">
            <!-- <img class="logo__img" src="images/logo.png" alt="Avenue fashion logotype" width="237" height="19"> -->
            <h1 class="logo__img">Go Go Green</h1>
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="ecommerce-website-php/index.php">
                Home
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                Categories
               <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown-1 dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <!-- <div class="dropdown__heading">Account Settings</div> -->
                    <ul class="dropdown__items">
                      <?php
                          $get_p_cats = "select * from product_categories where p_cat_top='yes'";

                          $run_p_cats = mysqli_query($con,$get_p_cats);

                          while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];


                            echo "

                              <li class='dropdown__item'>

                              <a href='index.html' class='dropdown__link'>


                            $p_cat_title

                            </a>

                            </li>

                            ";


                          }

                          $get_p_cats = "select * from product_categories where p_cat_top='no'";

                          $run_p_cats = mysqli_query($con,$get_p_cats);

                          while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];


                            echo "
                            <li class='dropdown__item'>

                            <a href='index.html' class='dropdown__link'>


                            $p_cat_title

                            </a>

                            </li>

                            ";


                            }

                          ?>
                    </ul>
                    
                  </div>
                  <!-- <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edit Your Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Change Password</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
                      </li>
                    </ul>
                  </div> -->
                </div>
                
              </div>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Shop
              </a>
            </li>

            <!-- <li class="categories__item">
              <a class="categories__link" href="localstore.php">
                Local Stores
              </a>
            </li> -->

          <li class="categories__item cart__value">
            <?php
if(!isset($_SESSION['customer_email'])){
  echo '
        <a class="categories__link" href="checkout.php">
          Sign In
        </a>
  ';
} 
  else
  { 
      echo '
              <a class="categories__link" href="customer/my_account.php?my_orders">
                  My Account
                  <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="my_account.php?my_wishlist" class="dropdown__link">My Wishlist</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?my_orders" class="dropdown__link">My Orders</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?my_orders" class="dropdown__link">View Shopping Cart</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="my_account.php?edit_account" class="dropdown__link">Edit Your Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?change_pass" class="dropdown__link">Change Password</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?delete_account" class="dropdown__link">Delete Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="./logout.php" class="dropdown__link">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>
      ';
  }   
?> 
              

            </li>

            <li class="categories__item">
              <a class="categories__link cart_navbar" href="cart.php" style="
                  font-size: 15px;
                  background: #d7d7d7;
                  border-radius: 50%;
                  padding: 17px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  margin-top: 16px;
              ">
                <i class="icon-basket"></i>
                <span class="cart__icon"><?php items(); ?></span>
                
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>