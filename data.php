<?php include $_SERVER['DOCUMENT_ROOT']. '/functions/functions.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSBC 1A Leaderbords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="/style.css" rel="stylesheet" >
    
  </head>
  <body>

<div class="container"><!--     START:: container -->

  <div class="row mt-3" id="top" ><!--     START:: rowTop -->
    <div class="col m-2"><!--     START:: ColTop -->
  <h1><?php 
echo $logo;
echo $siteName;?>   </h1>
    <?php
      echo $mainNav;
      ?>
    </div><!--     END:: ColTop -->
  </div> <!--     END:: rowTop -->

  <div class="row" id="content"><!--     START:: rowCon -->
    <div class="col m-2"><!--     START:: ColCon -->





<table class="table">
  <thead>
    <tr>
      <th scope="col">Place</th>
      <th scope="col">Ensemble Name</th>
      <th scope="col">Top Score </th>
      <th scope="col">Second Score </th>
      <th scope="col">Average</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1st</th>
      <td>Jurupa Hills High School </td>
      <td>71.975 </td>
      <td>70.85 </td>
      <td>71.4125</td>
    </tr>
   <tr>
      <th scope="row">2nd</th>
      <td>Eagle Regiment Marching Band & Color Guard </td>
      <td>73.7 </td>
      <td>68.4  </td>
      <td>71.05</td>
    </tr>
       <tr>
      <th scope="row">3rd</th>
      <td>Dana Hills High Schoo </td>
      <td>71.55</td>
      <td>64.95 </td>
      <td>68.25</td>
    </tr>
       <tr>
      <th scope="row">4th</th>
      <td>Grossmont High School </td>
      <td>69.35 </td>
      <td>66.55 </td>
      <td>67.95</td>
    </tr>
       <tr>
      <th scope="row">5th</th>
      <td>Montclair High School </td>
      <td>68.125 </td>
      <td>67.05   </td>
      <td>67.5875 </td>
    </tr>
  </tbody>
</table>









      
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