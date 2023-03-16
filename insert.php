<?php
    include 'conn.php';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $insert_form = "INSERT INTO `emp` (`name` , `email` , `gender`) VALUES ('$name', '$email', '$gender')";

        $qurey = mysqli_query($conn, $insert_form);

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

        <div class="container" style="margin-top:130px">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <form action="" method="POST">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1>Employee Form</h1>
                            </div>
                            <br>

                            <div>
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div>
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div>
                                <label for="">Gender</label>

                                <div>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" value="male" id="male" required>

                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" value="female" id="female" required>

                                    <label for="other">Other</label>
                                    <input type="radio" name="gender" value="other" id="other" required>
                                </div>

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
