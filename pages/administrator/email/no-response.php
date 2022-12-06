
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../style/admin.css">
    <title>Неотвеченные</title>
</head>
<body>
    <div class="w-100 d-flex justify-content-end mt-2">
        <button type="button" class="btn button_header fs-5 mx-4">Выйти</button>
    </div>

    <div class="w-100 d-flex">
    <?php include($_SERVER['DOCUMENT_ROOT']."/pages/administrator/layout.php"); ?>

        <div class="col-9">
            <div class="col-10 bg-light p-2 shadow m-auto border rounded-3">

                <div class="mx-5">
                    <h6 class="fw-bolder">Отправитель: <span class="text-danger mx-2 fw-bolder">dprotazyuk@yandex.com</span></h6>
                    <h6 class="fw-bolder">Сообщение: <span class="text-success mx-2 fw-bolder">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae voluptate reiciendis ducimus nam rerum facere est voluptatum totam impedit, accusantium facilis animi recusandae commodi repellendus, at voluptas ea sapiente quibusdam! Necessitatibus, maxime velit nesciunt, ducimus expedita ad architecto tempore quidem dolorem iure omnis quis qui tempora ratione quisquam quia eaque.</span></h6>

                    <textarea placeholder="Ваш Ответ:" class='form-control' name="" id="" cols="30" rows="4"></textarea>
                    <button type="button" class="btn btn-success mt-3">Отправить Ответ</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>