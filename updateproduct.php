<?php
extract($_POST);
include("dbconnection.php");
$product_id = $_GET["product_id"];

switch ($_GET["message"]) {
    case 'updateData':
        try {
            $escapedOverview = addslashes($overview);
            $sql = "update products set product_name='$product_name', model_no='$model_no', price='$price', overview='$escapedOverview', image_1='$image_1', image_2='$image_2', image_3='$image_3', image_4='$image_4' where product_id='$product_id'";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) == 1) {
                header("Location:management.php?message='Updated successfully.'");
            } else {
                header("Location:editproduct.php?failedMessage='Updated failed or no changes.'");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        break;
    case 'delete':
        try {
            $sql = "delete from products where product_id='$product_id'";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) === 1) {
                header("Location:management.php?message='Delete successfully.'");
            } else {
                header("Location:management.php?message='Delete failed.'");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        break;
    case 'add':
        // echo 'add';
        try {
            $escapedOverview = addslashes($overview);
            $sql = "insert into products (product_name, model_no, price, overview, image_1, image_2, image_3, image_4) values ('$product_name', '$model_no', '$price', '$escapedOverview', '$image_1', '$image_2', '$image_3', '$image_4')";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) === 1) {
                header("Location:management.php?message='Add successfully.'");
            } else {
                header("Location:management.php?message='Add failed.'");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        break;

    default:
        break;
}
