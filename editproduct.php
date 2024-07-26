<?php

$isadd = false;
if ($_GET["isAdd"]) {
    $isadd = $_GET["isAdd"];
} else {
    extract($_GET);

    include("dbconnection.php");
    $sql = "select * from products where product_id=$_GET[product_id]";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css" />
    <title>Melbourne Watch Gallery</title>
    <style>
        #title {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <?php
    include("navheader.php");
    ?>
    <div id="title">
        <h1>Product Management System - Edit Product</h1>
    </div>

    <form class="m-5" action="updateproduct.php?message=<?php echo $isadd ? 'add' : 'updateData' ?>&product_id=<?php echo $row['product_id'] ?>" method="post">
        <?php
        if (isset($_GET["failedMessage"])) {
            echo "
                    <div id='editAlert' class='alert alert-danger' role='alert' alert-dismissible fade show>
                     $_GET[failedMessage]
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";

            echo "
                    <script>
                        const alert = document.getElementById('editAlert');
                        alert.addEventListener('close.bs.alert', event => {
                            console.log('close');
                        });
                    </script>
                ";
        }
        ?>
        <div class="mb-3">
            <label class="form-label" for="product_name">Product Name</label>
            <input value="<?php echo $isadd ? '' : $row['product_name'] ?>" class="form-control" type="text" id="product_name" name="product_name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="model_no">Model No.</label>
            <input value="<?php echo $isadd ? '' : $row['model_no'] ?>" class="form-control" type="text" id="model_no" name="model_no" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input value="<?php echo $isadd ? '' : $row['price'] ?>" class="form-control" type="text" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="overview">Overview</label>
            <textarea class="form-control" id="overview" name="overview" rows="8" required><?php echo $isadd ? '' : $row["overview"] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="image_1">Image 1</label>
            <input value="<?php echo $isadd ? '' : $row['image_1'] ?>" class="form-control" type="text" id="image_1" name="image_1" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="image_2">Image 2</label>
            <input value="<?php echo $isadd ? '' : $row['image_2'] ?>" class="form-control" type="text" id="image_2" name="image_2" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="image_3">Image 3</label>
            <input value="<?php echo $isadd ? '' : $row['image_3'] ?>" class="form-control" type="text" id="image_3" name="image_3" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="image_4">Image 4</label>
            <input value="<?php echo $isadd ? '' : $row['image_4'] ?>" class="form-control" type="text" id="image_4" name="image_4" required>
        </div>
        <div class="mb-3">
            <button class="btn addbtn" type="submit"><?php echo $isadd ? 'Add Product' : 'Save changes' ?>
            </button>
        </div>
    </form>

</body>

</html>