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
    <link rel="icon" type="image/gif/png" href="img/reading.png">

    <!-- Judul Halaman -->
    <title>Topic Page</title>
</head>
<body>
    <!-- Header -->
    <header class="navbar-style">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="navbar-brand" id="brand">
                <img src="img/intelligence.png" style="filter: brightness(0) invert(1); size: 10em" alt="">
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
                    <div class="col-xl-8 col-lg-7">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                                <hr>
                                Styling for the area chart can be found in the
                                <code>/js/demo/chart-area-demo.js</code> file.
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                                <hr>
                                Styling for the bar chart can be found in the
                                <code>/js/demo/chart-bar-demo.js</code> file.
                            </div>
                        </div>

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