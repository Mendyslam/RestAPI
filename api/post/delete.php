<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Acess-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');


include_once '../../config/Database.php';
include_once '../../models/Post.php';

//Instantiate DB $ connect
$database = new Database();
$db = $database->connect();

//Instantiate post object
$post = new Post($db);

//Get the raw posted data

$data = json_decode(file_get_contents("php://input"));

$post->id = $data->id;


if($post->delete()) {
    echo json_encode(
        array('message' => 'Post deleted')
    );
} else {
    echo json_encode(
        array('message'=>'Post Not deleted')
    );
}