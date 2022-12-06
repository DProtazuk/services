<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
</head>
<body>
    <?php 
        include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");
    ?>

    <div class="myContainer shadow my-5 rounded py-4">
        <?php echo status_authorization(); ?>
        <h4 class="text-center fw-bolder">Авторизация для рекламодателя</h4>

        <form action="/backend-php/advertiser/login-in.php" method="post">

            <div class="col-4 m-auto mt-2">
                <div class="d-flex fs-6 mt-5 align-items-center justify-content-between">
                    <div class="d-flex">Email <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input name="authorizationEmail" type="text" class="form-control w-75" placeholder="Введите email:">
                </div>

                <div class="d-flex fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex">Пароль <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input name="authorizationPass" type="text" class="form-control w-75"  placeholder="Введите Пароль:">
                </div>
                <input type="hidden" name="action" value="authorization">
                <button type="submit" class="btn w-100 mt-4 bg-gradient btn-primary">Войти</button>
                <a href="/pages/refresh.php" class="d-block fs-6 text-center my-3 cursor text-danger">Забыли пароль?</a>
            </div>

            <div class="w-100 border-top p-3">
                <h4 class="text-center opacity-75">Хотите разместить свою анкету?</h4>
                <h6 class="text-center opacity-75" style="font-size: 12px;">Пройдите процедуру <a href="/pages/registration.php" class="text-danger fw-bolder">регистрации рекламодателя</a> </h6>
            </div>
        </form>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>

</body>
</html>