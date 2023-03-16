<?php

    include 'conn.php';

    $id= $_GET['id'];

    $view_query = "SELECT * FROM `emp` WHERE id='$id'";

    $view_detail = mysqli_query($conn,$view_query);

    $view_detail = mysqli_fetch_array($view_detail);

    $address_query = "SELECT address FROM `emp_address` WHERE emp_id='$id'";

    $address_detail = mysqli_query($conn,$address_query);

    $address_value = mysqli_fetch_all($address_detail); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>View Employee Detail</h1>
                        </div>
                        <br>                    
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <p>
                                    <strong>ID :</strong> <?php echo $view_detail['id']; ?>
                                </p>

                                <p>
                                    <strong>Name :</strong> <?php echo $view_detail['name']; ?>
                                </p>

                                <p>
                                    <strong>Email :</strong> <?php echo $view_detail['email']; ?>
                                </p>   
                                
                            <?php
                                foreach ($address_value as $key => $address) {                                                           
                            ?> 
                                <p>
                                    <strong>Address<?php echo $key+1 ?> :</strong> 
                            <?php
                                    print_r($address[0]); 
                                    if(end($address_value)[0] != $address[0]) {
                                        echo " </p>";
                                    }
                                }                  
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                                
                    
<!-- <?php
    print_r($address['0']) ;
?>                     -->