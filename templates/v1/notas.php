<?php
$method = $_SERVER['REQUEST_METHOD'];

header("Access-Control-Allow-Origin: http://localhost:8080");
if(!isset($_GET['id'])){
    if($method == 'POST'){
        //  INSERE UMA NOTA
    }
    else {
        // MOSTRA TODOS
        $notas = $dbh->prepare("SELECT * FROM notas");
        $notas->execute();
        echo json_encode($notas->fetchAll(PDO::FETCH_ASSOC));
    }
}
else{
    if($method == 'GET'){
        // MOSTRA UM
        $notas = $dbh->prepare("SELECT * FROM notas WHERE id = :sID");
        $notas->bindParam(':sID', $_GET['id']);
        $notas->execute();
        echo json_encode($notas->fetchAll(PDO::FETCH_ASSOC));
    }
    else  if($method == 'PUT') {
    //    UPDATE UM
    }
    else  if($method == 'DELETE') {
    //    DELETE UM
    }
}