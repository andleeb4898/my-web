

<?php
session_start();
include('connection.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FUSION</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
/*card slider css*/

/*card slider css*/

.card{

border-radius:30px ;
margin:3rem 3rem;
height:35rem;
width:28rem;



}
.image:hover{
  
      height:40rem;
      width:30rem;


}
.image{

  border-top-left-radius:30px  ;
  border-top-right-radius: 30px;

}
.cartbtn{
background-color:#2F3074;
color:white;
height:3rem;
width:10rem;
margin-left:1rem ;
}
.cartbtn:hover{
background:#1C193D;
color:white;

}
.card-text{

font-size:30px;




}
.card-title,cartbtn{
  font-size:23px;
}
.card-box{
display:flex;
flex-direction:row;
justify-content: space-evenly;
align-items: space-evenly;

}
.btn-btn{

    background:#2F3074;
    color:white;

}



        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Fusion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Catogaries
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                    
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="woman.php">women</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="girls.php">Girls</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/Pret_d173a797-9230-4b41-b359-8e23128a7d2e.webp')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1></h1>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        
                    <!-- Post preview-->
                    <!-- start cards -->
<div class="card-box">
<div class="card" >
  <img src="images/0U3ESG22V819_4 (1).png" class="image card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><strong>3 Piece - Embroidered Jacquard Suit</strong></h5>
    <h4 class="card-text text-center">PKR-7500</h4>
    <a href="woman.php" class=" cartbtn  text-center btn btn-light"><strong>ADD to Cart</strong></a>
  </div>
</div>

<div class="card" >
  <img src="images/U3E-SG22V8-10_2.png" class="image card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><strong>Khadar -2pc-Suit</strong></h5>
    <h4 class="card-text text-center">PKR-5000</h4>
    <a href="woman.php" class=" cartbtn  text-center btn btn-light"><strong>ADD to Cart</strong></a>
  </div>
</div>
<div class="card" >
  <img src="images/e1.png" class="image card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><strong>Embroidered-Kurta
</strong></h5>
    <h4 class="card-text text-center">PKR-4500</h4>
    <a href="woman.php" class=" cartbtn  text-center btn btn-light"><strong>ADD to Cart</strong></a>
  </div>
</div>
<div class="card" >
  <img src="images/PEESG22V1210_1.png" class="image card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><strong>3 Piece - Embroidered Jacquard Suit</strong></h5>
    <h4 class="card-text text-center">PKR-3000</h4>
    <a href="woman.php" class=" cartbtn  text-center btn btn-light"><strong>ADD to Cart</strong></a>
  </div>
</div>
</div>




                    <!-- end of cards-->
                   
                    <!-- Post preview-->
                    <!-- start cards -->

                   
                    
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-btn text-uppercase" href="contact.php">CONTACT  Us</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; fusion Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
