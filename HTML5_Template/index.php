<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- ================== Font =================== -->
  <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="font/mdi-font/css/material-design-iconic-font.min.css">
  <!-- ================== Vendor CSS =================== -->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/revolution/settings.css">
  <link rel="stylesheet" type="text/css" href="vendor/revolution/navigation.css">
  <link rel="stylesheet" type="text/css" href="vendor/revolution/layers.css">
  <link rel="stylesheet" type="text/css" href="vendor/lightbox2/src/css/lightbox.css">

  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="css/font.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>









 <!-- Page Loader -->
  <div id="page-loader">
    <div class="page-loader__inner">
      <div class="page-loader__spin"></div>
    </div>
  </div>
  <!-- End Page Loader -->
  <!-- Page Wrap -->
  <div class="page-wrap">
    <!-- Header Stick -->
    <header class="header-stick">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="../index.html">
            <img alt="Logo" src="img/logo-black.png">
          </a>
        </h1>
        <nav class="menu-desktop pull-right">
          <ul class="ul--inline ul--no-style">
            <li class="li-has-sub">
              <a href="../index.html">
                Home
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../index.html">
                    Home Page 1
                  </a>
                </li>
                
            <li class="li-has-sub">
              <a href="../project-2col-v1.html">
                Projects
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../project-2col-v1.html">
                    Project 2 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-2col-v2.html">
                    Project 2 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v1.html">
                    Project 3 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v2.html">
                    Project 3 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v1.html">
                    Project 4 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v2.html">
                    Project 4 Column v2
                  </a>
                </li>
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="../service-list.html">
                Services
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../service-list.html">
                    Services List
                  </a>
                </li>
                <li>
                  <a href="../service-v1.html">
                    Services v1
                  </a>
                </li>
                <li>
                  <a href="../service-v2.html">
                    Services v2
                  </a>
                </li>
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="">
                Pages
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../portfolio-detail-v1.html">
                    Portfolio Detail v1
                  </a>
                </li>
                <li>
                  <a href="../portfolio-detail-v2.html">
                    Portfolio Detail v2
                  </a>
                </li>
                <li>
                  <a href="portfolio-detail-v3.html">
                    Portfolio Detail v3
                  </a>
                </li>
                <li>
                  <a href="about-us.html">
                    About Us
                  </a>
                </li>
                
                <li>
                  <a href="our-process.html">
                    Our Process
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="blog-list.html">
                Blog
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="blog-list.html">
                    Blog List
                  </a>
                </li>
                <li>
                  <a href="blog-detail.html">
                    Blog Detail
                  </a>
                </li>
                <li>
                  <a href="blog-2col.html">
                    Blog 2 Column
                  </a>
                </li>
                <li>
                  <a href="blog-3col.html">
                    Blog 3 Column
                  </a>
                </li>
                <li>
                  <a href="blog-4col.html">
                    Blog 4 Column
                  </a>
                </li>
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="product.php">
                Shop
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="product.php">
                    Product
                  </a>
                </li>
                <li>
                  <a href="single-product.html">
                    Product Detail
                  </a>
                </li>
                <li>
                  <a href="cart.html">
                    Cart
                  </a>
                </li>
                <li>
                  <a href="checkout.html">
                    Checkout
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact.html">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Stick -->
    <!-- Header Desktop -->
    <header class="header-desktop header1">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="../index.html">
            <img alt="logo" src="img/logo-black.png">
          </a>
        </h1>

        <div class="header-button pull-right clearfix">
          <div class="canvas-menu-button pull-right">
            <a href="#" onclick="return false;">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
          <div class="mini-cart pull-right">
            <a href="" id="cart-button" onclick="return false;">
              <i class="zmdi zmdi-case"></i>
              <span class="mini-cart-counter">2</span>
            </a>
            <div class="cart-dropdown cart-dropdown--hidden">
              <ul class="cart-list ul--no-style">
                <li>
                  <div class="cart__item">
                    <div class="img-thumb">
                      <img alt="Hand Made Chair" src="img/cart-item-01.jpg">
                      <span class="mini-cart-counter mini-cart-counter--gray">
                        1
                      </span>
                    </div>
                    <div class="pro-detail">
                      <h6>
                        <a href="single-product.html">
                          Handmade Wood Chair
                        </a>
                      </h6>
                      <p>
                        <em>
                          Price : $ 2,65
                        </em>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="cart__item">
                    <div class="img-thumb">
                      <img alt="Basket Chair" src="img/cart-item-02.jpg">
                      <span class="mini-cart-counter mini-cart-counter--gray">
                        2
                      </span>
                    </div>
                    <div class="pro-detail">
                      <h6>

                        <a href="single-product.html">
                          Basket Chair
                        </a>
                      </h6>
                      <p>
                        <em>
                          Price : $ 4.15
                        </em>
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="total-checkout">
                <p class="total">
                  Subtotal :
                  <span class="sum">
                    $10,95
                  </span>
                </p>
                <div class="checkout">
                  <a href="cart.html" class="au-btn au-btn--small au-btn--pill au-btn--border au-btn--gray m-r-15">My cart</a>
                  <a href="checkout.html" class="au-btn au-btn--small au-btn--pill au-btn--border au-btn--gray">Checkout</a>
                </div>
              </div>

            </div>
          </div>
          <div class="search-button pull-right clearfix">
            <a class="search-button__btn" href="#" onclick="return false;">
              <i class="zmdi zmdi-search"></i>
            </a>
            <form class="form form-header pull-left" role="form">
              <input type="text" id="header-input" class="form__input form__input--hidden" placeholder="Search here...">
            </form>
          </div>
        </div>
        <nav class="menu-desktop menu-desktop--show pull-right">
          <ul class="ul--inline ul--no-style">
            <li class="li-has-sub">
              <a href="../index.html">
                Home
              </a>
              
            </li>
            <li class="li-has-sub">
              <a href="../project-2col-v1.html">
                Projects
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../project-2col-v1.html">
                    Project 2 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-2col-v2.html">
                    Project 2 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v1.html">
                    Project 3 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v2.html">
                    Project 3 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v1.html">
                    Project 4 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v2.html">
                    Project 4 Column v2
                  </a>
                </li>
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="../service-list.html">
                Services
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../service-list.html">
                    Services List
                  </a>
                </li>
                <li>
                  <a href="../service-v1.html">
                    Services v1
                  </a>
                </li>
                <li>
                  <a href="../service-v2.html">
                    Services v2
                  </a>
                </li>
              </ul>
            </li>
            <li class="li-has-sub">
              <a href="">
                Pages
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="../portfolio-detail-v1.html">
                    Portfolio Detail v1
                  </a>
                </li>
                <li>
                  <a href="../portfolio-detail-v2.html">
                    Portfolio Detail v2
                  </a>
                </li>
                <li>
                  <a href="../portfolio-detail-v3.html">
                    Portfolio Detail v3
                  </a>
                </li>
                <li>
                  <a href="../about-us.html">
                    About Us
                  </a>
                </li>
                
                <li>
                  <a href="our-process.html">
                    Our Process
                  </a>
                </li>
                
              </ul>
            </li>
            
            <li class="li-has-sub">
              <a href="../product.php">
                Shop
              </a>
              <ul class="sub-menu ul--no-style">
                <li>
                  <a href="sc/">
                    Product
                  </a>
                </li>
                <li>
                  <a href="../single-product.html">
                    Product Detail
                  </a>
                </li>
                <li>
                  <a href="../cart.html">
                    Cart
                  </a>
                </li>
                <li>
                  <a href="../checkout.html">
                    Checkout
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../contact.html">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Desktop -->
    <!-- Menu Canvas -->
    <div id="menu-canvas" class="menu-canvas--hidden">
      <div class="menu-canvas__inner">
        <div class="close-menu-canvas">
          <i class="zmdi zmdi-close" id="btn-close"></i>
        </div>
        <h1 class="logo">
          <a href="../index.html">
            <img alt="Logo" src="img/logo-white.png">
          </a>
        </h1>

        <div class="menu-canvas-slide">
          <div class="menu-canvas__image">
            <div id="sync1" class="owl-carousel owl-theme">
              <div class="item">
                <img alt="Project 1" src="../img/item-menu-canvas-01.jpg">
              </div>
              <div class="item">
                <img alt="Project 2" src="../img/item-menu-canvas-02.jpg">
              </div>
            </div>
          </div>

          <div id="sync2" class="owl-carousel owl-theme">
            <p class="item menu-canvas__detail">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium
            </p>
            <p class="item menu-canvas__detail">
              Loren son perspiciatis unde omgi iste natus error sit voluptmen accusantium doloremque la udantium
            </p>
          </div>

        </div>
        <div class="social">
          <a href="" class="social__item">
            <i class="zmdi zmdi-facebook"></i>
          </a>
          <a href="" class="social__item">
            <i class="zmdi zmdi-dribbble"></i>
          </a>
          <a href="" class="social__item">
            <i class="zmdi zmdi-google"></i>
          </a>
          <a href="" class="social__item">
            <i class="zmdi zmdi-twitter"></i>
          </a>
          <a href="" class="social__item">
            <i class="zmdi zmdi-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- End Menu Canvas -->
    <!-- Header Mobile -->
    <header class="header-mobile">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="../index.html">
            <img alt="Logo" src="img/logo-black.png">
          </a>
        </h1>
        <a class="menu-mobile__button">
          <i class="fa fa-bars"></i>
        </a>
        <nav class="menu-mobile hidden">
          <ul class="ul--no-style">
            <li>
              <i class="fa fa-plus menu-mobile__more"></i>
              <a href="../index.html">
                Home
              </a>
              <ul class="ul--no-style hidden">
                <li>
                  <a href="../index.html">
                    Home Page 1
                  </a>
                
            <li>
              <i class="fa fa-plus menu-mobile__more"></i>
              <a href="../project-2col-v1.html">
                Projects
              </a>
              <ul class="ul--no-style hidden">
                <li>
                  <a href="../project-2col-v1.html">
                    Project 2 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-2col-v2.html">
                    Project 2 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v1.html">
                    Project 3 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-3col-v2.html">
                    Project 3 Column v2
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v1.html">
                    Project 4 Column v1
                  </a>
                </li>
                <li>
                  <a href="../project-4col-v2.html">
                    Project 4 Column v2
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <i class="fa fa-plus menu-mobile__more"></i>
              <a href="../service-list.html">
                Services
              </a>
              <ul class="ul--no-style hidden">
                <li>
                  <a href="../service-list.html">
                    Services List
                  </a>
                </li>
                <li>
                  <a href="../service-v1.html">
                    Services v1
                  </a>
                </li>
                <li>
                  <a href="../service-v2.html">
                    Services v2
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <i class="fa fa-plus menu-mobile__more"></i>
              <a href="../portfolio-detail-v1.html">
                Pages
              </a>
              <ul class="ul--no-style hidden">
                <li>
                  <a href="../portfolio-detail-v1.html">
                    Portfolio Detail v1
                  </a>
                </li>
                <li>
                  <a href="../portfolio-detail-v2.html">
                    Portfolio Detail v2
                  </a>
                </li>
                <li>
                  <a href="../portfolio-detail-v3.html">
                    Portfolio Detail v3
                  </a>
                </li>
                <li>
                  <a href="../about-us.html">
                    About Us
                  </a>
                </li>
               
                <li>
                  <a href="../our-process.html">
                    Our Process
                  </a>
                </li>
                
              </ul>
            </li>
            <li>
              
              <i class="fa fa-plus menu-mobile__more"></i>
              <a href="../product.html">
                Shop
              </a>
              <ul class="ul--no-style hidden">
                <li>
                  <a href="../product.html">
                    Product
                  </a>
                </li>
                
                <li>
                  <a href="../cart.html">
                    Cart
                  </a>
                </li>
                <li>
                  <a href="checkout.html">
                    Checkout
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact.html">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Mobile -->
    <!-- Slider -->

























