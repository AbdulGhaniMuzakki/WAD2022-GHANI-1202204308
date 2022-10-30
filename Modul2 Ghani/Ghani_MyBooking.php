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
    <title>TP MODUL 2</title>
</head>
<body>
<?php
    $name = $_POST["nama"];
    $book_date = $_POST["Tanggal_pesan"];
    $start_time = $_POST["Waktu_mulai"];
    $duration = $_POST["Durasi"];
    $car_type = $_POST["Jenis_Mobil"];
    $phone_number = $_POST["No_Telepon"];
    $checkout = date("Y-m-d", strtotime("+$duration days", strtotime($book_date)));
    $service = [];
    $service_cost = [];
    $service_subtotal = 0;
    
    if (isset($_POST["Service_1"])) {
    array_push($service, $_POST["Service_1"]);
    array_push($service_cost, 25000);
    }
    if (isset($_POST["Service_2"])) {
    array_push($service, $_POST["Service_2"]);
    array_push($service_cost, 100000);
    }
    if (isset($_POST["Service_3"])) {
    array_push($service, $_POST["Service_3"]);
    array_push($service_cost, 250000);
    }

    if ($car_type == "Toyota Rush") {
    $price = 200000;
    } 
    else {
    $price = 150000;
    }

    for ($i = 0; $i < count($service_cost); $i++) {
    $service_subtotal = $service_subtotal +  $service_cost[$i];
    }

    $total_price = ($price * $duration) + $service_subtotal;
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
            <h2 style="margin-top: 100px;">Thank You Ghani_1202204308 for Reserving</h2>
            <p style="margin-top: 30px;">Please double check your reservation details</p>
        </div>
    </header>
    
    <!-- Table -->
    <div class="container" style="min-height: 492px;">
      <div class="table-responsive">     
        <table class="table table-striped table-light  align-middle">
          <thead>
            <tr>
              <th scope="col">Booking Number</th>
              <th scope="col">Name</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col" width="10%">Car Type</th>
              <th scope="col">Phone Number</th>
              <th scope="col" width="15%">Service(s)</th>
              <th scope="col" width="10%">Total Price</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><?= rand() ?></th>
              <td><?= $name; ?></td>
              <td><?= $book_date; ?> <?= $start_time; ?></td>
              <td>
                <?= $checkout; ?> <?= $start_time; ?>
              </td>
              <td><?= $car_type; ?></td>
              <td><?= $phone_number; ?></td>
              <td>
                <?php if (empty($service)) {
                  echo "No Service";
                } else { ?> 
                    <ul>

                      <?php foreach($service as $service_results) { ?>
                        <li><?= $service_results; ?></li>
                      <?php } ?>            
                    </ul>          
                <?php }?>  
              </td>
              <td><?= "Rp", number_format($total_price, 0, ",", "."); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

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