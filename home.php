<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./home.css" />
  <link rel="stylesheet" href="./shoppingcart.css" />
  <title>Melbourne Watch Gallery</title>
</head>

<body>
  <?php
  include("navheader.php");
  ?>

  <div class="main_container">
    <div class="itemlist-container">

      <?php
      include("dbconnection.php");

      try {
        $result = mysqli_query($conn, "select product_id, product_name, price, image_1 from products");
        while ($row = mysqli_fetch_array($result)) {
          echo "
            <div class='item-card'>
              <a href='product.php?product_id=$row[product_id]'>
                <p>$row[product_name]</p>
                <img
                  class='item-img'
                  src='$row[image_1]'
                  alt='Garmin VivoActive 4S Smart Watch'
                />
              </a>

              <div class='itmeprice-add'>
                <h2>$<span>$row[price]</span></h2>
                <button class='btn addbtn' onclick='addtocart(this)'>
                  Add to cart
                </button>
              </div>
            </div>
          ";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }
      mysqli_close($conn)
      ?>

    </div>

    <div class="cart">
      <h2>Shopping Cart</h2>
      <div id="cartitemlist"></div>
      <div class="tprice">
        <span>Total</span>
        <span id="totalprice"></span>
      </div>
      <a class="atag" href="loginOrPayment.php?message=home">
        <button class="btn btn-checkout">
          Check out <span class="badge text-bg-secondary" id="badge">0</span>
        </button>
      </a>
    </div>
  </div>
  <!-- <script type="module" src="home.js"></script> -->
  <!-- <script async src="home.js"></script> -->
  <script src="home.js"></script>
</body>

</html>