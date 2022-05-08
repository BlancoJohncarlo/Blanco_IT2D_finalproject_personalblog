<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Personal Blog</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> Song List:</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="account.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="Mylistsong.php">MyList Song</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="MyHobby.php">My Hobby</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="FavoriteFood.php">Favorite Food</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="ArtistIlike.php">Artist I Like</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="index.php">Back</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">My List Song</h1>
                <p class="lead">"Where words fail, music speaks"</p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        
                        <?php
                         echo "<h2 class='text-primary'>Pagsamo</h2>";
                         echo "<p class='lead '>Arthur Nery</p>";

                         echo "<p>Kung bibitaw nang mahinahon ako ba'y lulubayan ng ating</p>";
                         echo "<p>Mga kahapon na 'di na kayang ayusin ng lambing</p>";
                         echo "<p>Mga pangako ba'y sapat na upang muli tayong ipagtagpo ng hinaharap</p>";
                         echo "<p>Ba't pa ipapaalala 'di rin naman panghahawakan ba't pa ipipilit kung 'di naman tayo ang (kung di naman)</p>";
                         echo "<br/>";

                         echo "<p>Para sa isa't-isa oh 'di ba sinta tayong dalawa lang noon</p>";
                         echo "<p>Para sa isa't-isa oh ba't 'di sumang-ayon sa 'tin ang panahon</p>";
                         echo "<br/>";

                         echo "<p>Siguro nga'y wala nang natira sa mga sinulat mo na para sa 'kin</p>";
                         echo "<p>Alam kong luha ang bumubura ngunit hayaan mo na lang</p>";
                         echo "<p>Walang saysay ang panalangin ko kung 'di ako ang hahanapin mo</p>";
                         echo "<p>Kahit sigaw pa ang pagsamo ko sa 'yo bakit 'di mo dama 'to</p>";
                         echo "<p>Ba't pa ipapaalala 'di rin naman panghahawakan ba't pa ipipilit kung 'di naman tayo ang (kung di naman)</p>";
                         echo "<br/>";

                         echo "<p>Para sa isa't-isa oh 'di ba sinta tayong dalawa lang noon</p>";
                         echo "<p>Para sa isa't-isa oh ba't 'di sumang-ayon sa 'tin ang panahon</p>";
                         echo "<p>Para sa isa't-isa oh 'di ba sinta tayong dalawa lang noon</p>";
                         echo "<p>Para sa isa't-isa ba't 'di sumang-ayon sa 'tin ang panahon</p>";
                         echo "<br/>";
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
