<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Responsive Website</title>
</head>

<body>
    <section class="bgimg">
        <!-- -----Navbar----- -->
        <?php include('header.php')?>


        <!-- ------Text on Navbar---- -->
        <div class="container text-center text-white px-0 headerset">
            <h4>Junaid Shoes</h4>
            <h1>STORY THEME</h1>
            <p>This is the story theme of branded shoes items of junaid shoes</p>
            <button class="btn btn-warning text-white text-center btn-sm"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></button>
            <button class="btn btn-danger text-center btn-sm"> contact us <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></button>
        </div>

    </section>


    <!-------------services---------->
    <div class="blog">
        <div class="container">
            <div class="blog-parent">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="icon-parent">
                                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="paragraph-parent">
                                    <h2>Shopping Cart</h2>
                                    <p>
                                        A shopping cart on an online retailer's site is a piece of software that facilitates the purchase of a product or service. It accepts the customer's payment and organizes the distribution of that information to the merchant, payment processor and other parties.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="icon-parent">
                                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="paragraph-parent">
                                    <h2>Shopping Cart</h2>
                                    <p>
                                        A shopping cart on an online retailer's site is a piece of software that facilitates the purchase of a product or service. It accepts the customer's payment and organizes the distribution of that information to the merchant, payment processor and other parties.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="icon-parent">
                                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="paragraph-parent">
                                    <h2>Shopping Cart</h2>
                                    <p>
                                        A shopping cart on an online retailer's site is a piece of software that facilitates the purchase of a product or service. It accepts the customer's payment and organizes the distribution of that information to the merchant, payment processor and other parties.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



















    <!-- ------- Card Images------ -->
    <section class="card-parent bg-light">
        <div class="container text-center">

            <div class="text-parent">
                <h1>Shopping Cart</h1>
                <p>You can easily put any product to the cart</p>
            </div>

            <div class="image-parent">
                <div class="row">

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "shopping");

                    $sql = "SELECT * FROM `shoppingcart` order by id asc";

                    $result = mysqli_query($con, $sql);

                    $num = mysqli_num_rows($result);

                    if ($num > 0) {
                        while ($product = mysqli_fetch_assoc($result)) {
                    ?>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form action="manage.php" method="post">
                                    <div class="card">
                                    <img src="<?php echo $product['image']; ?>" alt="Shoes1" class="img-fluid card-img mb-2">
                                        <div class="card-title">
                                            <h2><?php echo $product['name']; ?></h2>
                                        </div>

                                            <div class="card-body">
                                                <h6> &#8356; <?php echo $product['price']; ?><span>
                                                        (<?php echo $product['discount']; ?>% OFF)</span></h6>
                                                <h6 class="badge bg-success"> 4.4 <i class="fa fa-star"></i></h6>
                                            </div>

                                        <div class="btn-group d-flex">
                                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                            <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
                                            <button type="submit" name="submit" class="bt btn-success flex-fill">Add to Cart</button>
                                            
                                            <!-- <button class="bt btn-warning flex-fill">Buy Now</button> -->
                                        </div>
                                    </div>
                                </form>
                        </div> 
                       
                        <?php
                                }
                            }
                                    ?> 

                </div>
            </div>
   
        
        </div>
    </section>


    <!-- --------Team------- -->
    <section class="teamparent bg-dark">
        <div class="container text-center">
            <h1 class="text-white">Our Team</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 d-block">
                    <figure class="figure">
                        <img src="images/JE.jpg" alt="card image" width="250px" height="250px" class="img-fluid figure-img rounded-circle">
                        <figcaption>
                            <h2 class="text-white">Hafiz Zain</h2>
                            <p class="figure-caption text-white">Web Developer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-block">
                    <figure class="figure">
                        <img src="images/JE.jpg" alt="card image" width="250px" height="250px" class="img-fluid figure-img rounded-circle">
                        <figcaption>
                            <h2 class="text-white">Hafiz Zain</h2>
                            <p class="figure-caption text-white">Web Developer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-block">
                    <figure class="figure">
                        <img src="images/JE.jpg" alt="card image" width="250px" height="250px" class="img-fluid figure-img rounded-circle">
                        <figcaption>
                            <h2 class="text-white">Hafiz Zain</h2>
                            <p class="figure-caption text-white">Web Developer</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </section>
    <?php print_r($_SESSION['cart']); ?>



























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>