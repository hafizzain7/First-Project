<?php
header("Content-Type applicaton/json");
header("Access-Control-Allow-Origion: *");

include 'config.php';
$sql="SELECT* FROM islamabad";
$result =$conn->query($sql);

if(mysqli_num_rows($result)>0){
    $output= mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
    }
else {
    echo json_encode(array('message' => 'No Record Found',"Status" => false));
}
?>