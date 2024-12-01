
<!DOCTYPE html>
<html>
<head>
	<title>Martabak Jakarta 1994</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/login-style.css">
</head>
<body>



  <div class="wrapper">
    <div class="form login">
      <h2 class="redgamers">Buat Akun Baru</h2>

      <form method="post" action="tambah_aksi_registrasi.php">
      <label>
        <span>Nama Lengkap</span>
        <input type="text" class="placeholder" name="full_name" required="required">
      </label>
      <label>
        <span>Email</span>
        <input type="email" class="placeholder" name="email" required="required">
      </label>
      <label>
        <span>Password</span>
        <input class="placeholder" type="password" name="password" required="required">
      </label>
      <label>
        <span>Alamat Rumah</span>
        <input type="text" class="placeholder" name="address" required="required">
      </label>
      <label>
        <span>Nomor WhatsApp/Telepon</span>
        <input type="text" class="placeholder" name="phone_number" required="required">
      </label>
      <!--<a href="./login.php">-->
        <button class="enter">Daftar</button>
      <!--</a>-->
      </form>
    </div>


    <div class="slide-daftar">
      <div class="img">
        <div class="img-text">
          <h2>Sudah Memiliki Akun?</h2>
          <p>Jika anda sudah memiliki akun, cukup login untuk mengakses website!</p>
        </div>
        <div class="img-btn">
            <a href="./login.php"><span class="">Login</span></a>
        </div>
      </div>
    </div>
  </div>

  <!--Possible issue on slide effect in some versions of safari without live reload support.-->
<!--<script type="text/javascript"> 
   document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.wrapper').classList.toggle('s-signup')
	}

);

function myFunction1() {
    document.getElementById("Email").placeholder = "Masukkan Email";
    document.getElementById("password").placeholder = "Masukkan Password";
  };
function myFunction2() {
    document.getElementById("name").placeholder = "Masukkan Nama Lengkap";
    document.getElementById("maillogin").placeholder = "Masukkan email";
    document.getElementById("passworddaftar").placeholder = "Masukkan password";
    document.getElementById("address").placeholder = "Masukkan Alamat Lengkap Rumah Anda";
  };
-->
</script>
</body>
</html>


