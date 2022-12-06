<?php 

function connect() {
    return new PDO('mysql:host=localhost;dbname=seks', "admin", "admin");
}

function authorization($login, $pass) {

}

function registration($email, $login) {
    $query = "SELECT * FROM `users` WHERE `email` = :email OR `login` = :login";
    $sth = connect()->prepare($query);
    $sth->execute(array(
        'email' => $email,
        'login' => $login
    ));
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
        return $uniqueID;
        }
    else {
        return 0;
    }
}