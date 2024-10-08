<!-- Product Form css -->

<link rel="stylesheet" href="./style.css">

<!-- Product Form css end -->



<!-- AdminCommon Files -->

<?php

include('AdminCommon.php');

?>

<!-- AdminCommon Files -->


<div class="row my-5">

    <div class="col">


        <?php
        
        $id = $_GET['edit'];
        
        if (isset($_POST['update_product'])) {

            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
            $product_image_folder = '../uploaded_img' . $product_image;
            $product_date = $_POST['product_date'];

            if (empty($product_name) || empty($product_price) || empty($product_image)) {
                $message[] = 'please fill out all';
            } else {
                $update = "UPDATE product SET product_name='$product_name',product_price='$product_price',product_image='$product_image',product_date='$product_date'
                where id = $id";
                $upload = mysqli_query($con, $update);
                if ($upload) {
                    move_uploaded_file($product_image_tmp_name, $product_image_folder);
                    // $message[] = 'new product added successfully';
                } else {
                    $message[] = 'could not add the product';
                }
            }

        }
        ;
        
        ?>

        <?php

        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }

        ?>

        <div class="container">

            <div class="admin-product-form-container">

            <?php
            
            $select = mysqli_query($con, "SELECT * FROM product WHERE id = $id");
            while($row = mysqli_fetch_assoc($select)){

            ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            <h3>update Product</h3>
                            <input type="text" placeholder="enter product name" value="<?php $row['product_name'] ?>" name="product_name" class="box"
                                reqiured>
                            <input type="number" placeholder="enter product price" value="<?php $row['product_price'] ?>" name="product_price" class="box"
                                requierd>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image"
                                class="box" requierd>
                            <input type="date" placeholder="enter product upload date" value="<?php $row['product_date'] ?>" name="product_date" class="box"
                                reqiured>
                            <input type="submit" class="btn bg-success" name="add_product" value="update product"
                                style="width: 100%;">
                        </form>

                <?php }; ?>
            </div>
        </div>

        <!-- form end  -->

    </div>
</div>

</div>
</div>
</div>
<!-- /#page-content-wrapper -->

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

</body>

</html>