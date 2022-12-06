<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php"); ?>
    
    <div class="myContainer shadow my-5 rounded py-4">
        <?php echo status_registration(); ?>
        <h4 class="text-center fw-bolder">Регистрация аккаунта рекламодателя</h4>

        <h6 style="font-size: 14px" class="text-center mt-3 text-danger fw-bolder">Регистрация только для рекламодателей! Для комментирование анкет регистрация НЕ НУЖНА!</h6>

        <form action="/backend-php/advertiser/login-in.php" method="post">
            <div class="col-4 m-auto mt-2">
                <div class="d-flex fs-6 mt-5 align-items-center justify-content-between">
                    <div class="d-flex">Email <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input name="registrationEmail" type="text" class="form-control w-75" placeholder="Введите email:">
                </div>

                <div class="d-flex fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex">Логин <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input name="registrationLogin" type="text" class="form-control w-75"  placeholder="Введите Логин:">
                </div>
                <input type="hidden" name="action" value="registration">
                <button type="submit" class="btn w-100 mt-4 bg-gradient btn-primary">Зарегестировать аккаунт</button>
            </div>
        </form>
        
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>

</body>
</html>