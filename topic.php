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
    <link rel="icon" type="image/gif/png" href="img/icon/teacher-at-the-blackboard.png">

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

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-0 search" type="text" placeholder="Search">
                </form>
            </div>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="topic.php">Topics <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pembelajaran.php">Pembelajaran Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="katalog.php">Katalog Kursus</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sub Header -->
    <div class="horrid">
        <div class="subhorrid col-md-8 offset-md-2">
            <ul class="list-group list-group-horizontal">
                <li class="horriditem"><h6>Category A</h6></li>
                <li class="horriditem"><h6>Category B</h6></li>
                <li class="horriditem"><h6>Category C</h6></li>
                <li class="horriditem"><h6>Category D</h6></li>
                <li class="horriditem"><h6>Category E</h6></li>
                <li class="horriditem"><h6>Category F</h6></li>
                <li class="horriditem"><h6>Category G</h6></li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div id="content-wrapper" class="d-flex flex-column margin-10">
        <div id="content">  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <img id="topic-img" src="img/larges/larges (5).png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Subscribe -->
                <div class="subhorrid col-md-8 offset-md-2">
                    <div class="container-fluid align-center">
                        <section>
                            <h3 id="subscribe">Ikuti Berita Promosi & Program Beasiswa <a id="subscribe-button" href="#">Subscribe</a></h3>
                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="col-md-4">
                                    <h1>Mari Mulai Belajar</h1>
                                </div>
                                <ul class="list-group list-group-horizontal">
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (3).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (3).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (3).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="horriditem">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top menu-img" src="img/larges/larges (4).png" alt="Card image cap">
                                                <hr>
                                                <a href="#" id="link-hidden"><b>View Class</b></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Favicon Distribution -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div>Icons made by 
                                    <a href="https://www.freepik.com" title="Freepik">Freepik</a> from 
                                    <a href="https://www.flaticon.com/" title="Flaticon">Flaticon</a>
                                </div>
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