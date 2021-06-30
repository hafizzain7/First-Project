<?php
header("Content-Type applicaton/json");
header("Access-Control-Allow-Origion: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['sname'];
$email = $data['semail'];
$city = $data['scity'];
$password = $data['spassword'];

include 'config.php';

$sql="INSERT INTO islamabad (name,email,age,city) VALUES ('{$name}','{$email}','{$city}','{$password}')";

if($conn->query($sql)){
    echo json_encode(array('message' => 'Record Inserted',"Status" => true));
    }
else {
    echo json_encode(array('message' => 'No Record Inserted',"Status" => false));
}
?>