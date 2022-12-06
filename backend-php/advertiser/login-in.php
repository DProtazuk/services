<?php

    include($_SERVER['DOCUMENT_ROOT']."/backend-php/connect-to-bd.php");

    $action = $_POST['action'];
 
    switch ($action) {
        case 'registration':
            redirect_registration();
            break;
        case 'authorization':
            redirect_authorization();
            break;
        case 'refreshPassword':
            redirect_refresh();
            break;
    }
    
    function validation($variable) {
        if(strlen(preg_replace('/\s+/u','',$variable)) > 3) {
            return true;
        }
    }       

    function validationEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
            return true;
        }
        /*if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)){
        //все ОК, email правильный
        }*/
    }

    function redirect_registration() {
        $email = $_POST['registrationEmail'];
        $login = $_POST['registrationLogin'];
        $redirect = '/pages/registration.php?';
    
        if(validation($email)==true && validation($login)==1) {
            if(validationEmail($email)==true){
                $status = registration($email, $login);
                if($status == "success"){
                    header('Location:'.$redirect.'status=success');
                }
                else if($status == "busyLogin"){
                    header('Location:'.$redirect.'status=busyLogin');
                }
                else if($status == "busyEmail"){
                    header('Location:'.$redirect.'status=busyEmail');
                }
            }
            else {
                header('Location:'.$redirect.'status=validationEmail');
            }
            
        }
        else {
            header('Location:'.$redirect.'status=validationLogin');
        }
    }

    function status_registration() {
        switch ($_GET['status']) {
            case 'success':
                return '<h5 class="text-center my-3 fw-bolder text-success p-2 border border-success">На ваш указанный email-адрес было отправлено сообщение с паролем.</h5>';
                break;
            case 'busyLogin':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенный логин уже занят!</h5>';
                break;
            case 'busyEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенная почта уже используется!</h5>';
                break;
            case 'validationLogin':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенный логин должен быть не меньше 4 символов!</h5>';
                break;
            case 'validationEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Проверьте введенную почту!</h5>';
                break;
        }
    }

    function registration($email, $login) {
        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $sth = connect()->prepare($query);
        $sth->execute(array('email' => $email,));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        
        if(!$array){
            $query = "SELECT * FROM `users` WHERE `login` = :login";
            $sth = connect()->prepare($query);
            $sth->execute(array('login' => $login));
            $array = $sth->fetch(PDO::FETCH_ASSOC);
        
            if(!$array){

                $password = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 8);
                $uniqueID = time()-rand(15000, 150000000);
        
                $query = "INSERT INTO `users` SET `uniqueID` = :uniqueID, `login` = :login, `email` = :email, `password` = :password";
                $sth = connect()->prepare($query);
                $sth->execute(array(
                    'uniqueID' => $uniqueID,
                    'login' => $login,
                    'email' => $email,
                    'password' => $password
                ));
                return 'success';
            }
            else {
               return 'busyLogin';
            }
        }
        else {
            return 'busyEmail';
        }
    }


    function redirect_authorization() {
        $email = $_POST['authorizationEmail'];
        $pass = $_POST['authorizationPass'];
        $redirect = '/pages/authorization.php?';
    
        if(validation($email)==true && validation($pass)==1) {
            if(validationEmail($email)==true){
                $status = authorization($email, $pass);
                if($status == "success"){
                    header('Location: /index.php');
                }
                else if($status == "busyPass"){
                    header('Location:'.$redirect.'status=busyPass');
                }
                else if($status == "busyEmail"){
                    header('Location:'.$redirect.'status=busyEmail');
                }
            }
            else {
                header('Location:'.$redirect.'status=validationEmail');
            }
            
        }
        else {
            header('Location:'.$redirect.'status=validationLogin');
        }
    }

    function authorization($email, $pass) {
        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $sth = connect()->prepare($query);
        $sth->execute(array('email' => $email,));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        
        if($array['email'] == $email){
            if($array['password'] == $pass){
                setcookie ("uniqueID", $array['uniqueID'], time() + 360000, '/');
                return 'success';
            }
            else {
               return 'busyPass';
            }
        }
        else {
            return 'busyEmail';
        }
    }

    function status_authorization() {
        switch ($_GET['status']) {
            case 'busyPass':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введен неправильный пароль!</h5>';
                break;
            case 'busyEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенная почта не зарегестрированна!</h5>';
                break;
            case 'validationLogin':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенный логин должен быть не меньше 4 символов!</h5>';
                break;
            case 'validationEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Проверьте введенную почту!</h5>';
                break;
        }
    }


    function refreshPassword($refreshEmail) {
        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $sth = connect()->prepare($query);
        $sth->execute(array('email' => $refreshEmail,));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        
        if($array){
            /////////////////////////
            return "success";
        }
        else {
            return 'busyEmail';
        }
    }

    function redirect_refresh(){
        $refreshEmail = $_POST['refreshEmail'];
        $redirect = '/pages/refresh.php?';

        if(validationEmail($refreshEmail)==true){
            $status = refreshPassword($refreshEmail);
                if($status == "success"){
                    header('Location:'.$redirect.'status=success&email='.$refreshEmail);
                }
                else if($status == "busyEmail"){
                    header('Location:'.$redirect.'status=busyEmail');
                }
            
        }
        else {
            header('Location:'.$redirect.'status=validationEmail');
        }
    }

    function status_refresh() {
        switch ($_GET['status']) {
            case 'success':
                return '<h5 class="text-center my-3 fw-bolder text-success p-2 border border-success">Если '.$_GET['email'].' является действующей учётной записью, будет отправлено электронное письмо с инструкциями по сбросу пароля.</h5>';
                break;
            case 'busyEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Введенная почта не зарегистрированна!</h5>';
                break;
            case 'validationEmail':
                return '<h5 class="text-center my-3 fw-bolder text-danger p-2 border border-danger">Проверьте введенную почту!</h5>';
                break;
        }
    }