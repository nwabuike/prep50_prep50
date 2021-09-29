<?php
require_once("db_connection.php");
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
?>