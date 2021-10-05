<?php
include 'php/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Data</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_crud.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="ajax/ajax.js"></script>
</head>

<body>
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Prep50 Enage <b>Order Page</b></h2>
                    </div>
                    <!-- <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div> -->
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>SL NO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>ORDER NUMBER</th>
                            <th>ADDRESS</th>
                            <th>STATE</th>
                            <th>ORDER DATE</th>
                            <th>DELIVERY DATE</th>
                            <th>DELIVERY STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM engage ORDER BY id DESC");
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr id="<?php echo $row["id"]; ?>">
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["fullname"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["contact"]; ?></td>
                                <td><?php echo $row["orderId"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["state"]; ?></td>
                                <td><?php echo $row["created_at"]; ?></td>
                                <td><?php echo $row["delivery_date"]; ?></td>
                                <td><?php echo $row["delivery_status"]; ?></td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                        <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-fullname="<?php echo $row["fullname"]; ?>" data-email="<?php echo $row["email"]; ?>" data-contact="<?php echo $row["contact"]; ?>" data-address="<?php echo $row["address"]; ?>" data-state="<?php echo $row["state"]; ?>" data-delivery_date="<?php echo $row["delivery_date"]; ?>" data-delivery_status="<?php echo $row["delivery_status"]; ?>" title="Edit">&#xE254;</i>
                                    </a>
                                    <!-- <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_u" name="id" class="form-control" required>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="fullname_u" name="fullname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email_u" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE</label>
                            <input type="tel" id="contact_u" name="contact" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="address" id="address_u" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="state" id="state_u" name="state" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Delivery Date</label>
                            <input type="text" id="delivery_date" name="delivery_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Delivery Status</label>
                            <input type="text" id="delivery_status" name="delivery_status" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="5" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>