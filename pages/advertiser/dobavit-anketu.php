<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить анкеты</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");?>
    <div class="myContainer py-4 d-flex justify-content-between">
        <div class="p-3 shadow bg-white" style="width: 70%;">
            <h1 class="fs-5 fw-bolder">Условия размещения анкет</h1>

            <div class="w-100" style="font-size: 13px; line-height:15px">
                <span>Чтобы иметь возможность добавлять анкеты на сайт, Вам нужно ознакомиться с условием размещения анкет:</span>

                <ul class="mt-4">
                    <li class="mt-2">На сайте разрешено размещать только анкеты типа девушки, парня и фирмы досуга! Анкеты с рекламой кукол, игрушек, контрацептивов, сдача квартир, поиск сотрудниц и тп будут навсегда заблокированы!</li>

                    <li class="mt-2">Одному рекламодателю запрещено регистрировать более одного аккаунта. При обнаружении нескольких аккаунтов, принадлежащих одному лицу - все аккаунты будут заблокированы; </li>

                    <li class="mt-2">Запрещено размещение анкет девушек, парней младше 18 лет;</li>

                    <li class="mt-2">Размещение анкет только платное (подробности в личном кабинете);</li>

                    <li class="mt-2">Запрещено размещать информацию или данные, которые являются незаконными, вредоносными, чужими, нарушают чьи-либо авторские права, содержат оскорбления в адрес третьих лиц;</li>

                    <li class="mt-2">Размещенная вами информация в анкете может быть проверена в любое время и в случае несоответствия действительности, может быть изменена администрацией сайта по своему усмотрению;</li>

                    <li class="mt-2">Запрещено размещать информацию о третьих лицах без их согласия;</li>

                    <li class="mt-2"><span class="fw-bolder">Категорически запрещено использовать порно-фотографии!</span> Фото должны быть хорошего качества, и не должны содержать посторонних значков, текста, номера телефона или адресов сайтов.</li>
                </ul>

                <?php 
                    if(check_uniqueID()){
                        echo '<a href="/pages/advertiser/create-anketa.php"><button class="btn btn-success px-3">+ Добавить анкету</button></a>
                        <span class=" d-block my-4">Размещение анкет на сайте платное, подробности на странице  <a href="" class="text-danger"> стоимость и оплата услуг. </a></span>';
                    }
                    else {
                        echo '<span class="d-block my-4">После ознакомления условий <a href="/pages/registration.php" class="text-danger"> пройдите регистрацию</a></span>';
                    }
                ?>
            </div>

            
        </div>

        <div style="width: 25%;">
            <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/menu-advertiser.php"); ?>
        </div>
    </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>
</body>
</html>