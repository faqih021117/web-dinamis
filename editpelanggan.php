<?php
include'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--   Created By Mauludin faqih -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Hello, world!</title>
  </head>
  <body id="home">






   <!-- NAVBAR-->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Edit Pelanggan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link active" aria-current="page" href="datapelanggan.php">Back</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Edit Data</a></li>
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Edit about</a></li>
          </ul>
        </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->



  <section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">

        <form action="prosesedit.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" name ="nama" class="form-control" id="exampleInputEmail1" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label" >Pesan</label>
            <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
          </div>
          <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
</section>
   

 

      <!-- Waves -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L21.8,192C43.6,192,87,192,131,197.3C174.5,203,218,213,262,202.7C305.5,192,349,160,393,149.3C436.4,139,480,149,524,181.3C567.3,213,611,267,655,245.3C698.2,224,742,128,785,106.7C829.1,85,873,139,916,154.7C960,171,1004,149,1047,165.3C1090.9,181,1135,235,1178,266.7C1221.8,299,1265,309,1309,309.3C1352.7,309,1396,299,1418,293.3L1440,288L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
      <!-- Waves -->
    </section>


      <!-- Finishing -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
