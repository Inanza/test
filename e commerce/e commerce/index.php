<?php
	require 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}


.header {
  padding: 30px;
  text-align: center;
  background: #8b98ad;
}

.header h1 {
  font-size: 50px;
}


.topnav {
  overflow: hidden;
  background-color: #62728c;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #8b98ad;
  color: black;
}


.leftcolumn {   
  float: left;
  width: 25%;
}


.rightcolumn {
  float: left;
  width: 75%;
  background-color: #f1f1f1;
  padding-left: 20px;
}


.fakeimg {
  background-color: #8b98ad;
  width: 100%;
  padding: 20px;
}


.card {
  background-color: #62728c;
  padding: 20px;
  margin-top: 20px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #8b98ad;
  margin-top: 20px;
}


@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}


@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
    <img src="gambar/home.jpeg" />
</div>

<div class="topnav">
  <a href="home.php">HOME</a>
  <a href="pesawat.php">TIKET PESAWAT</a>
  <a href="kereta.php">TIKET KERETA</a>
  <a href="panduan.php">PANDUAN</a>
  <a href="galeri.php" style="float:right">GALERI</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>LOGIN</h2>
      <h5>Silakan login untuk melanjutkan</h5>
	  <form name="login" action="ceklogin.php" method="POST">
		<p>Username:</p>
		<input type="text" name="username" />
		<p>Password:</p>
		<input type="password" name="password" /><br /><br />
		<input type="submit" name="submit" value="login" />
	  </form>
      
    </div>
    <div class="card">
      <h5>WUJUDKAN LIBURANMU DENGAN MENGGUNAKAN TRANSPORTASI AMAN DAN NYAMAN</h5>
      <div class="fakeimg" style="height:300;"><img src="gambar/kereta api.jpg" width=100% height=100%/></div>
     
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Selamat Datang </h2>
      <div class="fakeimg" style="height:600px;"><img src="gambar/22.jpg" width=100% height=100%/></div>
	   
      <p>KESELAMATAN KITA NOMER 1</p>
    </div>
    
  </div>
</div>

<div class="footer">
<img src="gambar/14.png" width=60% height=500			
%>
</div>

</body>
</html>
