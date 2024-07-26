<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="shoppingcart.css" />
  <link rel="stylesheet" href="product.css" />
  <title>Melbourne Watch Gallery</title>
</head>

<body>

  <?php
  include("navheader.php");
  ?>

  <div class="main_container">
    <div class="product-container">
      <?php
      include("dbconnection.php");
      try {
        $result = mysqli_query($conn, "select * from products where product_id=$_GET[product_id]");
        $row = mysqli_fetch_array($result);
        echo "

          <div>
            <img id='mainImg'
            src=$row[image_1]
            alt='main image'
            />
            <div class='slideimages'>
            <img onmouseover='subimgMouseover(this)'
                id='img-1'
                src=$row[image_1]
                alt='slide image-1'
            />
            <img onmouseover='subimgMouseover(this)'
                id='img-2'
                src=$row[image_2]
                alt='slide image-2'
            />
            <img onmouseover='subimgMouseover(this)'
                id='img-3'
                src=$row[image_3]
                alt='slide image-3'
            />
            <img onmouseover='subimgMouseover(this)'
                id='img-4'
                src=$row[image_4]
                alt='slide image-4'
            />
            </div>
          </div>
          <div>
              <h3 id='productName'>
                $row[product_name]
              </h3>
              <h5>Model: $row[model_no]</h5>
              <h3>$<span id='price'>$row[price]</span></h3>
              <button class='btn btn-primary mb-5' onclick='addtocart()'>Add to Cart</button>
              <h3>Product Overview</h3>
              <p>$row[overview]</p>
          </div>

        ";
      } catch (Exception $e) {
        echo $e->getMessage();
      }
      mysqli_close($conn);

      ?>
    </div>
    <div class="cart">
      <h2>Shopping Cart</h2>
      <div id="cartitemlist"></div>
      <div class="tprice">
        <span>Total</span>
        <span id="totalprice"></span>
      </div>
      <a class="atag" href="loginOrPayment.php?message=product">
        <button class="btn btn-success btn-checkout">
          Check out <span class="badge text-bg-secondary" id="badge">0</span>
        </button>
      </a>
    </div>
  </div>
  <script src="product.js"></script>
</body>

</html>