<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebTek</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/pp.css">

</head>
<body>
  <?php  require_once "lib/db.php";  ?>

  <?php
  $products= $db->query("SELECT * from products" , PDO::FETCH_OBJ)->fetchAll();
  ?>


<?php include "lib/navbar.php";?>



<div class="container">
    <h2 class="text-center">Ürün Listesi</h2>
    <hr>

    <div class="row">
      <?php
          foreach ($products as $products) {      ?>


        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="assets/images/<?php  echo $products->img_url; ?>" alt="<?php  echo $products->img_url; ?>">
                <div class="caption">
                    <h3><?php echo $products-> product_name; ?></h3>
                    <p><?php echo $products-> detail; ?></p>
                    <p class="text-right price-container"><strong><?php echo $products-> price; ?> TL</strong></p>
                    <p>

                        <button products-id="<?php echo $products->id; ?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Sepete Ekle
                        </a>
                    </p>
                </div>
            </div>
        </div>
  <?php   } ?>
    </div>
</div>





<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/pp.js"></script>
</body>
</html>
