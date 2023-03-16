<?php

include 'conn.php';
$id = $_GET['id'];

$select_query = "SELECT name FROM `emp` WHERE id='$id'";
$employee_detail = mysqli_query($conn,$select_query);

$employee_detail = mysqli_fetch_array($employee_detail);

if(isset($_POST['submit'])) {
   
    $address=$_POST['address'];

    $insert_query = "INSERT INTO `emp_address` (`emp_id` , `address`) VALUES ('$id','$address')";

    $qurey = mysqli_query($conn,$insert_query);

    header('location:detail.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert form data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>Add Address</h1>
                        </div>
                        <br>
                        Name : <?php echo $employee_detail['name']; ?>
                        <div>
                            <label for="">Address :</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <br>

                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>

                    </div>
                </form>

            </div>
        </div>
    </div>


</body>
</html>