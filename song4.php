<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['ThisIsWhatFallingInLoveFeelsLike']) ===true){
    session_destroy();
    header("Location: song1.php?ThisIsWhatFallingInLoveFeelsLike");
}else if (isset($_REQUEST['ILoveYouSo']) ===true){
    session_destroy();
    header("Location: song2.php?ILoveYouSo");
}else if (isset($_REQUEST['Dungaw']) ===true){
    session_destroy();
    header("Location: song3.php?Dungaw");
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
        <title>Sariling Multo (Sa Panaginip)-IV of Spades</title>
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">
                    <img src="assets/icon.png" height="40" width="35" alt=""></div>
                <a class="navbar-brand" style= "font-family: Engravers Mt; color: #d1d1e0; margin-left: 5px;" href="index.php"> ElLyrics </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;"  href="?ThisIsWhatFallingInLoveFeelsLike">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?ILoveYouSo">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Dungaw">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-blue"style= "font-family: Verdana;" href="?SarilingMulto(SaPanaginip)">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Binhi">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/pink.jpg");
                background-size: 1500px 2000px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Bookman Old Style, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Sariling Multo (Sa Panaginip)</h2>";
                        echo "<p class='lead '>IV of Spades</p>";
                        echo "<br/>";
                
                        echo "<p> Sa panaginip ko, ikaw ang nakakasama </p>";
                        echo "<p> Sa bawat agos ng salita, dala ang damdamin kong sawa </p>";
                        echo "<p> Pikit-matang titingin sa patay na bituin </p>";
                        echo "<p> Sana pigilan sandali ang sandali upang takasan lahat ng takot ko </p>";
                        echo "<br/>";

                        echo "<p> Sa araw-araw ko, ikaw ang nakakausap </p>";
                        echo "<p> Ang luha kong nag-aabang, laman ang tinagong kalungkutan</p>";
                        echo "<p> Pikit-matang dadalhin, kapayapaan hihingin </p>";
                        echo "<p> Paano ba pigilan ang ikot ng mundo? </p>";
                        echo "<br/>";

                        echo "<p> Sa awiting 'to, may magtataka </p>";
                        echo "<p> Kung magbago man ako, 'wag sanang umalis</p>";
                        echo "<br/>";

                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<br/>";

                        echo "<p> Sa araw-araw ko, ikaw ang nakakalaban</p>";
                        echo "<p> Ano man dakong puntahan, sabay tayong mahihirapan</p>";
                        echo "<p> 'Wag ka sanang bumitaw, bantayan bawat galaw</p>";
                        echo "<p> Nang hindi magtampisaw sa lungkot at luha ng ulan</p>";
                        echo "<br/>";

                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<br/>";

                        echo "<p> Tama bang itago 'to?</p>";
                        echo "<p> Sana magising na 'ko</p>";
                        echo "<p> Tama bang itago 'to?</p>";
                        echo "<p> Sana magising na 'ko</p>";
                        echo "<p> Tama bang itago 'to?</p>";
                        echo "<p> Sana magising kayo</p>";
                        echo "<p> Tama bang itago 'to?</p>";
                        echo "<p> Sana mapansin n'yo ako</p>";
                        echo "<br/>";

                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<p> Panalangin ko, iwanan ninyo ako</p>";
                        echo "<p> Dapat bang matakot sa sariling multo?</p>";
                        echo "<br/>";



                        ?>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-4 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Camille D. Magcamit</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
