<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prilude Academy</title>

    <link href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-image: linear-gradient(to right, #ffffff, #00A8E8);">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('guest/index') ?>" style="font-family: 'Righteous', cursive; font-size: x-large; text-color: #003459;">Prilude Academy</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto">
                        <a class="nav-item nav-link" href="<?php echo base_url('guest/index') ?>">Home </span></a>
                        <a class="nav-item nav-link" href="#desc">About</a>
                        <a class="nav-item nav-link" href="#harga">Pricing</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right row">
                        <li><a href="<?php echo base_url('login/adduser') ?>" class="nav-item btn btn-md btn-info" role="button"><span class="fa fa-user-plus"></span> Sign Up </a></li>
                        <li><a href="<?php echo base_url('login/index') ?>" class="nav-item nav-link"><span class="fa fa-sign-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div class="card-body" id="about" style="margin-top: 60px;">
        <div class="jumbotron text-center" style="background-color: #003459;">
            <h1 style="font-family: 'Righteous', cursive; color: white;">Selamat Datang di Prilude Academy</h1>
            <p style="color: white;">Kursus Pemrograman Terbaik se-Priangan Timur</p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url('src/img/carousel1.jpg') ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-monospace text-dark">Prilude Academy</h2>
                        <p class="text-dark">Merupakan kursus pemrograman terbaik se-priangan timur, harga murah dan kelas beragam.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('src/img/carousel2.jpg') ?>" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-monospace text-white">Prilude Academy</h2>
                        <p class="text-white">Kursus pemrograman yang kami tawarkan terdiri dari web dan mobile. Anda bisa memilih paket yang tersedia.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('src/img/carousel3.jpg') ?>" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-monospace">Prilude Academy</h2>
                        <p class="text-white">Harga dijamin terjangkau dan kualitas tidak akan mengecewakan. Terdiri dari mentor-mentor yang kompeten di bidangnya dapat mengantarkan kamu untuk menjadi programmer handal.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container-fluid" style="margin-top: 20px;" id="desc">
            <div class="container-fluid bg-3 text-center">
                <div class="container" style="margin-bottom: 30px; background-color: #00A8E8;">
                    <h3 class="text-white">Why Prilude Academy?</h3>
                </div>
                <div class="row d-flex">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('src/img/coding.png') ?>" class="img-responsive">
                        <p style="padding-top: 20px;">Learn code to adjust the current business demand</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('src/img/checklist.png') ?>" class="img-responsive">
                        <p style="padding-top: 20px;">Structured and organized learning style</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('src/img/running.png') ?>" class="img-responsive">
                        <p style="padding-top: 20px;">Fast and cheap</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="harga" style="margin-top: 30px; margin-bottom: 30px; background-color: #003459; padding-top: 60px; padding-bottom: 30px;">
            <div class="text-center text-white">
                <h2>Harga</h2>
                <p>Choose a payment plan</p>
            </div>
            <div class="container-fluid row justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Web</h1>
                        </div>
                        <div class="card-body">
                            <p>HTML dan CSS</p>
                            <p>Javascript</p>
                            <p>React/Vue</p>
                            <p>Codeigniter</p>
                        </div>
                        <div class="card-footer">
                            <h3 class="text-center">Rp250K</h3>
                            <h4 class="text-center">per bulan</h4>
                            <div class="row justify-content-center">
                                <button class="btn btn-lg btn-info" onclick="location.href='<?php echo site_url('login/adduser') ?>'">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Android</h1>
                        </div>
                        <div class="card-body">
                            <p>Java</p>
                            <p>XML</p>
                            <p>Python</p>
                            <p>Kotlin</p>
                        </div>
                        <div class="card-footer">
                            <h3 class="text-center">Rp450K</h3>
                            <h4 class="text-center">per bulan</h4>
                            <div class="row justify-content-center">
                                <button class="btn btn-lg btn-info" onclick="location.href='<?php echo site_url('login/adduser') ?>'">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Desktop</h1>
                        </div>
                        <div class="card-body">
                            <p>Java with Netbeans</p>
                            <p>Electron</p>
                            <p>Visual Basic</p>
                            <p>C#</p>
                        </div>
                        <div class="card-footer">
                            <h3 class="text-center">Rp350K</h3>
                            <h4 class="text-center">per bulan</h4>
                            <div class="row justify-content-center">
                                <button class="btn btn-lg btn-info" onclick="location.href='<?php echo site_url('login/adduser') ?>'">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-white" style="padding-top: 30px; background-color: #00171F;">
            <h2 class="text-center">Kontak Kami</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="fa fa-map-marker"></span> Jl. Gn. Talaga bodas No 153A, Perum Bumi Resik Panglayungan, Panglayungan, Cipedes, Tasikmalaya</p>
                    <p><span class="fa fa-phone-square"></span> +6282129633939</p>
                    <p><span class="fa fa-envelope-square"></span> info@priludestudio.com</p>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-outline-primary pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="container-fluid text-center fixed-bottom" style="background-color: #535450;">
        <a href="#" class="text-white">Prilude Academy</a>
        <span>&copy; 2019.</span>
    </footer>
</body>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/pace-progress/pace.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js') ?>"></script>

</html>