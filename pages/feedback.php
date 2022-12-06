<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");?>
    <div class="myContainer shadow my-5 rounded py-3 px-3">
        <h4 class="fw-bolder">Обратная связь с администратором сайта</h4>

        <div class="d-flex col-4 fs-6 mt-4 align-items-center justify-content-between">
            <div class="d-flex text-nowrap" style="font-size: 13px">Имя <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
            <input type="text" class="form-control w-75" placeholder="Введите Имя:">
        </div>

        <div class="d-flex col-4 fs-6 mt-4 align-items-center justify-content-between">
            <div class="d-flex text-nowrap" style="font-size: 13px">Email <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
            <input type="text" class="form-control w-75" placeholder="Введите Email:">
        </div>

        <h6 style="font-size:11px" class="fw-bolder mt-2 opacity-75"> Введите свой настоящий e-mail на который вам придет ответ. </h6>

        <div class="d-flex col-4 fs-6 mt-4 align-items-center justify-content-between">
            <div class="d-flex text-nowrap" style="font-size: 13px">Сообщение <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
        </div>

        <textarea name="" id="" class="form-control w-75 fs-6" cols="30" rows="8" placeholder="Внимание! Данное сообщение отправляется администратору сайта! Формулируйте свой вопрос максимально подробно!"></textarea>

        <button  class="btn w-25 mt-4 bg-gradient btn-primary">Отправить сообщение</button>
    </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>
</body>
</html>