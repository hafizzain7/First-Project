<?php
 $conn = new mysqli("localhost","root","","test");
 if($conn){
     echo "Conection Done";
 }
 else{
     echo "Conection Failled";
 }

?>