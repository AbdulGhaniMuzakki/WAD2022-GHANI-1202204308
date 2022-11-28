<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Ghani_1202204308</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='style/style.css?v=<?php echo time(); ?>'>

</head>
<body>
    <?php
        include'config/connector.php';

        function NavColour($val) {
            echo $val;
        }

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark <?= isset($_COOKIE['warna']) ? NavColour($_COOKIE['warna']) : '' ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide-nav' : '' ?>">
        <div class="container px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-link active"  aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="<?php
                  include 'config/connector.php';
                  include 'config/connector-user.php';
                  $sql = "SELECT * FROM showroom_ghani_table";
                  $result = mysqli_query($connector, $sql);

                  if (mysqli_num_rows($result) > 0) {
                     echo 'index.php?page=My_Car';
                  } else {
                     echo 'index.php?page=additem';
                  }
                  ?>">Mycar</a>
                </div>
            </div>
            
            <div class="navbar-home">
                <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_COOKIE['nama'] ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                        <li><a class="dropdown-item" href="config/logout.php">Logout</a></li> 
                    </ul>
                </div>
                <div class="navcar">
                    <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link nav-login" href="index.php?page=login">Login</a>
                </div>
            </div>
            <div>
             <a href="index.php?page=additem" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="addcar-button">Add Car</a>
            </div>
        </div>
    </nav>

    <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];

            switch ($page) {
                case 'detail':
                    include "pages/Detail-Ghani.php";
                    break;
                case 'edit':
                    include "pages/Edit-Ghani.php";
                    break;
                default:
                    echo "<center><h3>Sorry, Page that you found was not finded !</h3></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'My_Car':
                    include "pages/List-Ghani.php";
                    break;
                case 'logout':
                    include "config/logout.php";
                    break;
                case 'additem':
                    include "pages/Add-Ghani.php";
                    break;
                case 'login':
                    include "pages/Login-Ghani.php";
                    break;
                case 'register':
                    include "pages/Register-Ghani.php";
                    break;
                case 'profile':
                    include "pages/Profile-Ghani.php";
                    break;
                default:
                    echo "<center><h3>Sorry, Page that you found was not finded !</h3></center>";
                    break;
            }
        }
        else {
            include "pages/Home-Ghani.php";
        }
    ?>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E</script>
</body>
</html>