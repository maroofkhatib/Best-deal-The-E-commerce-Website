<!DOCTYPE html>
<html>
<head>
<title>Best Deal: The E-commerce store</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet"/>
<link href="styles/bootstrap.min.css" rel="stylesheet"/>
<link href="styles/style.css" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<body>
<div id="top">
<div class="container">

<div class="col-md-6 offer">
  <a href="#" class="btn btn-success btn-sm">
  Welcome:Guest
</a>
<a href="#" >
Shopping Cart Total Prize : $200,Total Items 2
</a>
</div>
<div class="col-md-6">
  <ul class="menu">
     <li>
       <a href="customer_register.php">
       Register
       </a>


     </li>
    <li>
      <a href="checkout.php">
      My Account
      </a>
    </li>
    <li>
      <a href="cart.php">
      Go To Cart
      </a>
    </li>
    <li>
      <a href="checkout.php">
      Login
      </a>
    </li>

  </ul>
</div>
</div>


</div>
<div class="navbar navbar-default" id="navbar">
  <div class="conatainer">
    <div class="navbar-header">
      <a class="navbar-brand home" href="index.php">
         <img src="images/logo.png" alt="Bestdeal ka photo hoona chiiaye yaaha but aapna logo nahi hai issliye mene yeh daala hai" class="hidden-xs" />
         <img src="images/logo-small.png" alt="Yaha bhi same bd ka phot chiaye" class="visible-xs" />
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
      <span class="sr-only">Toggle Navigation</span>
      <i class="fa fa-align-justify"></i>
      </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
      <span class="sr-only">Toggle search</span>
      <i class="fa fa-search"></i>
      </button>

    </div>
    <div class="navbar-collapse collapse" id="navigation">
             <div class="padding nav">
               <ul class="nav navbar-nav navbar-left">
                 <li class="active">

                   <a href="index.php">Home</a>
                 </li>
                 <li>
                   <a href="checkout.php">My Account</a>
                 </li>
                 <li>
                   <a href="shop.php">Shop</a>
                 </li>
                 <li>
                   <a href="cart.php">Shopping Cart</a>
                 </li>
                 <li>
                   <a href="Contact.php">Contact Us</a>
                 </li>
               </ul>
               <a class="btn btn-primary navbar-btn right" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
               <span>4 items in cart </span>


               </a>
             </div>

             <div class="navbar-collapse collapse right">
               <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
               <span class="sr-only">Toggle Search</span>
               <i class="fa fa-search"></i>

               </button>

             </div>


    </div>
    <div class="collapse clearfix" id="search">
      <form class="navbar-form" method="get" action="results.php">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search" name="user_query" required/>
          <span class="input-group-btn">
          <button type="submit" value="search" name="search" class="btn btn-primary">
          <i class="fa fa-search"></i>
          </button>
</span>
        </div>

      </form>
    </div>
  </div>
</div>

<div class="container" id="slider"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Starts --->

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

<li data-target="#myCarousel" data-slide-to="1"></li>

<li data-target="#myCarousel" data-slide-to="2"></li>

<li data-target="#myCarousel" data-slide-to="3"></li>


</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner">
     <div class="item active">
       <img src="admin_area/slides_images/1.jpg" />
     </div>
     <div class="item">
       <img src="admin_area/slides_images/2.jpg" />
     </div>
     <div class="item">
       <img src="admin_area/slides_images/3.jpg" />
     </div>
     <div class="item">
       <img src="admin_area/slides_images/4.jpg" />
     </div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a>
</div>
</div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
