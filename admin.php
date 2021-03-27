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
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body id="home">






   <!-- NAVBAR-->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary warning shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">Back</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" >
            Menu 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#home">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#about">Edit About</a></li>
            <li><a class="dropdown-item" href="#gallery">Edit Gallery</a></li>
            <li><a class="dropdown-item" href="#contact">Edit data Contact</a></li>
          </ul>
        </li>
          <!-- <a class="nav-link active" aria-current="page" href="#home">Edit Profile</a>
          <a class="nav-link active"" href="#about">Edit About</a>
          <a class="nav-link active"" href="#gallery">Edit Gallery</a> -->
          
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->

    <!-- JUMBOTRON -->
    <section class="jumbotron text-center">
      <img src="img/faqih.jpg" alt="" width="200" class="rounded-circle img-thumbnail"/>
      <br><br/>
      <button  href= "editprofile.php" type="submit" value="simpan" class="btn btn-primary">Edit Profile</button>
      <!-- Waves -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L21.8,192C43.6,192,87,192,131,197.3C174.5,203,218,213,262,202.7C305.5,192,349,160,393,149.3C436.4,139,480,149,524,181.3C567.3,213,611,267,655,245.3C698.2,224,742,128,785,106.7C829.1,85,873,139,916,154.7C960,171,1004,149,1047,165.3C1090.9,181,1135,235,1178,266.7C1221.8,299,1265,309,1309,309.3C1352.7,309,1396,299,1418,293.3L1440,288L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
      <!-- Waves -->
    </section>
    <!-- JUMBOTRON -->




    <!-- ABOUT -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col pb-5">
            <h2>About Me</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
            <button  type="submit" value="simpan" class="btn btn-primary">Edit About</button> 
          </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8db6f8" fill-opacity="1" d="M0,96L26.7,112C53.3,128,107,160,160,192C213.3,224,267,256,320,240C373.3,224,427,160,480,122.7C533.3,85,587,75,640,106.7C693.3,139,747,213,800,218.7C853.3,224,907,160,960,117.3C1013.3,75,1067,53,1120,74.7C1173.3,96,1227,160,1280,181.3C1333.3,203,1387,181,1413,170.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    </section>
    <!-- ABOUT -->







    <!-- GALLERY -->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col pb-5">
            <h2>My Projects</h2>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/Projects/pesawat.jpeg" class="card-img-top" alt="Mac-1">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/Projects/mobil.jpg" class="card-img-top" alt="Mac-2">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/Projects/kapal.jpg" class="card-img-top" alt="Mac-3">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,229.3C384,213,480,139,576,106.7C672,75,768,85,864,106.7C960,128,1056,160,1152,192C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- GALLERY -->
   











<!-- CONTACT -->

<section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">

<table border="1" width="600px" align="center" class="bg-warning mb-5 bg-white">
       <thead>
       <tr>
           <th>Nama </th>
           <th>Email</th>
           <th>Pesan</th>
           <th>Hapus</th>
           
       </tr>
       </thead>

       <tbody>
<?php
//ambil data dari tb_admin di database
$ambildata=mysqli_query($connect, "SELECT * FROM form order by nama desc");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['Nama'];?></td>
           <td><?php echo $a['Email'];?></td>
           <td><?php echo $a['pesan'];?></td>
           <td><a href='prosesedit.php?nama=$a[Nama]'>Edit</a> | <a href='hapus.php?nama=$a[Nama]'>Delete</a></td></tr>   
       </tr>
<?php
}
?>
</tbody>

</table>

</div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc403" fill-opacity="1" d="M0,96L26.7,112C53.3,128,107,160,160,192C213.3,224,267,256,320,240C373.3,224,427,160,480,122.7C533.3,85,587,75,640,106.7C693.3,139,747,213,800,218.7C853.3,224,907,160,960,117.3C1013.3,75,1067,53,1120,74.7C1173.3,96,1227,160,1280,181.3C1333.3,203,1387,181,1413,170.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
</section>
<!-- CONTACT -->








<!-- FOOTER -->
<footer class="bg-warning text-white text-center pb-3 pt-5">
<p>Created by : <a href="https://www.instagram.com/mldnfaqih_/" class="text-white fw-bold">Mauludin Faqih</a></p> 
</footer>
<!-- FOOTER -->



      <!-- Finishing -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
