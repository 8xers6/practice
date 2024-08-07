<?php


        $dnk = "mysql:host=localhost;dbname=myfirstdatabase";
        $dbusername = "root";
        $dbpassword = "";


        try{
            $pdo = new PDO($dnk, $dbusername,$dbpassword);
            $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){

            echo "CONNECTION FAILED". $e->getMessage();



        }






















?>