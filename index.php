<?php
//start the session
SESSION_START();


if (isset($_REQUEST['ThisIsWhatFallingInLoveFeelsLike']) ===true){
    session_destroy();
    header("Location: song1.php?ThisIsWhatFallingInLoveFeelsLike");
    }
else if (isset($_REQUEST['ILoveYouSo']) ===true){
    session_destroy();
    header("Location: song2.php?ILoveYouSo");
}else if (isset($_REQUEST['Dungaw']) ===true){
    session_destroy();
    header("Location: song3.php?Dungaw");
}else if (isset($_REQUEST['SarilingMulto(SaPanaginip)']) ===true){
    session_destroy();
    header("Location: song4.php?SarilingMulto(SaPanaginip)");
}else if (isset($_REQUEST['Binhi']) ===true){
    session_destroy();
    header("Location: song5.php?Binhi");
}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home-ElLyrics</title>
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">


                    <img src="assets/icon.png" height="40" width="35" alt=""></div>
                <a class="navbar-brand" style= "font-family: Engravers Mt; color: #d1d1e0; margin-left: 10px;" href="#"> ElLyrics </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;"  href="?ThisIsWhatFallingInLoveFeelsLike">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?ILoveYouSo">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Dungaw">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?SarilingMulto(SaPanaginip)">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Binhi">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <style>
            body {
                background-image: url("images/edm.jfif");
                background-size: 1400px 610px;
            }
        </style>
        <header class="text-white">
            <div class="px-4 text-center">
                <br>
                <br> 
                </br>
                <h1 class="fw-bolder" style="font-size: 6vw" style="background-color: black;" >Welcome to ElLyrics</h1>
                <p class="leader">Music makes you feel like you're in cloud 9</p>
                
            </div>
        </header>

 
       <br>
            <br>
                <br>
                <br>  
        <br/>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Camille D. Magcamit</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
