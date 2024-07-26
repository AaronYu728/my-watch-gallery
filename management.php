<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="home.css" />
  <title>Melbourne Watch Gallery</title>
  <style>
    #title {
      text-align: center;
      margin: 20px 0;
    }

    .message-style {
      width: 40%;
    }
  </style>
</head>

<body>
  <?php
  include "navheader.php"
  ?>
  <div id="title">
    <h1>Product Management System</h1>
  </div>

  <div class="mx-auto message-style">
    <?php
    if (isset($_GET["message"])) {
      echo "
      <div id='updatedAlert' class='alert alert-danger' role='alert' alert-dismissible fade show>
        <div class='text-center'>$_GET[message]</div>
      </div>
    ";
    }
    ?>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Image</th>
        <th scope="col">Product name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include("dbconnection.php");
      try {
        $result = mysqli_query($conn, "select * from products");
        while ($row = mysqli_fetch_array($result)) {
          echo "
            <tr>
                <th scope='row'>$row[product_id]</th>
                <td>
                    <img src='$row[image_1]' alt='' width=100px >
                </td>
                <td>$row[product_name]</td>
                <td>$row[price]</td>
                <td>
                  <a href='editproduct.php?product_id=$row[product_id]'>Edit</a>,
                  <a href='updateproduct.php?product_id=$row[product_id]&message=delete'>Delete</a>,
                  <a href='product.php?product_id=$row[product_id]'>Preview</a>
                </td>
            </tr>
          ";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }
      mysqli_close($conn);

      ?>
    </tbody>
  </table>

  <script>
    window.onload = function() {
      setTimeout(function() {
        var alertElement = document.getElementById('updatedAlert');
        var bsAlert = new bootstrap.Alert(alertElement);
        bsAlert.close();
      }, 2000);
    };
  </script>
</body>

</html>