
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>yasyas books</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script>
      $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
      });
    </script>
  </head>

  <body>
    <!-- //navigation bar yas -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#d74b35;">
      <div class="container-fluid">
        <div class="navbar-header">    
          <a class="navbar-brand" href="#"><img src="/images/logo.png" style="width:80px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">
        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="/" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
        </li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>
          <li class="a"><a href="/login" style="color:#fff;"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
        </ul>
          <div class="clear"></div>      
          </div>
      </div>
    </nav>
    <!-- //beres navigation bar -->

    @yield('container')

    <!-- //list buku -->
    <div style="margin-top: 2px; width:100%,height:50px;text-align:center;background:#d74b35;color:#fff;line-height:60px;font-size:20px;">
        <center><b>Store</b></center>
    </div>

    <div class="container">
      <div class="row">
        @foreach($buku as $buku)
        <div class="col-md-3" style="margin-top:20px;">
          <div class="buku">
            <center><img src="/images/<?php echo $buku['gambar'] ?>" style="margin-top:20px; width:210px;height:200px;"></center>
            <h3 style="text-align:center; color:#f97b61;"><?php echo $buku['judul'] ?></h3>
            <center><b><?php echo $buku['nama']; ?></center>
            <center><b>Harga</b> Rp.<?php echo $buku['harga']; ?></center>
         </div>
        </div>
        @endforeach
      </div>
      <hr>
    </div>

    <!-- fotter website ==================================================================== -->
    <div class="footer" style="width:100%;height:270px;color:#fff;background:#d74b35;">
      <div class="row" style="background:#7e7c78;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Tentang BigCatCompany</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>kerudung/b> adalah</li>
          <li>Sebuah toko kerudung online</li>
          <li>yang menyediakan semua</li>
          <li>jenis kerudung</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl.Universitas Jenderal Achmad Yani</li>
          <li>Cibeber, Cimahi</li>
          <li>Jawa Barat, Indonesia</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <ul>
          <li style="color:#f97b61"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="www.fecebook.com"><img src="/images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href="www.googleplus.com"><img src="/images/gp.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="/images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>&copy;  Informatika 2016 </center>
        </div>
      </div>
  </body>
</html>
