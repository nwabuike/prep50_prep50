<?php
require_once("db_connection.php");
date_default_timezone_set("Africa/Lagos");
if ((isset($_POST['reg_name']) && $_POST['reg_name'] != '')) {

    // $i = implode(" ", $_POST['bundle_jamb']);
    $user_name = $conn->real_escape_string($_POST['reg_name']);
    $user_email = $conn->real_escape_string($_POST['reg_email']);
    $user_phone = $conn->real_escape_string($_POST['reg_contact']);
    $user_address = $conn->real_escape_string($_POST['reg_address']);
    $user_state = $conn->real_escape_string($_POST['reg_state']);
    $user_quty = $conn->real_escape_string($_POST['reg_quantity']);
    $user_date = date("M d, Y h:i a");
    $pass= str_pad(mt_rand(1, 99999999), 10, '0', STR_PAD_LEFT);
    // $pass = "#"+$num;
    $sql = "INSERT INTO engage (orderId, fullname, email, contact, address, state, quantity, created_at) 
VALUES('" . $pass . "','" . $user_name . "', '" . $user_email . "', '" . $user_phone . "', '" . $user_address . "', '" . $user_state . "','" . $user_quty . "','" . $user_date . "')";
    // echo $sql;
    if (!$result = $conn->query($sql)) {
        // $id = mysqli_insert_id($conn);
        $output = json_encode(array('type' => 'error', 'text' => 'There was an error running the query [' . $conn->error . ']'));
        die($output);
        // die('There was an error running the query [' . $conn->error . ']');
    } else {
        $id = mysqli_insert_id($conn);
        // $id = $conn->id;
        // echo $id;
        require_once("contact_mail.php");
        $output = json_encode(array('id'=>$id));
        // $output = json_encode(array("statusCode" => 200, 'name' => $user_name['fullname'], 'email' => $user_email['email'], 'contact' => $user_phone['contact'], 'address' => $user_address['address'], 'state' => $user_state['state'], 'created_at' => $user_data['created_at'], 'quantity' => $user_quty['quantity']));
        die($output);
    }
    return !$result;
}
 else {
    $output = json_encode(array('type'=>'error', 'text' => 'Enter Your Full Name [' . $conn->error . ']'));
    die($output);
}
