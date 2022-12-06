<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Восстановить пароль</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");?>

    <div class="myContainer shadow my-5 rounded py-5 px-2">
        <?php echo status_refresh(); ?>
        <h4 class="text-center fw-bolder">Восстановление пароля к аккаунту</h4>

        <form action="/backend-php/advertiser/login-in.php" method="post">

            <div class="d-flex col-7 fs-6 mt-4 align-items-center justify-content-between">
                <div class="d-flex text-nowrap" style="font-size: 13px">Ваш логин или адрес электронной почты <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                <input name="refreshEmail" type="text" class="form-control">
            </div>

            <input type="hidden" name="action" value="refreshPassword">
            <button type="submit" class="btn w-25 mt-4 bg-gradient btn-primary">Выслать новый пароль</button>
        </form>
        <h6 class="mt-4" style="font-size: 13px;">Вам отправиться письмо с временной ссылкой, перейдя по которой, вы сможете восстановить доступ к своему аккаунту.</h6>
    </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>
</body>
</html>