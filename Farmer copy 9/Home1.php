<!-- for the product select -->

<?php

include('config.php');

$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);

?>




<!-- Header -->

<?php

include('C:\xampp\htdocs\Farmer\MainInclude\Headar.php');

?>

<!-- Header end -->




<!-- carousel -->

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="2000">
            <img src="Images/img2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>WELCOME TO OUR FARMER'S E-MARKET</h3>
                <p>The number one qualities Products.</p>
                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="Images/farm.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>Farmers can sell their Food Grain</h3>
                <p>This site is created for farmers</p>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="Images/Home1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h3>Third slide label</h3>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- carousel -->




<!-- Products Section -->

<section id="Products">
    <div class="container">
        <div class="row">
            <h1 class="text-center" class="ProductText">PRODUCTS</h1>


            <?php

            while ($row = mysqli_fetch_assoc($all_product)) {

                ?>

                <!-- Product 1 -->
                <div class="col-sm-6 col-lg-3 mb-lg-4 mb-4">
                    <div class="card">
                        <img class="card-image-top" src="uploaded_img<?php echo $row['product_image']; ?>" alt="">
                        <div class="card-body">
                            <h2 class="card-titel text-center">
                                <?php echo $row['product_name']; ?>
                            </h2>
                            <p class="card-text text-center">
                                <?php echo $row['description']; ?>
                            </p>
                            <h5 class="text-center"><span>&#x20B9;</span>
                                <?php echo $row['product_price']; ?>
                            </h5>
                            <div class="star text-center">
                                <i class="fa fa-star checled"></i>
                                <i class="fa fa-star checled"></i>
                                <i class="fa fa-star checled"></i>
                                <i class="fa fa-star checled"></i>
                                <i class="fa fa-star checled"></i>
                            </div>
                            <!-- <div class="btn">
                            <input type="submit"  value="Buy" style="border:none;"name="add_to_cart">
                        </div> -->
                            <a href="OrderForm.php" name="Buy" value="Buy"class="btn bg-success">Buy
                            </a>
                            </form>
                            <div class="btn">
                                <i class="fa-solid fa-cart-plus"></i>
                            </div>
                            <p>
                                <?php echo $row['product_date']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>
    </div>
</section>

<!-- Products end -->






<!-- Footer -->

<?php

include 'C:\xampp\htdocs\Farmer\MainInclude\Footer.php';

?>

<!-- Footer end -->