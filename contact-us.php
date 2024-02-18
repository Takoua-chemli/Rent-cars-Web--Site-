<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
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
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style>
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


<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>

  .body{
    background color: #000;;
  }
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}



*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color:#EA301D;

}
section::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background:#F4F6F6 ;
}

.container
{
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 1000;
    /* border-radius: 22px; */
     background-color: #fff; 

}

.container .contactInfo
{
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #21618C;
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 25px rgba(0,0,0,0.15); 
    border-radius: 22px;
}

.container .contactInfo h2
{
    color: #fff;
    font-size:24px;
    font-weight: 500;
}

.container .contactInfo ul.info 
{
   position: relative;
   margin: 20px 0; 
}

.container .contactInfo ul.info li
{
   position: relative;
   list-style: none;
   display: flex;
   margin: 20px 0;
   cursor: pointer;
   align-items: flex-start;
}

.container .contactInfo ul.info li span:nth-child(1)
{
    width: 30px;
    min-width: 30px;
}

/* for gmail */
.container .contactInfo ul.info li span a
{
    color: #fff;
    text-decoration: none;
    width: 30px;
    min-width: 30px;
    
}

.container .contactInfo ul.info li span:nth-child(1) img
{
    max-width: 100%;
    filter: invert(1);
}

.container .contactInfo ul.info li span:nth-child(2)
{
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
}

.container .contactInfo ul.sci
{
    position: relative;
    display: flex;
}

.container .contactInfo ul.sci li
{
   list-style: none;  
   margin-right: 15px;
}

.container .contactInfo ul.sci li a
{
   text-decoration: none;
}

.container .contactInfo ul.sci li a img
{
   filter: invert(1);
}

.container .contactForm
{
    position: absolute;
    padding: 70px 50px;
    padding-left: 250px;
    margin-left: 150px;
    width: calc(100% - 150px);
    height: 100%;
    background: #fff; 
    box-shadow: 0 50px 50px rgba(0,0,0,0.25);
    border-radius: 22px;
}

.container .contactForm h2
{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}

.container .contactForm .formBox
{
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}

.container .contactForm .formBox .inputBox
{
    position: relative;
    margin-bottom: 35px;
}

.container .contactForm .formBox .inputBox.w50
{
    width: 47%;
}

.container .contactForm .formBox .inputBox.w100
{
    width: 100%;
}

.container .contactForm .formBox .inputBox input,
.container .contactForm .formBox .inputBox textarea 
{
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color:#D82310;
    border: none;
    outline: none;
    border-bottom: 1px solid #777;
}

.container .contactForm .formBox .inputBox textarea 
{
    height: 120px;
}

.container .contactForm .formBox .inputBox span 
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 18px;
    font-weight: 300;
    transition: 0.3s;
}

.container .contactForm .formBox .inputBox input:focus ~ span,
.container .contactForm .formBox .inputBox input:valid ~ span,
.container .contactForm .formBox .inputBox textarea:focus ~ span, 
.container .contactForm .formBox .inputBox textarea:valid ~ span
{
    transform: translateY(-20px);
    font-size:  12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #D82310;
    font-weight: 500;
} 

/* Css for the submit button */
.container .contactForm .formBox .inputBox input[type="submit"]         
{
    position: relative;
    cursor: pointer;
    background: #21618C ;
    border-radius: 20px;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;

}

.container .contactForm .formBox .inputBox input[type="submit"]:hover{
    background:#D82310 ;
}

/* make the form responsive */
@media (max-width: 1200px)
{
    .container
    {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }

    .container .contactInfo
    {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
    }

    .container .contactForm
    {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
        border-radius: 0px;
    }
}

@media (max-width: 991px)
{
    section
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #fff38e;
    }

    section::before
    {
        display: none;
    }

    

    .container .contactForm
    {
      display: flex;
        flex-direction: column-reverse;
        width: 100%;
        height: auto;
        border-radius: 0px;
    }

    .container .contactInfo
    {
      display: flex;
        flex-direction: column-reverse;
        width: 100%;
        height: auto;
        flex-direction: row;
        border-radius: 0px;
    }
    .container .contactInfo ul.sci
    {
      display: flex;
        flex-direction: column-reverse;
       position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
    }
}

@media (max-width: 600px)
{
    .container .contactForm
    {
        padding: 25px;
    }

    .container .contactInfo{
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }

    .container .contactInfo ul.sci
    {
        margin-top: 40px;
    }

    .container .contactForm .formBox .inputBox.w50
    {
        width: 100%;
    }
}
    </style>
</head>
<body>

        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 


<!-- /Page Header--> 

<!--Contact-us-->
<div class="container d-flex justify-content-center align-items-center">
	
	<!-- // SVG
					from: https://www.freepik.com/free-vector/new-message-concept-landing-page_5777076.htm 
  -------------------------------------------------------------
  -- Note: need to use inline svg to manipulate its components
  ------------------------------------------------------------>

	
	<!-- // FORM
  -------------------------------------------------------------
  ------------------------------------------------------------>
	
	<section>
            <div class="container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="assets/images/location.png"></span>
                                <span>Rent a Car situé au mahdia <br>
                                pres de couchet Sfar<br>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span><img src="assets/images/mail.png"></span>
                                <!-- <span>hosniboubakerr@gmail.com</span> -->
                                <span><a href = "mailto: hosniboubakerr@gmail.com">hosniboubakerr@gmail.com</a></span>
                            </li>
                            <li>
                                <span><img src="assets/images/call.png"></span>
                                <span>98 45 84 09 - 20 91 36 94</span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/attaysir.rentcar.tunis?mibextid=ZbWKwL"><img src="assets/images/1.png"></a></li>
                        <li><a href="https://www.instagram.com/#_/?hl=el"><img src="assets/images/3.png"></a></li>
                        
                        
                    </ul>
                </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
                    
                    
             
        </section>

<!-- /Contact-us--> 




</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
