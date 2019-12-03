<!DOCTYPE html>
<html>
<head>
	<title>login aplikasi</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <script type="text/javascript">

   
var promises = [];
function makePromise(i, video) {
  promises[i] = new $.Deferred();
 
  video.oncanplaythrough = function() {

    promises[i].resolve();
  }
}
$('video').each(function(index){
  this.pause();
  makePromise(index, this);
})

$.when.apply(null, promises).done(function () {
  $('video').each(function(){
    this.play();
  });
});

  </script>
</head>
<body>
<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="video/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="video/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Silahkan Login</h1>
      <form action="/cek_login" method="post">
      @csrf
        <input type="text" placeholder="Username" name="username"/>
        <input type="password" placeholder="Password" name="password" />
        <button type="submit">Login</button>
      </form>
      <p>Belum punya akun?
       <span><a href="/registration">Daftar</a></span></p>
    </div>
  </div>
</div>
</body>
</html>