<?php

    include 'conn.php';

    $select_detail = "SELECT * FROM `emp`";

    $query = mysqli_query($conn, $select_detail);

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h1 class="text-center">Display Employee Info</h1>
                    </div>
                    <br>

                    <table class="table table-striped table-hover table-bodered text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Gender</th>
                            <th>Add Address</th>
                            <th>View</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>

                        <?php
                        include 'conn.php';

                        while ($value = mysqli_fetch_array($query)) {

                        ?>

                            <tr>
                                <td> <?php echo $value['id']; ?> </td>
                                <td> <?php echo $value['name']; ?> </td>
                                <td> <?php echo $value['email']; ?> </td>
                                <td> <?php echo $value['gender']; ?> </td>

                                <td> <button class="btn btn-success"> <a class="text-white" href="add-address.php?id=<?php echo $value['id']; ?>">Add address </a> </button> </td>

                                <td> <button class="btn btn-secondary"> <a class="text-white" href="view.php?id=<?php echo $value['id']; ?>">View </a> </button> </td>

                                <td> <button class="btn btn-dark"> <a class="text-white" href="update.php?id=<?php echo $value['id']; ?>">Update</a> </button> </td>

                                <td> <button class="btn btn-danger"> <a class="text-white" href="delete.php?id=<?php echo $value['id']; ?>">Delete</a> </button> </td>
                            </tr>

                        <?php
                            }
                        ?>

                    </table>


                </div>
            </div>
        </div>

    </body>

</html>
