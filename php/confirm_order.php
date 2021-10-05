<?php
require_once("db_connection.php");
date_default_timezone_set("Africa/Lagos");
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $user_name = $_POST['reg_name'];
        $user_email = $_POST['reg_email'];
        $user_phone = $_POST['reg_contact'];
        $user_address= $_POST['reg_address'];
        $user_state = $_POST['reg_state'];
        $user_quty= $_POST['reg_quantity'];
        $date = date("M d, Y h:i a");
        $pass = str_pad(mt_rand(1, 99999999), 10, '0', STR_PAD_LEFT);
        $sql = "INSERT INTO `engage`( `fullname`, `email`,`contact`,`address`, `state`, `quantity`,`created_at`, `orderId`) 
		VALUES ('$user_name','$user_email','$user_phone','$user_address','$user_state','$user_quty','$date','$pass')";
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
            // $id = $conn->id;
            // echo $id;
            require_once("contact_mail.php");
            // $output = json_encode(array('id' => $id));
            echo json_encode(array("statusCode" => 200, 'id' => $id));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id = $_POST['id'];
        $dateOf = $_POST['dateOfdev'];
        $sql = "UPDATE `engage` SET `delivery_date`='$dateOf' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 5) {
        $id = $_POST['id'];
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $delivery_date = $_POST['delivery_date'];
        $delivery_status = $_POST['delivery_status'];
        $sql = "UPDATE `engage` SET `fullname`='$name',`email`='$email',`contact`='$contact',`address`='$address',`state`='$state', `delivery_date`='$delivery_date',`delivery_status`='$delivery_status' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $id = $_POST['id'];
        $dateOf = $_POST['dateOfdev'];
        $sql = "UPDATE `child` SET `delivery_date`='$dateOf' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id = $_POST['id'];
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $delivery_date = $_POST['delivery_date'];
        $delivery_status = $_POST['delivery_status'];
        $sql = "UPDATE `child` SET `fullname`='$name',`email`='$email',`contact`='$contact',`address`='$address',`state`='$state', `delivery_date`='$delivery_date',`delivery_status`='$delivery_status' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>