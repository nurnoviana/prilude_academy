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

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="clearfix">
                    <h1 class="float-left display-3 mr-4">404</h1>
                    <h4 class="pt-3">Oops! You're lost.</h4>
                    <p class="p-b-10">Tunggu konfirmasi dari admin</p>
                    <p><button onclick="location.href='<?php echo base_url('login/index') ?>'" class="btn btn-common btn-rounded btn-lg">Kembali ke halaman login</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center fixed-bottom" style="background-color: #535450;">
        <a href="#" class="text-white">Prilude Academy</a>
        <span>&copy; 2019.</span>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
</body>