<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма создания анкеты</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/backend-php/advertiser/header-location.php");?>

<div class="myContainer py-4 d-flex justify-content-between">
        <div class="p-3 shadow bg-white" style="width: 70%;">
            <h1 class="text-center fs-3 fw-bolder">Создание анкеты</h1>
            <h5 class="mt-4"> Выберите тип анкеты: </h5>

            <div class="form-check mx-5 mt-3">
                <input class="form-check-input col-1" type="radio" name="typeAnketa" id="girl" value="girl">
                <label class="form-check-label fs-6 cursor" for="girl">
                    Девушка
                </label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input col-1" type="radio" name="typeAnketa" id="masseuse" value="masseuse">
                <label class="form-check-label fs-6 cursor" for="masseuse">
                    Массажистка (без интим услуг)
                </label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input col-1" type="radio" name="typeAnketa" id="ranssexual" value="ranssexual">
                <label class="form-check-label fs-6 cursor" for="transsexual">
                    Трансcексуала
                </label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input col-1" type="radio" name="typeAnketa" id="guy" value="guy">
                <label class="form-check-label fs-6 cursor" for="guy">
                    Парня
                </label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input col-1" type="radio" name="typeAnketa" id="salon" value="salon">
                <label class="form-check-label fs-6 cursor" for="salon">
                    Салоны
                </label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input col-1" type="radio" name="flexRadioDefault" id="sauna" value="sauna">
                <label class="form-check-label fs-6 cursor" for="sauna">
                    Сауны
                </label>
            </div>

            <div class="w-100 border border-danger rounded p-2 mt-3 bg-danger" style="--bs-bg-opacity: 0.1 !important; font-size: 13px !important; line-height: 17px;">
            
                <span class="d-block mt-2"> — Запрещено размещать анкеты девушек, парней младше 18 лет;</span>
                <span class="d-block mt-2"> — Запрещено размещать в анкете информацию или данные, которые являются: незаконными, вредоносными, содержащие оскорбления или размещенные без согласия третьих лиц;</span>
                <span class="d-block mt-2"> — Запрещено размещать в анкете фото/видео с открытыми гениталиями и со сценами полового акта!</span>
                <span class="d-block mt-3 text-center fw-bolder">При нарушении данных условий анкета будет навсегда заблокирована!</span>
            </div>
            <h6 class="text-danger fw-bolder mt-4 text-decoration-underline erorApproval"></h6>
            <div class="form-check mt-4 fs-6 ">
                <input class="form-check-input" type="checkbox" value="" id="approval">
                <label class="form-check-label text-decoration-underline cursor" for="approval">
                    Я внимательно все прочитал-(а), что написано в красной рамке.
                </label>
            </div>

            <button id="btnApproval" disabled="disabled" type="button" class="btn btn-success col-4 mt-3" style="--bs-bg-opacity: 0.8 !important;">Создать Анкету</button>
        </div>
        

        <div style="width: 25%;">
            <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/menu-advertiser.php"); ?>
        </div>
    </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>
</body>
</html>
