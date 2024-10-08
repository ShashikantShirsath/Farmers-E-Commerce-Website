
<!-- AdminCommon Files -->

<?php

include('AdminCommon.php');

?>

<!-- AdminCommon Files -->



<!-- Body -->

<div class="row my-5">
    <h3 class="fs-4 mb-3">Recent Order's <a href="#" class="btn btn-success">Add</a>
    </h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">ID</th>
                    <th scope="col" width="50">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="UserDetail">


                <!-- Retrieve Data from table -->
                <?php



                $fetch = "SELECT * FROM orders";
                $query_run = mysqli_query($con, $fetch);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $User) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $User['id']; ?>
                            </td>
                            <td>
                                <?php echo $User['name']; ?>
                            </td>
                            <td>
                                <?php echo $User['email']; ?>
                            </td>
                            <td>
                                <?php echo $User['mobile']; ?>
                            </td>
                            <td>
                                <?php echo $User['address']; ?>
                            </td>
                            <td>
                                <?php echo $User['pincode']; ?>
                            </td>
                            <td>
                                <!-- <a href="OrderUpdate.php?id=<?php echo $User['id'] ?> "
                                    class="btn bg-success btn-sm btn-info"> <i class="fas fa-edit"></i> Update</a> -->
                                <a href="OrderDelete.php?id=<?php echo $User['id'] ?> " 
                                    class="btn btn-sm btn-danger">  <i class="fas fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {

                }
                ?>

            </tbody>
        </table>
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