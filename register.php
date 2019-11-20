<?php include('PHP/server.php');  
    if (isset($_SESSION['username']))  
    {header('location: index.php');}?>
    
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
                    <a class="nav-link" href="register.php">Recherche</a>
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
            <ul class="navbar-nav ml-auto bg-secondary rounded">
                <li class="nav-item">
                    <a class="nav-link text-light" href="register.php">Sign-In | Sign-up</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--    --------------->
    <div class="jumbotron text-center">
        <h1>School together</h1>
        <p>Pour des cours optimaux</p>
    </div>
    <!--    --------------->
    <div class="container shadow" style="margin-top:30px; margin-bottom:30px;">
        <div class="row">
            <div class="col-lg-6 md-12 border border-left-0  rounded">
                <h2>SIGN IN</h2>
                <form method="post" action="register.php">
                    <?php include('PHP/errors.php'); ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="login_user">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 md-12 border border-right-0 rounded">
                <h2>REGISTER</h2>
                <form method="post" action="register.php">

                    <?php include('PHP/errors.php'); ?>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                        <div class="input-group-append">
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_1">
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" class="form-control" name="password_2">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="reg_user">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--    Footer-->
    <div class="jumbotron text-center" style="margin-bottom:0">
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
