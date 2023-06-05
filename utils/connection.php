<?php

    //envirenment variables
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","gestion_stock");

    function connection()
    {
        define("DSN","mysql:host=localhost;dbname=gestion_stock;port=3306;charset=utf8"); 
        define("USER","root");
        define("MDP","");
       
        // création d'un objet PDO et connexion 
        try{
          $conn=new PDO(DSN,USER,MDP);
          return $conn;
        }
        catch (Exception $erreur){
       echo "erreur :".$erreur -> getMessage();
           exit();
           }
    }

?>