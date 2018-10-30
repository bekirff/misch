<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/pp.css">

</head>
<body>

  <?php  include "lib/navbar.php" ?>

<div class="container">
  <?php if($total_count > 0)  { ?>
    <h2 class="text-center">Sepetinizde  <strong class="color-danger"><?php echo $total_count; ?></strong> Adet ürün bulunmaktadır
    </h2>
    <div class="col-md-8 col-md-offset-2">
      <table class="table table-hover table-bordered table-striped">
        <thead>
          <th class="text-center">Ürün Resmi</th>
          <th class="text-center">Ürün Adı</th>
          <th class="text-center">Fiyatı</th>
            <th class="text-center">Adeti</th>
          <th class="text-center">Toplam</th>
          <th class="text-center">Sepetten Çıkar</th>
        </thead>
        <tbody>

          <?php foreach ($shopping_products as  $products) { ?>

            <tr>
              <td class="text-center" width="120px">    <img src="assets/images/<?php  echo $products->img_url; ?>" alt="" width="50px">      </td>
                  <td class="text-center"><?php  echo $products->product_name; ?></td>
                  <td class="text-center"><strong><?php  echo $products->price; ?> TL</strong></td>
                  <td class="text-center">

                    <a href="lib/cart_db.php?p=incCount&product_id=<?php  echo $products->id; ?>" class="btn btn-xs btn-success">
                      <span class="glyphicon glyphicon-plus"></span>
                    </a>
                    <input type="text" name="" value="<?php  echo $products->count; ?>" class="item-count-input">
                    <a href="lib/cart_db.php?p=decCount&product_id=<?php  echo $products->id; ?>" class="btn btn-xs btn-danger">
                      <span class="glyphicon glyphicon-minus"></span>
                    </a>
                  </td>
                  <td class="text-center"><?php  echo $products->total_price; ?> TL</td>
                  <td class="text-center" width="120">
                    <button product_id="<?php  echo $products->id; ?>"  class="btn btn-danger btn-sn removeFromCart">
                      <span class="glyphicon glyphicon-remove"></span>
                      Sepetten Çıkar
                    </button>
                  </td>
            </tr>

            <?php } ?>

        </tbody>

        <tfoot>
          <th colspan="2" class="text-right">
            Toplam Ürün : <span class="color-danger"><?php  echo $total_count; ?> Adet</span>
          </th>

          <th colspan="4" class="text-right">
            Toplam Tutar : <span class="color-danger"><?php  echo $total_price  ; ?> TL</span>
          </th>
        </tfoot>
      <?php } else { ?>
        <div class="alert alert-info">
          <strong>Sepetinizde Henüz Bir Ürün Bulunmamaktadır.Eklemek için  <a href="ürün.php">Tıklayınız</strong>
        </div>
      <?php } ?>
      </table>
    </div>
  </div>
    </div>
  </div>



<!------------------------- #Main Content ------------------------------>

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/pp.js"></script>
  </body>
</html>
