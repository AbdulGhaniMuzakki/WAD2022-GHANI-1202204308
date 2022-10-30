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
    function carousel() {
        if (isset($_GET["MyCar"])) {
            echo "<img src='{$_GET['MyCar']}' class='w-100' alt='{$_GET["MyCar"]}'/>";
          } else {
            echo "<div id='carouselExampleControls' class='carousel carousel-dark slide' data-bs-ride='carousel'>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img src='images/rush 1.png' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='images/ayla 1.png' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='images/brio 1.jpg' class='d-block w-100' alt='...'>
              </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Next</span>
            </button>
          </div>";
          }
        }
    function CarType() {
        if (isset($_GET["MyCar"]) and $_GET["MyCar"]=="images/ayla 1.png"){
            echo "<input class='form-control' type='text' value='Daihatsu Ayla' name='Jenis_Mobil' readonly>";
        }
        else if (isset($_GET["MyCar"]) and $_GET["MyCar"]=="images/brio 1.jpg"){
            echo "<input class='form-control' type='text' value='Honda Brio' name='Jenis_Mobil' readonly>";
        }
        else if (isset($_GET["MyCar"]) and $_GET["MyCar"]=="images/rush 1.png"){
            echo "<input class='form-control' type='text' value='Toyota Rush' name='Jenis_Mobil' readonly>";
        }
        else{
            echo "<select class='form-select' id='Car_Type' name='Jenis_Mobil'>
            <option selected>Pilih Mobil</option>
            <option value='Toyota Rush'>Toyota Rush</option>
            <option value='Daihatsu Ayla'>Daihatsu Ayla</option>
            <option value='Honda Brio'>Honda Brio</option>
        </select>";
        }
    }
    
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
            <h2 style="margin-top: 100px;">Rent Your Car Now!</h2>
        </div>
    </header>

    <!-- Mobil -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">  
                <?php echo carousel() ?>  
            </div>
            <div class="col-6">
            <form action="Ghani_MyBooking.php" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="Name" class="form-control" id="Name" value="Ghani_1202204308" name="nama" readonly>
                    </div> 
                    <div class="mb-3">
                        <label for="Book Date" class="form-label">Book Date</label>
                        <input type="Date" class="form-control" id="Book Date" name="Tanggal_pesan">
                    </div>
                    <div class="mb-3">
                        <label for="Start Time" class="form-label">Start Time</label>
                        <input type="Time" class="form-control" id="Start Time" name="Waktu_mulai">
                    </div>
                    <div class="mb-3">
                        <label for="Duration (Days)" class="form-label">Duration (Days)</label>
                        <input type="Duration (Days)" class="form-control" id="Duration (Days)" name="Durasi">
                    </div>
                    <div class="mb-3">
                        <label for="Car Type" class="form-label">Car Type</label>
                        <?=CarType();?>
                    </div>
                    <div class="mb-3">
                        <label for="Phone Number" class="form-label">Phone Number</label>
                        <input type="Phone Number" class="form-control" id="Phone Number" name="No_Telepon">
                    </div>
                    <span>Add Service(s)</span>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Service_1" value="Health Protocol" id="Service 1">
                        <label class="Service 1" for="Service 1">
                            Health Protocol / Rp. 25.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Service_2" value="Driver" id="Service 2">
                        <label class="Service 2" for="Service 2">
                            Driver / Rp. 100.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Service_3" value="Fuel filled" id="Service 3">
                        <label class="Service 3" for="Service 3">
                            Fuel filled / Rp. 250.000
                        </label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" role="button">Book Now</button> 
                    </div>    
            </form>
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