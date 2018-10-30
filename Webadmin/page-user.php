<?php  include 'baglanti.php'; ?>

<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Webtek  - Yönetici Ayarları  </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">

    <?php
         if($_POST) {
           $adi = trim(strip_tags($_POST["adi"]));
           $sifre = trim(strip_tags($_POST["sifre"]));
           $eposta = trim(strip_tags($_POST["eposta"]));
           $telefon = trim(strip_tags($_POST["telefon"]));

           if($adi && $telefon && $eposta && $sifre) {
             $query = $db->prepare("INSERT INTO giris set adi = ?, sifre = ?, eposta = ?, telefon = ?");
             $query->execute([
               $adi,
               $sifre,
               $eposta,
               $telefon
             ]);
             if($query->rowCount() == 1) {
               echo "İşlem başarılı";
             } else {
               echo "İşlem başarısız ";
             }
           }else {
             echo "boş alan bırakmayınız";
           }
          }else{
           echo 'Bir hata oluştu';
         }
    ?>

    <header class="app-header"><a class="app-header__logo" href="index.php">WebTek</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Arama">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-cog fa-lg"></i> Ayarlar</a></li>
            <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-user fa-lg"></i> Profil</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Çıkış Yap</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="bekir.jpg" alt="User Image" height="50px">
        <div>
          <p class="app-sidebar__user-name">Bekir Uyar</p>
          <p class="app-sidebar__user-designation">Yönetici</p>
        </div>
      </div>
      <ul class="app-menu">
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tablo</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.php"><i class="icon fa fa-circle-o"></i> Tablo Seçenekleri</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i> Satış tablosu</a></li>
          </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="page-login.php"><i class="icon fa fa-circle-o"></i> Giriş</a></li>
            <li><a class="treeview-item" href="page-lockscreen.php"><i class="icon fa fa-circle-o"></i> Kilitleme</a></li>
            <li><a class="treeview-item active" href="page-user.php"><i class="icon fa fa-circle-o"></i> Kullanıcı</a></li>
            <li><a class="treeview-item" href="page-invoice.php"><i class="icon fa fa-circle-o"></i> Fatura </a></li>
            <li><a class="treeview-item" href="page-calendar.php"><i class="icon fa fa-circle-o"></i> Takvim </a></li>
            <li><a class="treeview-item" href="page-mailbox.php"><i class="icon fa fa-circle-o"></i> Posta Kutusu</a></li>
            <li><a class="treeview-item" href="page-error.php"><i class="icon fa fa-circle-o"></i>Hata mesajı</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="bekir.jpg">
              <h4>Bekir Uyar</h4>
              <p>Yönetici</p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Paylaşım</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Ayarlar</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img src="bekir.jpg" height="50px"></a>
                  <div class="content">
                    <h5><a href="#">Bekir Uyar</a></h5>
                    <p class="text-muted"><small>2 Ocak at 9:30</small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>Paylaşımı olmuş veya yazılacak bir durum..</p>
                </div>
              </div>
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img src="bekir.jpg" height="50px"></a>
                  <div class="content">
                    <h5><a href="#">Bekir Uyar</a></h5>
                    <p class="text-muted"><small>2 Ocak at 9:30 </small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>Paylaşımı olmuş veya yazılacak bir durum..</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Ayarlar</h4>

                <form method="post" >
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>İsim</label>
                      <input class="form-control" type="text" name="adi">
                    </div>
                    <div class="col-md-4">
                      <label>Şifre</label>
                      <input class="form-control" type="password" name="sifre">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Eposta</label>
                      <input class="form-control" type="text" name="eposta">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Telefon Numarası</label>
                      <input class="form-control" type="text" name="telefon" >
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit" t><i class="fa fa-fw fa-lg fa-check-circle"></i>Ekle</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
