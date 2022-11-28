<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Ghani_1202204308</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link require rel='stylesheet' href='../asset/style/style.css'>
</head>
<body>

<?php 
    include 'config/connector-user.php';

    $email = $_COOKIE['email'];
    $sql = mysqli_query($connector, "SELECT * FROM user_ghani WHERE email = '$email'");
    $result = mysqli_fetch_assoc($sql);
?>
      <section class="profile">
        <div class="">
            <form action="config/edit-profile.php" method="post">
              <div class="container mt-5">
                  <h5 class="text-center">Profile</h5>
              </div>
              <div class="form-group mb-3 with row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="email" id="staticEmail" value="<?=$email?>">
                </div>
              </div>
              <div class="form-group mb-3 with row">
                  <label for="profilename" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="profilename" name="nama" value="<?=$result['nama']?>">
                  </div>
              </div>
              <div class="form-group mb-4 with row">
                  <label for="profileno" class="col-sm-2 col-form-label">No.HP</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="profileno" name="no.hp" value="<?=$result['no_hp']?>">
                  </div>
              </div>
              <hr class="mb-4">
              <div class="form-group mb-4 with row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="pass" value="">
              </div>
              <div class="form-group mt-2 with row">
              <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
              <input type="password" class="form-control" id="confirmpassword" name="fix_pass" value="">
              </div>

              <div class="form-group mt-2 wit row">
              <label for="car" class="col-sm-2 col-form-label">Navbar</label>
              <div class="col-sm-10">
                        <select name="warna" id="warna" class="form-select">
                            <option value="" disabled>Pilih Warna</option>
                            <option value="" <?= !isset($_COOKIE['warna']) ? 'selected' : ''  ?>>Default</option>
                            <option value="lightblue" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'lightblue' ? 'selected' : '' ?>>Light Blue</option>
                            <option value="lightgreen" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'lightgreen' ? 'selected' : '' ?>>Light Green</option>
                            <option value="black" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'black' ? 'selected' : '' ?>>Black</option>
                        </select>
              </div>
            <button type="submit" class="btn btn-primary mt-5 mb-5 profile-btn">Update</button>
            </div>
                        <div class="rows-home d-flex">
                            <div>
                                <img class="logo" src="asset/images/logo-ead.png" alt="logo ead">
                            </div>
                            <div class="nim">
                                <p> Abdul Ghani Muzakki_1202204308</p> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>