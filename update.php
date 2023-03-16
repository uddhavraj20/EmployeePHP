<?php

include 'conn.php';
$id = $_GET['id'];
$select_query = "SELECT * FROM `emp` WHERE id='$id'";
$employee_detail = mysqli_query($conn,$select_query);

$employee_detail = mysqli_fetch_array($employee_detail);

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $update_employee = "UPDATE `emp` SET name='$name', email='$email', gender='$gender' WHERE id='$id'";

    $query = mysqli_query($conn,$update_employee);

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
                            <h1>Update Employee Form</h1>
                        </div>
                        <br>

                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Update Email" class="form-control" value="<?php echo $employee_detail['name']; ?>">
                        </div>

                        <div>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $employee_detail['email']; ?>">
                        </div>

                        <!-- <div>
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="">
                        </div> -->

                        <div>
                            <label for="">Gender</label>

                            <div>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="male" id="male" <?php echo $employee_detail['gender'] == "male" ? "checked" : "" ?>>

                                <label for="female">Female</label>
                                <input type="radio" name="gender" value="female" id="female" <?php echo $employee_detail['gender'] == "female" ? "checked" : "" ?>>

                                <label for="other">Other</label>
                                <input type="radio" name="gender" value="other" id="other" <?php echo $employee_detail['gender'] == "other" ? "checked" : "" ?>>
                            </div>

                        </div>

                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>

                    </div>
                </form>

            </div>
        </div>
    </div>


</body>
</html>
