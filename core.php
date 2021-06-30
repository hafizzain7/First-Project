<?php
  //include('index.php');
  //readfile('form.php');

//EXplode
$message="This is Zain Ansari";
$array=explode(" ",$message);
echo "<pre>";
print_r($array);

//implode
$arr=array("This is Hafiz Zain");
$name=implode(" ",$arr);
echo "<pre>";
echo $name;

//in_array
$array1=array("Zain","Ahmad","Kashif");
in_array("Zain",$array1);

















?>