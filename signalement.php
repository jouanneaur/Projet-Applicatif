<?php include('PHP/server.php');  
    if (!isset($_SESSION['username']))  
    {header('location: register.php');}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--    <a href="/CSS/stylesheet.css"></a>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini-Projet</title>
    <style>
        .fakeimg {
            height: 250px;
            background: #aaa;
        }

    </style>
</head>
<body>
    <!--    Navbar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="recherche.php">Recherche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="uploadPage.php">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tickets.php">Tickets</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="index.php">ClassTogether</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="perso.php">Page Perso</a></li>
                        <li><a href="mescours.php">Mes cours</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="index.php?logout='1'">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--    Body-->





    <!--    Footer-->
    <div class="jumbotron text-center mb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-left">
                    <h4>COPYRIGHT</h4>
                </div>
                <div class="col-lg-4 md-12 offset-lg-2 offset-md-1">
                    <h5>CONTACT US :</h5>
                    <br>
                    <div class="text-left">
                        Mail: <a href="mailto:romanoelgitano@example.com" target="_top">romanoelgitano@example.com</a>
                        <br>Adresse : 12 Route de Tours, 92300, Lille
                        <br>IBAN : 156486-45867
                        <br>Phone : +33 5 43 61 76 95
                    </div>
                </div>
                <div class="col-lg-4 md-12 offset-lg-1">
                    <h5>PARTENAIRES :</h5>
                    <br>
                    <div class="text-left">
                        <h6>ESAIP
                            <br>ESEA
                            <br>Père Dodu
                            <br>Fleuri Michon
                            <br>Jardiland</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
