<?php 

function check_uniqueID(){
    $uniqueID = $_COOKIE['uniqueID'];

    $query = "SELECT * FROM `users` WHERE `uniqueID` = :uniqueID";
    $sth = connect()->prepare($query);
    $sth->execute(array('uniqueID' => $uniqueID,));
    $array = $sth->fetch(PDO::FETCH_ASSOC);

    if($array) {
        return $array['uniqueID'];
    }
}
?>