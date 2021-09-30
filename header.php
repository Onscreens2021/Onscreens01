<!DOCTYPE html>
<html>
<title>Hugo & BOO</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<style>

nav.navbar.navbar-inverse.navbar-fixed-top {
    height: 70px;
    background-color: #fff;
    border: none;
}
.navbar-inverse .navbar-toggle {
    border-color: #ddd;
}
ul.nav.navbar-nav.cus_nav_toggle {
    background-color: #fff;
}

ul.nav.navbar-nav.cus_nav_toggle li a {
    text-align: center;
    font-size: 26px;
    color: #cfcfcf;
}

.navbar-inverse .navbar-nav>.active>a {
    background-color: #fff;
    color: #000 !important;
}
.navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
    background-color: #fff;
}

ul.nav.navbar-nav.cus_nav_toggle li a {
    text-align: center;
    font-size: 40px;
    color: #cfcfcf;
   font-family: 'Sequel Sans Book Disp';
    line-height: 35px;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #000;
}
.navbar-header {
  float: none;
}
.navbar-toggle {
  display: block;
}
.navbar-collapse.collapse {
  display: none!important;
}
.navbar-nav {
  float: none!important;
}
.navbar-nav>li {
  float: none;
}
.navbar-collapse.collapse.in{
  display:block !important;
}
</style>
<body>
<header>
 <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
  <div class="navbar-header">
    <a class="navbar-brand" href="https://www.hugoboo.com/"><img class="w3-image" src="/images/logo.png" alt="Hamburger Catering"></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav cus_nav_toggle">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about.php">About</a></li>
      <!-- <li><a href="index.php">Projects</a></li> -->
      <!-- <li><a href="option.php">Options</a></li> -->
      <li><a href="contact.php">Contacts</a></li>
    </ul>
  </div>
  </div>
</nav>  

</header>