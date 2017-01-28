<?php
// the front controller 
require 'test.php';
?>
<html lang="uk"> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/scripts.js"></script>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="bootstrap/css/styles.css" rel="stylesheet"/>
        <title>Guess integer.</title>
    </head> 
    <body>
        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Nata Study</a>
                </div>  
            </div>
        </div>
        <div id="carousel" class="carousel slide">
            <!-- indicators of slides-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel"  data-slide-to="1"></li>
                <li data-target="#carousel"  data-slide-to="2"></li>
            </ol>  
            <!--slides-->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/1.png" alt="">
                    <div class="carousel-caption">
                        <h1>Guess integer.</h1>                                        
                        <h3>Загадай ціле число  від 1 до 100.<br> Відповідай на питання "Так" або "Ні".</h3>
                    </div>
                </div>
                <div class="item"><img src="images/2.jpg" alt="">
                <div class="carousel-caption">
                        <h1>Guess integer.</h1>                                        
                        <h3>Загадай ціле число  від 1 до 100.<br> Відповідай на питання "Так" або "Ні".</h3>
                    </div></div>
                <div class="item"><img src="images/3.jpg" alt="">
                <div class="carousel-caption">
                        <h1>Guess integer.</h1>                                        
                        <h3>Загадай ціле число  від 1 до 100.<br> Відповідай на питання "Так" або "Ні".</h3>
                    </div></div>
            </div>
            <!--arrows of switching slides-->
            <a href="#carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span> 
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span> 
            </a>
        </div>
        <div class="container" id="main">
            <div class="row">           
            </div>
                <div id="content">
                    <p>Загадане число <span id="mid"> більше <?php echo $mid ?> </span>?</p>             
                    <div id="answer">Відповідь:
                        <div class="btn-group">
                            <input  id="yes" class="btn btn-danger" type="button" value="Так">
                            <input id="no" class="btn btn-danger" type="button" value="Ні">
                        </div>
                    </div>
                    <div id="restart">
                        <form action="unset.php">
                            <button class="btn btn-danger btn-lg" type="submit">Restart <i class="fa fa-refresh" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
         </div>   
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.js"></script>
    </body> 
</html>
