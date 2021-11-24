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
    <link rel="icon" type="image/gif/png" href="img/icon/pencil.png">

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
                    <li class="nav-item">
                        <a class="nav-link" href="pembelajaran.php">Pembelajaran Saya</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="katalog.php">Katalog Kursus <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div id="content-wrapper" class="d-flex flex-column margin-10">
        <div id="content">  
            <div class="container-fluid">

                <!-- Title -->
                <div class="col-md-8 offset-md-2">
                    <div class="container-fluid align-center">
                        <section>
                            <h3 id="katalog-title">Katalog Kursus</h3>
                        </section>
                    </div>
                </div>

                <div class="main">
                    <div class="content">
                        <h3 style="text-align:center">Search Class</h3>
                        <hr>
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <textarea class="form-control" name="" id="" rows="1"></textarea>
                        </div>
                        <div class="dropdown open">
                            <a class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Category</button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                            </div>
                        </div>
                        <div class="submit-kursus">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <div class="sidebar">
                        <ul class="list-group">
                            <li class="horriditem">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top katalog-img" align="left" src="img/larges/larges (6).png" alt="Card image cap">
                                        <div style="margin: 1em;">
                                            <h4><b>Some Text</b></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minus cum rem, repudiandae, aut adipisci nemo ullam eaque voluptatibus veritatis delectus dicta non soluta consectetur veniam ex accusamus distinctio animi.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="horriditem">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top katalog-img" align="left" src="img/larges/larges (6).png" alt="Card image cap">
                                        <div style="margin: 1em;">
                                            <h4><b>Some Text</b></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minus cum rem, repudiandae, aut adipisci nemo ullam eaque voluptatibus veritatis delectus dicta non soluta consectetur veniam ex accusamus distinctio animi.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="horriditem">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top katalog-img" align="left" src="img/larges/larges (6).png" alt="Card image cap">
                                        <div style="margin: 1em;">
                                            <h4><b>Some Text</b></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minus cum rem, repudiandae, aut adipisci nemo ullam eaque voluptatibus veritatis delectus dicta non soluta consectetur veniam ex accusamus distinctio animi.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="horriditem">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top katalog-img" align="left" src="img/larges/larges (7).png" alt="Card image cap">
                                        <div style="margin: 1em;">
                                            <h4><b>Some Text</b></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minus cum rem, repudiandae, aut adipisci nemo ullam eaque voluptatibus veritatis delectus dicta non soluta consectetur veniam ex accusamus distinctio animi.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center text-md-left" style="margin-top: 2rem;">
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://www.youtube.com/c/GeeztJeez"> Geezt Jeez</a>
        </div>
    </footer>
</body>
</html>