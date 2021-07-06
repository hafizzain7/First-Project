<?php include('header.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Fonts Pre Connect -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

    <!-- CSS Files Links -->
    <!--    <link rel="stylesheet" href="./styles.css"> -->

    <!-- Title -->
    <title>My Cart</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div style="margin-top: 100px; border:1px solid black; padding-top:3px;" class="col-lg-12 col-md-12 col-sm-12 text-center bg-info">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr#</th>
                            <th scope="col">Item-Image</th>
                            <th scope="col">Item-Name</th>
                            <th scope="col">Item-Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value){
                            echo "  <tr>
                            <td>$value[id]</td>
                            <td><img src='$value[image]' width='80px' height='40px'></td>
                            <td>$value[name]</td>
                            <td>$value[price]</td>
                            <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='100' ></td>
                           
                            <td>
                            <form method='post' action='manage.php'>
                            <button class='btn btn-sm btn-outline-danger' name='remove_item'>Remove</button>
                            <input type='hidden' name='id' value='$value[id]'>
                            </form>
                            </td>
                        </tr>";
                        } 
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- 
    <script src="./scripts.js"></script> -->
</body>

</html>