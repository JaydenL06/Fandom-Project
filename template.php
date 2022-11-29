<?php include $_SERVER['DOCUMENT_ROOT']. '/functions/functions.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSBC Fandom Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="/style.css" rel="stylesheet" >
    
  </head>
  <body>

<div class="container"><!--     START:: container -->

  <div class="row mt-3" id="top" ><!--     START:: rowTop -->
    <div class="col m-2"><!--     START:: ColTop -->
  <h1><?php 
echo $logo;
echo $siteName;?>  </h1>

    <?php
      echo $mainNav;
      ?>
    </div><!--     END:: ColTop -->
  </div> <!--     END:: rowTop -->

  <div class="row" id="content"><!--     START:: rowCon -->
    <div class="col m-2"><!--     START:: ColCon -->
      Column Content
    </div><!--     END:: ColCon -->
  </div> <!--     END:: rowCon -->
    
  <div class="row" id="bottom"><!--     START:: rowBot -->
    <div class="col m-2"><!--     START:: ColBot -->
      <?php
      echo $footer;
      ?>
    </div><!--     END:: ColBo -->
  </div> <!--     END:: rowBot -->

</div><!--     END:: container -->

    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
