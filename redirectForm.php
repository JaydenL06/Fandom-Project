<?php

$fullName = explode(" ",$_POST["fullName"]);

$fName = $fullName[0];
$lName =$fullName[1];

$grade = $_POST["grade"];
$section = $_POST["section"];
$school = $_POST["school"];



header("Location: /form.php?fName=$fName&lName=$lName&grade=$grade&section=$section&school=$school");
?>




<!-- 
// echo $fullName. "<br>";
// echo $fName. "<br>";
// echo $lName. "<br>";
// echo $reason. "<br>";
 -->