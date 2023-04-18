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
        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['dateBirth'], $_POST['contestWork'])){
            //Zapis do Bazy danych informacji
            $stmt = $conn->prepare("insert into formularz(firstName, lastName, email, dateBirth, contestWork) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $firstName, $lastName, $email, $dateBirth, $contestWork);
            $stmt->execute();
            $stmt->close();
        } 
        //Odczyt informacji z Bazy danych
        $stmt2 = "SELECT firstName, lastName, dateBirth, contestWork from formularz";
        $result2 = $conn->query($stmt2);
        $conn->close();

    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursPHP</title>
    <link rel="stylesheet" type="text/css" href="works.css" />
</head>
<body>

    <div class="frontFoto">
        <div class="flowerImg"></div>
        <div class="flowerImgSec"></div>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a class="menuBtn" href="workList.php">
                    Prace konkursowe
                </a>
            </li>
            <li>
                <a class="menuBtn" href="index.php">
                    Formularz zgłoszeniowy
            </a>
            </li>
            <li>
                <a class="menuBtn" href="rule.php">
                    Regulamin
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="headText">
            Jesienna Poezja: Konkurs Wierszu 2023
            <div class="title">Uczestnicy</div>
        </div>
    
        <div class="tableDiv">
            <table>
                <tr>
                    <th>Imię</th>
                    <th>Rok Urodzenia</th>
                    <th>Praca Konkursowa</th>
                </tr>
                <?php 
                    if($result2->num_rows>0) {
                        while($row = $result2->fetch_assoc()) {
                            echo "<tr><td>".$row['firstName']."</td><td>".$row['dateBirth']."</td><td>".$row['contestWork']."</td></tr>";
                        }
                    }
                    // $todayDate = new DateTime();
                    // $Date = $todayDate->format('Y-m-d');
                    // if ($Date) {
                    //     echo $Date;
                    // }

                    // $todayDate = new DateTime();
                    // $today = $todayDate->format('Y-m-d');
            
                    // $wynik= datediff(today(),)
                    // echo $wynik;
                ?>
            </table>
        </div>
    </div>

</body>
</html>
