<?php 

include($_SERVER['DOCUMENT_ROOT']."/php/bd.php");

$action = $_POST['action'];
 
  switch ($action) {
    case 'registration':
      redirect_registration();
      break;
  }

function validation($variable) {
  if(strlen(preg_replace('/\s+/u','',$variable)) > 3) {
    return 1;
  }
}

function validationEmail($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
    return 1;
  }
  /*if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)){
  //все ОК, email правильный
  }*/
}

function redirect_registration() {
  $email = $_POST['registrationEmail'];
  $login = $_POST['registrationLogin'];
  $redirect = '/pages/registration.php?';
  
  if(validation($email)==1 && validation($login)==1 && validationEmail($email)==1) {
    $status = registration($email, $login);
    if($status){
      header('Location:'.$redirect.'status=good');
    }
    else {
      header('Location:'.$redirect.'status=false');
    }
  }
  else {
    header('Location:'.$redirect.'status=validation');
  }
}

function status_registration() {
  switch ($_GET['status']) {
    case 'good':
      return '<h5 class="text-center my-3 fw-bolder text-success">Аккаунт Успешно Создан!</h5>';
      break;
    case 'false':
      return '<h5 class="text-center my-3 fw-bolder text-danger">Данный email или логин уже заняты!</h5>';
      break;
    case 'validation':
      return '<h5 class="text-center my-3 fw-bolder text-danger">Проверьте введенные данные!</h5>';
      break;
  }
}