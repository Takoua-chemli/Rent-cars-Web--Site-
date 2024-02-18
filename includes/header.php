<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Menu</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>
    <header>
    <nav>
        <ul class='nav-bar'>
            <li class='logo'><a href='#'><img src=''/></a></li>
            <input type='checkbox' id='check' />
            <span class="menu">
            <li><a href="index.php">Home</a>    </li>
            <li><a href="page.php?type=aboutus">About Us</a></li>
            <li><a href="car-listing.php">Car Listing</a>
            <li><a href="page.php?type=faqs">FAQs</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li class="search">
             <input type="text" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
                </li>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
    </header>
</body>
</html>

<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    font-family: "Poppins", sans-serif;
    
}
header {
    position: sticky;
    top: 0;
    z-index: 1000; /* Set a z-index value to ensure it appears above other elements */
    backdrop-filter: blur(10px); /* Add this line for the blurred effect */
   /* Add a semi-transparent background color */
}
.nav-bar {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    position: relative;
    background: rgb(238,26,26);
background: radial-gradient(circle, rgba(238,26,26,1) 0%, rgba(6,6,6,1) 100%);
    padding: 12px 20px;
}
.logo img {
    width: 120px;
     cursor: pointer;
   }
.menu {display: flex;}
.menu li {padding-left: 30px;}
.menu li a {
    display: inline-block;
    text-decoration: none;
    color: #FDFEFE;
    text-align: center;
    transition: 0.15s ease-in-out;
    position: relative;
    text-transform: uppercase;
}
.menu li a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color:#FDFEFE;
    transition: 0.15s ease-in-out;
}
.menu li a:hover:after {width: 100%;}
.open-menu , .close-menu {
    position: absolute;
    color:#FDFEFE;
    cursor: pointer;
    font-size: 1.5rem;
    display: none;
}
.open-menu {
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
.close-menu {
    top: 20px;
    right: 20px;
}
#check {display: none;}
@media(max-width: 610px){
    .menu {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -100%;
        z-index: 100;
        background: rgb(238,26,26);
background: radial-gradient(circle, rgba(238,26,26,1) 0%, rgba(6,6,6,1) 100%);
        transition: all 0.2s ease-in-out;
    }
    .menu li {margin-top: 40px;}
    .menu li a {padding: 10px;}
    .open-menu , .close-menu {display: block;}
    #check:checked ~ .menu {right: 0;}
  
}
search {
    display: flex;
    align-items: center;
}

.search input {
    padding: 8px;
    border: none;
    border-radius: 4px;
}

.search button {
    background-color: var(--color1);
    color: var(--color2);
    border: none;
    padding: 8px;
    margin-left: 8px;
    cursor: pointer;
}


  </style>