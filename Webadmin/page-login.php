<?php
session_start();
    	include ("baglanti.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Webtek- Giriş</title>
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
              $_SESSION['adi'] = $adi;
              header('Location:index.php');
            } else {
            echo "şifre yanlış.";
           }
          }else{
            echo "kullanıcı yok.";
          }
        }

      } else{
      ?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>WebTek</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post" action="page-login.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Giriş Yap</h3>
          <div class="form-group">
            <label class="control-label">Kullanıcı Adı</label>
            <input class="form-control" type="text" placeholder="Kullanıcı Adı" name="adi">
          </div>
          <div class="form-group">
            <label class="control-label">Şifre</label>
            <input class="form-control" type="password" placeholder="Şifre" name="sifre">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Beni hatırla</span>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Giriş Yap</button>
          </div>
        </form>
        <form class="forget-form" action="index.php">
          <div class="form-group btn-container">
          </div>
          <div class="form-group mt-3">
          </div>
        </form>
      </div>
    </section>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <?php } ?>
  </body>
</html>
