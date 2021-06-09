<link rel="stylesheet" type="text/css" href="index.php">
<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>
    <body>
    <audio id="hi" autoplay>
  <source src="T W I C E Best Songs Playlist (1).mp3" type="audio/mp3">
  
</audio>
<section class="showcase ">
        <header>
            <h2 class="logo">
                <img src ="once_fanclub-removebg-preview.png" style="width:150px;height:150px">
            </h2>
            <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="twice-k-pop-logo-png-favpng-gLs9gQMYr7gXLMbwwySzu73mR-removebg-preview.png" alt="Paris" style="width:150px;height:150px">
                  </div>
                  <div class="flip-box-back">
                    <img src="twice-k-pop-logo-png-favpng-gLs9gQMYr7gXLMbwwySzu73mR-removebg-preview.png" alt="Paris" style="width:150px;height:150px">
                    </div>
                </div>
                </div>
            <div class="toggle "></div>
        </header>
 
    <div class="container">
        <a class="float-right" href ="logout.php"> LOGOUT </a>
<h1>WELCOME <?php echo $_SESSION['username']; ?> </h1>
    </div>
</section>
<div class="menu">
<ul>
        <li><a href="http://localhost:3000/userregistration/videobackground/index.html">Home</a></li>
        <li><a href="Playlist2/play2.html">Playlist</a></li>
        <li><a href="http://localhost:3000/userregistration/login.php">Fansclub</a></li>
        <li><a href="#">Members</a></li>
        <li><a href="#">Album</a></li>

    </ul>
    </div>
    <script>
var aud = document.getElementById("hi");
aud.volume = 0.2;
</script>
<script>
         const menuToggle= document.querySelector('.toggle')
         const showcase= document.querySelector('.showcase')

         menuToggle.addEventListener('click', () => {
             menuToggle.classList.toggle('active')
             showcase.classList.toggle('active')
         })
         </script>
    </body>
</html>