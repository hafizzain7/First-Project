<?php
header("Content-Type applicaton/json");
header("Access-Control-Allow-Origion: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$name = $data['sname'];
$email = $data['semail'];
$city = $data['scity'];
$password = $data['spassword'];

include 'config.php';

$sql = "UPDATE islamabad SET name = '{$name}', email = '{$email}', city = '{$city}', password = '{$password}' 
WHERE id = {'$id'}";

if($conn->query($sql)){
    echo json_encode(array('message' => 'Record Inserted',"Status" => true));
    }
else {
    echo json_encode(array('message' => 'No Record Inserted',"Status" => false));
}
?>