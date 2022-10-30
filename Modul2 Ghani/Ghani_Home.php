<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>TP MODUL 2</title>
</head>
<body>
    <?php 
    $ayla= "images/ayla 1.png";
    $brio= "images/brio 1.jpg";
    $rush= "images/rush 1.png";
    ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-dark fixed-top navbar-dark">
      <div class="container-fluid d-flex justify-content-center"> 
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Ghani_Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Ghani_Booking.php">Booking</a>
            </li>
          </ul>
      </div> 
    </nav>

    <!-- Header -->
    <header>
        <div class="container text-center">
            <h2 style="margin-top: 100px;">WELCOME TO EAD RENT</h2>
            <p style="margin-top: 20px; font-size: 20;">Find your best deal, here!</p>
        </div>
    </header>

    <!-- Pilihan Mobil -->
    <div class="container d-flex justify-content-between">
        <div class="card" style="width: 25rem;">
            <img src="images/rush 1.png" class="card-img-top" alt="Toyota Rush">
            <div class="card-body">
                <h5 class="card-title">Toyota Rush</h5>
                <p class="card-text">Rp. 200.000 / day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">7 Kursi</li>
                <li class="list-group-item">1500 CC</li>
                <li class="list-group-item">Manual</li>
            </ul>
            <div class="card-body text-center">
                <a class="btn btn-primary" href="Ghani_Booking.php?MyCar=<?php echo $rush ?>" role="button">Book Now</a>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="images/ayla 1.png" class="card-img-top" alt="Daihatsu Ayla" height= 240px>
            <div class="card-body">
                <h5 class="card-title">Daihatsu Ayla</h5>
                <p class="card-text">Rp. 150.000 / day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">5 Kursi</li>
                <li class="list-group-item">1200 CC</li>
                <li class="list-group-item">Manual</li>
            </ul>
            <div class="card-body text-center">
                <a class="btn btn-primary" href="Ghani_Booking.php?MyCar=<?php echo $ayla ?>" role="button">Book Now</a>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="images/brio 1.jpg" class="card-img-top" alt="Honda Brio" height= 240px>
            <div class="card-body">
                <h5 class="card-title">Honda Brio</h5>
                <p class="card-text">Rp. 150.000 / day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">5 Kursi</li>
                <li class="list-group-item">1200 CC</li>
                <li class="list-group-item">Automatic</li>
            </ul>
            <div class="card-body text-center">
                <a class="btn btn-primary" href="Ghani_Booking.php?MyCar=<?php echo $brio ?>" role="button">Book Now</a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container mt-5">
        <p class= text-center> Created by GHANI_1202204308 </p>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>
</body>
</html>