<h1 align="center">Products </h1>

<!-- View Cart Box Start -->
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<tbody>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$product_color = $cart_itm["product_color"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class="'.$bg_color.'">';
		echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}
	echo '<td colspan="4">';
	echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->


<!-- Products List Start -->
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM products ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="images/{$obj->product_img_name}"></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price} 
	
	<fieldset>
	
	<label>
		<span>Color</span>
		<select name="product_color">
		<option value="Black">Black</option>
		<option value="Silver">Silver</option>
		</select>
	</label>
	
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	</div></div>
	</form>
	</li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
<!-- Products List End -->




 <script src="vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="vendor/wow/wow.min.js" type="text/javascript"></script>
  <script src="vendor/lightbox2/src/js/lightbox.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/popper.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/bootstrap.min.js" type="text/javascript"></script>
  <script src="vendor/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <script src="vendor/revolution/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="vendor/revolution/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <!-- Local Revolution -->
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.video.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': false,
        'alwaysShowNavOnTouchDevices': true,
      });
    });
  </script>

  <!-- =================== CUSTOM JS ==================== -->
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/revo-custom.js"></script>
  <script type="text/javascript" src="js/wow-custom.js"></script>











   <footer>
      <div class="overlay overlay--dark">
      </div>
      <div class="parallax parallax--footer">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12">
              <h1>
                <a href="../index.html">
                  <img alt="Logo" src="img/logo-white.png">
                </a>
              </h1>
              <form method="post" class="form-footer">
                <input type="text" name="name" class="form__input" placeholder="Your Email...">
                <button type="submit" class="au-btn au-btn--yellow au-btn--white au-btn--submit">Send</button>
              </form>
              <ul class="ul--inline ul--footer">
                <li>
                  <a href="../service-list.html">Service</a>
                </li>
                <li>
                  <a href="../product.html">Product</a>
                </li>
                <li>
                  <a href="../portfolio-detail-v1.html">Gallery</a>
                </li>
               
                <li>
                  <a href="../contact.html">Contact</a>
                </li>
              </ul>
             
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Copyright -->
    <section class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            Copyright © 2017 Designer by
            <span>asha and    jairam</span> . All rights reserved
          </div>
        </div>
      </div>
    </section>
    <!-- End Copyright -->
    <!-- Back to top -->
    <a href="" id="btn-to-top">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End Back to top -->
  </div>















</body>
</html>
