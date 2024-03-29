<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Digital Library</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                                    </div>
                                    <?php
                                        if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="gagal"){
                                        echo "<div class='alert alert-info '>Username dan Password tidak sesuai !</div>";
                                        }
                                        }
                                        if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="info_login"){
                                        echo "<div class='alert alert-warning'>Maaf Anda belum Login !</div>";
                                        }
                                        }
                                        if(isset($_GET['pesan'])){
                                            if($_GET['pesan']=="info_logout"){
                                                echo "<div class='alert alert-success'>Anda Telah Berhasil Logout ! </div>";
                                            }
                                        }
                                        if(isset($_GET['pesan'])){
                                            if($_GET['pesan']=="info_registrasi"){
                                                echo "<div class='alert alert-success'>Anda Telah Berhasil Registrasi Silahkan Login ! </div>";
                                            }
                                        }
                                    ?>
                                    <form action="cek_login.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"  aria-describedby="emailHelp"
                                                placeholder="Enter Your Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"  placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                </div>
                                        <!-- <a href="admin.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <!-- <hr> -->
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    

</body>

</html>