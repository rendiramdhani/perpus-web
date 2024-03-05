<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- My CSS -->

    <title>Selamat Datang</title>
</head>

<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Open Sans', sans-serif;
}
:root{
    --text-color: #fff;
    --bg-color: #13cced;
    --main-color: #000000;

    --h1-font: 6rem;
    --h2-font: 3rem;
    --p-font: 1.3rem;
}
body{
    color: var(--text-color);
    background: var(--bg-color);
}
header{
    position: relative;
    top: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
    background: transparent;
    padding: 15px 11%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all .50s ease;
}
.logo{
    font-size: 33px;
    color: var(--text-color);
    font-weight: 700;
}
span{
    color: var(--main-color);
}
.navbar{
    display: flex;
}
.navbar a{
    color: var(--text-color);
    font-size: var(--p-font);
    font-weight: 500;
    margin: 15px 22px;
    transition: all .50s ease;
}
.navbar a:hover{
    color: var(--main-color);
}
.h-right{
    display: flex;
    align-items: center;
}
.h-right a:first-child{
    color: var(--text-color);
    font-size: var(--p-font);
    margin-right: 20px;
}
.h-right a{
    vertical-align: middle;
    font-size: 20px;
    color: var(--text-color);
    margin-right: 18px;
    margin-left: 5px;
    transition: all .50s ease;
}
.h-right a:hover{
    color: var(--main-color);
    transform: translateY(-3);
}
#menu-icon{
    color: var(--text-color);
    font-size: 30px;
    cursor: pointer;
    z-index: 10001;
    display: none;
}
section{
    padding: 70px 17% 60px;
}
.home{
    position: relative;
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(to left, rgba(21, 124, 180, 0.6), rgba(21, 124, 180, 0.6)), url(img/pppp.jpg);
    background-size: cover;
    background-position: bottom center;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.home-text h5{
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 6px;
    color: var(--main-color);
}
.home-text h1{
    font-size: var(--h1-font);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 20px;
}
.home-text p{
    font-size: var(--p-font);
    font-weight: 500;
    line-height: 30px;
    color: #ffffffab;
    margin-bottom: 35px;
}
.btn{
    display: inline-block;
    padding: 13px 40px;
    background: var(--main-color);
    color: var(--bg-color);
    font-size: 15px;
    font-weight: 600;
    border: 2px solid transparent;
    border-radius: 5px;
    transition: all .50s ease;
    cursor: pointer;
}
.btn:hover{
    transform: translateY(10px);
    border: 2px solid var(--text-color);
    background: transparent;
    color: var(--text-color);
}

header.sticky{
    padding: 8px 17%;
    background: transparent;
    backdrop-filter: blur(35px);
}
</style>

<body id="home">
    <!-- Navbar -->
 



    <!-- jumbotron -->
    <section class="home text-center">
    <div class="home-text">
            <h5>Let's</h5>
            <h1>Digital Library <br></h1>
            <p>"Temukan Dunia Pengetahuan di Ujung Jari Anda:
                 Digital Library Ailsa Membawa Anda ke Dunia Buku Digital."</p>
                <a href="perpus_ukk/index.php" class="btn">Get Started</a>
        </div>
    </section>
    