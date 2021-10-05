<?php
require_once("db_connection.php");
if(!empty($_POST['user_id'])){
    $data = array();
    
    $query = $conn->query("SELECT * FROM engage WHERE id = {$_POST['user_id']}");
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
    //returns data as JSON format
    echo json_encode($data);
}
