<?php include $_SERVER['DOCUMENT_ROOT']. '/functions/functions.php';

if ($_GET){
  $showData ="yes";
  $fName = $_GET['fName'];
   $lName = $_GET['lName'];
   $grade = $_GET['grade'];
  $section = $_GET['section'];
   $school = $_GET['school'];
} else {
    $showData ="no";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSBC Survey</title>
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
     <h5>Contact Form</h5> 
<form action="/redirectForm.php" method="post">
  What is your name<br>
  <input type="text" name="fullName"> <br>
    School<br>
  <input type="text" name="school"> <br>
   What is your Section<br>
  <input type="text" name="section"> <br>
 Grade <br>
  <select name="grade">
      <option value="Please Select your Grade">Select Grade</option>
   <option value="9th">9th</option> 
     <option value="10th">10th</option> 
     <option value=11th">11th</option> 
     <option value="12th">12th</option> 
  
  </select>
  <br><br>
  <input type="submit" value="Send">
</form>


      
    </div><!--     END:: ColCon -->





 <div class="col m-2"><!--     START:: Colright -->
<?php 
if($showData == 'yes'){
  echo "<h5>Form data</h5>";
  echo "First and Last Name: $fName $lName";
  echo "<br>";
  echo "School: $school";
  echo "<br>";
  echo "Section: $section";
  echo "<br>";
  echo "Grade: $grade ";
  echo "<br>";
}
?>
   
    </div><!--     END:: Colright -->




    
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