<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

// if(!isset($_SESSION['email']))
// {
//     header("location:Home1.php");
// }

?>


        <!-- Product Form css -->

        <link rel="stylesheet" href="./style.css">

        <!-- Product Form css end -->


        <!-- AdminCommon Files -->

        <?php

        include('AdminCommon.php');

        ?>

        <!-- AdminCommon Files -->



        <!-- Add product form -->

        <div class="row my-5">

            <div class="col">

                <?php

                if (isset($_POST['add_product'])) {

                    $product_name = $_POST['product_name'];
                    $product_price = $_POST['product_price'];
                    $product_image = $_FILES['product_image']['name'];
                    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
                    $product_image_folder = '../uploaded_img' . $product_image;
                    $product_date = $_POST['product_date'];
                    $description = $_POST['description'];

                    if (empty($product_name) || empty($product_price) || empty($product_image)) {
                        $message[] = 'please fill out all';
                    } else {
                        $insert = "INSERT INTO product(product_name, product_price, product_image,product_date,description) 
                        VALUES('$product_name', '$product_price', '$product_image','$product_date','$description')";
                        $upload = mysqli_query($con, $insert);
                        if ($upload) {
                            move_uploaded_file($product_image_tmp_name, $product_image_folder);
                            $message[] = 'new product added successfully';
                        } else {
                            $message[] = 'could not add the product';
                        }
                    }

                }
                ;



                // Delete Product 

                if (isset($_GET['delete'])) {
                    $id = $_GET['delete'];
                    mysqli_query($con, "DELETE FROM product WHERE id = $id");
                    echo"<script>
                    alert('Product Delete Successfully!');
                    window.location.href='AddProduct.php'; 
                    </script>";
                    // header('location:Dashboard.php');
                }
                ;

                ?>
                


                <!-- For the error massage -->

                <?php

                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<span class="message">' . $message . '</span>';
                    }
                }

                ?>
                <!-- For the error massage end-->

                <div class="container">

                    <div class="admin-product-form-container">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            <h3>add a new product</h3>
                            <input type="text" placeholder="enter product name" name="product_name" class="box"
                                reqiured>
                            <input type="number" placeholder="enter product price" name="product_price" class="box"
                                requierd>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image"
                                class="box" requierd>
                            <input type="date" placeholder="enter product upload date" name="product_date" class="box"
                                reqiured>
                            <textarea rows="3" placeholder="enter product Description" name="description" class="box"
                                reqiured></textarea>
                            <input type="submit" class="btn bg-success" name="add_product" value="add product"
                                style="width: 100%;">
                        </form>

                    </div>

                    <?php

                    $select = mysqli_query($con, "SELECT * FROM product");

                    ?>
                    <div class="product-display">
                        <table class="product-display-table">
                            <thead>
                                <tr>
                                    <th>Product ID </th>
                                    <th>product image</th>
                                    <th>product name</th>
                                    <th>product price</th>
                                    <th>Product date</th>
                                    <th>Detail</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                                <tr>
                                     <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td><img src="uploaded_img<?php echo $row['product_image']; ?>" height="100" alt="">
                                    </td>
                                    <td>
                                        <?php echo $row['product_name']; ?>
                                    </td>
                                    <td><span>&#x20B9;</span>
                                        <?php echo $row['product_price']; ?>/-
                                    </td>
                                    <td>
                                        <?php echo $row['product_date']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['description']; ?>
                                    </td>
                                    <td>
                                        <a href="UpdateProduct.php?edit=<?php echo $row['id']; ?>"  class="btn btn-success">
                                            <i class="fas fa-edit"></i> update </a>
                                        <a href="AddProduct.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> delete </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
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