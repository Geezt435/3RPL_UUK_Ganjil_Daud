<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap4.css">

    <!-- Page Icon -->
    <link rel="icon" type="image/gif/png" href="img/icon/reading.png">

    <!-- Judul Halaman -->
    <title>Topic Page</title>
</head>
<body>
    <!-- Header -->
    <header class="navbar-style">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="navbar-brand" id="brand">
                <img src="img/icon/intelligence.png" style="filter: brightness(0) invert(1); size: 10em" alt="">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="topic.php">Topics</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pembelajaran.php">Pembelajaran Saya <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="katalog.php">Katalog Kursus</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div id="content-wrapper" class="d-flex flex-column margin-10">
        <div id="content">  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <img id="profile-img" src="img/icon/raise-your-hand-to-ask.png" alt="" align="left">
                                <div style="margin: 3em;">
                                    <h2>My Profile</h2>
                                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minus cum rem, repudiandae, aut adipisci nemo ullam eaque voluptatibus veritatis delectus dicta non soluta consectetur veniam ex accusamus distinctio animi.</h5>
                                    <button style="margin-top: 2em;" type="submit" class="btn btn-primary">Edit Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-6">
                            <div class="card-body">
                                <h1 style="text-align: center;">Pembelajaran Saya</h1>
                                <ul class="list-group list-group-horizontal">
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (1).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (1).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (1).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center text-md-left">
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://www.youtube.com/c/GeeztJeez"> Geezt Jeez</a>
        </div>
    </footer>
</body>
</html>