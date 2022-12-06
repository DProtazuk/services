<?php
    function connect() {
        return new PDO('mysql:host=localhost;dbname=seks', "admin", "admin");
    }