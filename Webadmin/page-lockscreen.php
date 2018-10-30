<?php
include ("baglanti.php");
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Webtek - Lockscreen</title>
  </head>
  <body>
    <?php
      if ($_POST)
      {
        $adi = $_POST["adi"];
        $sifre = $_POST["sifre"];
        if (empty($adi)  || empty($sifre))
        {
          echo "Boş alan bırakmayınız";
        }else{
          $kontrol = $db->prepare("select * from giris WHERE adi = ?");
          $kontrol->execute([$adi]);
          if ($kontrol->rowCount() == 1) {
            $data = $kontrol->fetch(PDO::FETCH_ASSOC);
            if($data["sifre"] ==  $sifre ) {
              echo "giris başarılı";
            } else {
            echo "şifre yanlış.";
           }
          }else{
            echo "kullanıcı yok.";
            header("location: index.php");
          }
        }

      } else{

      ?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="lock-box"><img class="rounded-circle user-image" src="bekir.jpg">
        <h4 class="text-center user-name">Bekirff</h4>
        <p class="text-center text-muted">Hesap Kilitlendi</p>
        <form class="unlock-form" action="index.php">
          <div class="form-group">
            <label class="control-label">Şifre</label>
            <input class="form-control" type="password" placeholder="Şifre" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>Kilidi Aç </button>
          </div>
        </form>
        <p><a href="page-login.php">Bekir değil misin?   .</a></p>
      </div>
    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
  <?php } ?>
  </body>
</html>
