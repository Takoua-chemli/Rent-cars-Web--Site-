<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Attaysir Rentcar </title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
        
<!--Header-->
<?php include('includes/header.php');?>
                      <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)

foreach($results as $result)
 ?>
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1><?php   echo htmlentities($result->PageName); ?></h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><?php   echo htmlentities($result->PageName); ?></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<!-- /About-us--> 

    
    <section class="aboutUs">
        <h1></h1>
        <div>
            <img src="assets\images\about_us_img1.jpg" alt="" srcset="">
            <p> <br>Attaysir Rentcar vous offre une expérience de location de voiture exceptionnelle avec une flotte diversifiée et un service client exceptionnel.<br>
              Nous sommes engagés envers la transparence totale, sans frais cachés. Nos véhicules bien entretenus garantissent confort et fiabilité, assurant une conduite sans souci. Choisissez Attaysir Rentcar pour une liberté de voyage inégalée et créez des souvenirs inoubliables à chaque kilomètre.</p>
        </div>
    </section>
    
</body>
</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    text-align: center;
}
body {
  background: rgb(98,8,8);
background: linear-gradient(90deg, rgba(98,8,8,0.8239670868347339) 26%, rgba(15,14,14,1) 100%);
  }
section{
    margin:0 20rem;

}
section div{
     display:block;
    padding: 0.5rem;
}
section h1{
    font-family: 'Metal Mania', cursive;
    font-size: 1.5rem;
    margin: 1rem ;
}
section img{
    height:200px;
    width: 200px;
    object-fit: cover;
    border-radius: 50%;
    float:left;
    margin: 1.5rem;
}
section p{
    text-align: left;
    color:white;
    font-size: 2rem;
}

</style>