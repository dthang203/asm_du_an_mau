<?php
    function connect($query,$params = ""){
        $connection = new PDO("mysql:host=localhost;
        dbname=duanmau_hangdtph27628;charset=utf8","root","");
        $stmt = $connection -> prepare($query);
        $stmt -> execute();
        return $stmt;
    }
    function getAll($query){
        $result = connect($query) -> fetchAll();
        return $result;
    }
    function getOne($query){
        $result = connect($query) -> fetch();
        return $result;
    }

  
?>