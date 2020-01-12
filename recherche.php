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
    <div class="container shadow mt-4 mb-4">

        <!--RECHERCHES FILTRES-->
        <h2>Rechercher un cours</h2>
        <p>Selectionner deux des filtres si dessous pour pouvoir effectuer votre recherche</p>

        <!-- Code de recherche du titre à faire (se renseigner sur filters bootsrap)-->
        <p class="mt-2">Chercher un titre en particulier :</p>
        <input class="form-control" id="myInput" type="text" placeholder="Titre..">

        <!-- Dropdown list-->
        <div class="row mt-3">
            <div class="dropdown col-6">
                <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown">
                    Niveau d'étude
                </button>
                <div class="dropdown-menu">
                    <!--A remplir via bdd-->
                    <a class="dropdown-item" href="#">BAC</a>
                    <a class="dropdown-item" href="#">BAC+1</a>
                    <a class="dropdown-item" href="#">BAC+2</a>
                </div>
            </div>
            <div class="dropdown col-6">
                <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown">
                    Matière
                </button>
                <div class="dropdown-menu">
                    <!--A remplir via bdd-->
                    <a class="dropdown-item" href="#">Maths</a>
                    <a class="dropdown-item" href="#">Français</a>
                    <a class="dropdown-item" href="#">anglais</a>
                </div>
            </div>

        </div>

        <!-- Code de recherche rapide de filière-->
        <p class="mt-2">Chercher une filière en particulier :</p>
        <input class="form-control " id="myInput" type="text" placeholder="Filière..">

        <div class="row mt-4 mb-4">
            <div class="col-lg-4 col-sm-12">
                <a href="#recherche" class="btn btn-primary btn-block" data-toggle="collapse">Recherche</a>
            </div>
        </div>

        <!--RESULTATS RECHERCHE-->
        <div id="recherche" class="collapse">
            <h5>Resultats :</h5>
            <!-- Affichage qui devra s'auto générer suivant ce schéma-->
            <div class="row">
                <!--Code à générer-->
                <div class="col-lg-4 mb-4">
                    <div class="card" data-toggle="modal" data-target="#myModal1">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-8">Optimisation</h5>
                                <h5 class="border-left col-4 text-center">3.5/5</h5>
                            </div>
                            <div class="row text-center">
                                <p class="card-text col-4 border-top">Niveau étude</p>
                                <p class="card-text col-4 border-top border-right border-left">Filière</p>
                                <p class="card-text col-4 border-top">Matière</p>
                            </div>
                            <p class="card-text border-top overflow-hidden">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adicghxhxghxhjddfnseoqignqionqozg</p>
                        </div>
                    </div>
                </div>
                <!--FIN Code à générer-->
                <!--Code exemple-->
                <div class="col-lg-4 mb-4">
                    <div class="card" data-toggle="modal" data-target="#myModal1">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-8">Ondes et Signaux</h5>
                                <h5 class="border-left col-4 text-center">NEW</h5>
                            </div>
                            <div class="row text-center">
                                <p class="card-text col-4 border-top">Niveau étude</p>
                                <p class="card-text col-4 border-top border-right border-left">Filière</p>
                                <p class="card-text col-4 border-top">Matière</p>
                            </div>
                            <p class="card-text border-top overflow-hidden">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adicghxhxghxhjddfnseoqignqionqozg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" data-toggle="modal" data-target="#myModal1">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-8">Optimisation</h5>
                                <h5 class="border-left col-4 text-center">2.3/5</h5>
                            </div>
                            <div class="row text-center">
                                <p class="card-text col-4 border-top">Niveau étude</p>
                                <p class="card-text col-4 border-top border-right border-left">Filière</p>
                                <p class="card-text col-4 border-top">Matière</p>
                            </div>
                            <p class="card-text border-top overflow-hidden">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adicghxhxghxhjddfnseoqignqionqozg </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" data-toggle="modal" data-target="#myModal1">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-8">Optimisation</h5>
                                <h5 class="border-left col-4 text-center">4.9/5</h5>
                            </div>
                            <div class="row text-center">
                                <p class="card-text col-4 border-top">Niveau étude</p>
                                <p class="card-text col-4 border-top border-right border-left">Filière</p>
                                <p class="card-text col-4 border-top">Matière</p>
                            </div>
                            <p class="card-text border-top overflow-hidden">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adicghxhxghxhjddfnseoqignqionqozg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" data-toggle="modal" data-target="#myModal1">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-8">Optimisation</h5>
                                <h5 class="border-left col-4 text-center">3.5/5</h5>
                            </div>
                            <div class="row text-center">
                                <p class="card-text col-4 border-top">Niveau étude</p>
                                <p class="card-text col-4 border-top border-right border-left">Filière</p>
                                <p class="card-text col-4 border-top">Matière</p>
                            </div>
                            <p class="card-text border-top overflow-hidden">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adicghxhxghxhjddfnseoqignqionqozg</p>
                        </div>
                    </div>
                </div>
                <!--Fin code exemple-->
            </div>
            <!-- Modal qui devra s'auto générer -->
            <div class="modal" id="myModal1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <div class="container">
                                <div class="row">
                                    <h4 class="modal-title">Optimisation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6 fluid border-right border-bottom">
                                    <h5>Mathématique</h5>
                                </div>
                                <div class="col-6 fluid border-bottom">
                                    <h5>Ingénieur informatique</h5>
                                </div>
                            </div>
                            <br>
                            <h5>Description :</h5>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5>NOTE : 4.5/5</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 ">
                                        <button type="button" class="btn btn-secondary btn-block">Ticket</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary btn-block">Visualiser</button><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
