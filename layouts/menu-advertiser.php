<?php 
    if(check_uniqueID()){
        menu_advertiser();
    }

    function menu_advertiser() {
        echo '<div class="col-12 shadow bg-white p-3">
        <div class="my-4 mt-2">
            <h5 class="fw-bolder">Мои Анкеты</h5>
            <h6 class="fs-14 text-danger">Анкеты девушек ('.show_details(1).')</h6>
            <h6 class="fs-14 text-danger">Анкеты массажисток ('.show_details(2).')</h6>
            <h6 class="fs-14 text-danger">Анкеты трансcексуалов ('.show_details(3).')</h6>
            <h6 class="fs-14 text-danger">Анкеты парней ('.show_details(4).')</h6>
            <h6 class="fs-14 text-danger">Анкеты салонов ('.show_details(5).')</h6>
            <h6 class="fs-14 text-danger">Анкеты саун ('.show_details(6).')</h6>
        </div>

        <div class="my-4">
            <h5 class="fw-bolder">Меню пользователя</h5>
            <h6 class="fs-14 text-danger">Стоимость платных услуг</h6>
            <h6 class="fs-14 text-danger">Вопросы и ответы</h6>
        </div>

        <div class="my-4">
            <h5 class="fw-bolder">Мой профиль</h5>
            <h6 class="fs-14 text-danger">История операций</h6>
            <h6 class="fs-14 text-danger">Редактировать профиль</h6>
        </div>

        <div class="my-4">
            <h5 class="fw-bolder">Тех. поддержка</h5>
            <h6 class="fs-14 text-danger">Написать в тех. поддержку</h6>
        </div>
    </div>';
    }

    function show_details($type) {
        $idUser = check_uniqueID();
        $query = "SELECT * FROM `anketa` WHERE `id_user` = :uniqueID OR `id_type` = :idTYpe";
        $sth = connect()->prepare($query);
        $sth->execute(array('uniqueID' => $idUser, 'idTYpe' => $type));
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($array) {
            return count($array);
        }
        else {
            return 0;
        }
    }
?>