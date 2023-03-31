<?php

    if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['dateBirth'], $_POST['contestWork'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $dateBirth = $_POST['dateBirth'];
        $contestWork = $_POST['contestWork'];

    }

    //Połączenie z bazą danych
    $conn = new mysqli('localhost', 'root', '', 'konkurs');
    if($conn->connect_error){
        die('Connection Failes :'. $conn->connetion_error);
    } else{
        $stmt = $conn->prepare("insert into formularz(firstName, lastName, email, dateBirth, contestWork) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $email, $dateBirth, $contestWork);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>