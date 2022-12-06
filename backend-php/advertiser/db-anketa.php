<?php 
    function select_services($type){
        $query = "SELECT * FROM `services` WHERE `type` = :type";
        $sth = connect()->prepare($query);
        $sth->execute(array('type' => $type,));
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($array);

        for($i=0; $i<$count; $i++){
            echo '<div class="d-flex justify-content-between col-10">
            <div class="col-5 form-check fs-14 mx-2 cursor d-flex align-items-center">
                <input class="form-check-input cursor checkboxServices" type="checkbox" value="" id="services'.$array[$i]['id'].'">
                <label class="form-check-label cursor text-decoration-underline mx-2" for="services'.$array[$i]['id'].'">'.$array[$i]['name'].'</label>
            </div>

            <div class="col-6 px-2 d-flex fs-14">
                <span>+</span>
                <input disabled type="number" min="0" class="col-5 px-2 mx-2 services'.$array[$i]['id'].'" style="height:25px">
            </div>
        </div>    ';
        }
    }

    function select_nationality($type) {
        $query = "SELECT * FROM `nationality` WHERE `idType` = :type";
        $sth = connect()->prepare($query);
        $sth->execute(array('type' => $type,));
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($array);

        for($i=0; $i<$count; $i++){
            echo '<option value="'.$array[$i]['id'].'">'.$array[$i]['name'].'</option>';
        }
    }

    function select_orientation($type) {
        $query = "SELECT * FROM `orientation` WHERE `type` = :type";
        $sth = connect()->prepare($query);
        $sth->execute(array('type' => $type,));
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($array);

        for($i=0; $i<$count; $i++){
            echo '<option value="'.$array[$i]['id'].'">'.$array[$i]['name'].'</option>';
        }
    }

    function hair_color() {
        $query = "SELECT * FROM `hair_color`";
        $sth = connect()->query($query);
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($array);

        for($i=0; $i<$count; $i++){
            echo '<option value="'.$array[$i]['id'].'">'.$array[$i]['name'].'</option>';
        }
    }

    function body_type() {
        $query = "SELECT * FROM `body_type`";
        $sth = connect()->query($query);
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($array);

        for($i=0; $i<$count; $i++){
            echo '<option value="'.$array[$i]['id'].'">'.$array[$i]['name'].'</option>';
        }
    }
?>