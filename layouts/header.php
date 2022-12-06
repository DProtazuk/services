<?php   include($_SERVER['DOCUMENT_ROOT']."/backend-php/advertiser/login-in.php"); ?>
<?php   include($_SERVER['DOCUMENT_ROOT']."/backend-php/advertiser/authorization-verification.php"); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<link rel="icon" type="image/jpg" href="/src/heard (1).jpg"/>
<link rel="stylesheet" href="/style/header.css">

<?php if(check_uniqueID()){
        echo '<div class="position-fixed w-100 bg-dark">
        <div class="myContainer p-1 d-flex justify-content-between">
            <a href=""class="col-3 d-flex align-items-center cursor text-decoration-none">
                <img src="/src/icon.png" class="col-1">
                <span class="text-white mx-2 fs-6 span_headerFixed fw-bolder">Личный кабинет</span>
            </a>
    
            <a href="/backend-php/advertiser/logout.php" class="col-2 d-flex justify-content-end cursor text-decoration-none">
                <img src="/src/exit.png" class="col-2">
                <span class="text-white mx-1 fs-6 span_headerFixed fw-bolder">Выйти</span>
            </a>
        </div>
    </div>
    
    <div class="w-100 bg-dark">
        <div class="myContainer p-1">
    f
        </div>
    </div>';
    } ?>

<div class="w-100 glaw_header">
        <div class="myContainer p-2 d-flex justify-content-between">
            <div class="col-6 d-flex justify-content-start">
                <div class="col-4 border-end text-white border-opacity-25">
                    <a href="/index.php" class="text-white text-decoration-none"><h2>Saite</h2></a>
                </div>

                <div class="col-5 text-white d-flex align-items-center">
                    <span class="header_span m-auto">Досуг Екатеринбурга</span>
                </div>
            </div>

            <div class="col-4 d-flex justify-content-between align-items-center">
                <div class="d-flex text-white align-items-center cursor header_div_auth">
                    <?php if(check_uniqueID()){
        echo '<a href="/backend-php/advertiser/logout.php" class="text-white text-decoration-none">
        <img src="https://fei.eburg-xxx.net/themes/baby/icons/icon-login.svg" class="header_img">
        <span class="header_span_auth m-1 border-bottom"> Выйти</span>
        </a>';
    }
    else {
        echo '<a href="/pages/authorization.php" class="text-white text-decoration-none">
        <img src="https://fei.eburg-xxx.net/themes/baby/icons/icon-login.svg" class="header_img">
        <span class="header_span_auth m-1 border-bottom"> Авторизация</span>
        </a>';
    } ?>
                </div>

                <a href="/pages/advertiser/dobavit-anketu.php"><button class="btn button_header">+ ДОБАВИТЬ АНКЕТУ</button></a>
            </div>
        </div>
</div>

<div class="w-100 header_main p-5">
    <div class="myContainer d-flex justify-content-between">
        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center border-end cursor" style="--bs-bg-opacity: .7;">
            Новенькие
        </a>

        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center border-end cursor" style="--bs-bg-opacity: .7;">
            Массажистки 
        </a>

        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center border-end cursor" style="--bs-bg-opacity: .7;">
            Парни 
        </a>

        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center border-end cursor" style="--bs-bg-opacity: .7;">
            Новенькие
        </a>

        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center border-end cursor" style="--bs-bg-opacity: .7;">
            Массажистки 
        </a>

        <a class="menu_header bg-secondary col-2 p-2 fs-6 text-decoration-none text-white text-center cursor" style="--bs-bg-opacity: .7;">
            Парни 
        </a>
    </div>

    <br>    <br>    <br>    <br>     <br>
</div>

<div class="w-100" style="background: #af2a2a linear-gradient(to bottom,#b52525 0%,#841717 100%);">
    <div class="myContainer d-flex">
        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start">
            Все девушки
        </a>

        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start">
            Все девушки
        </a>

        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start">
            Все девушки
        </a>

        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start">
            Все девушки
        </a>

        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start">
            Все девушки
        </a>

        <a href="" class="menu_header2 d-block text-white col-2 text-center text-decoration-none fs-6 p-2 border-start border-end">
            Все девушки
        </a>
    </div>
</div>