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
        //Zapis do Bazy danych informacji
        $stmt = $conn->prepare("insert into formularz(firstName, lastName, email, dateBirth, contestWork) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $email, $dateBirth, $contestWork);
        $stmt->execute();
        //Odczyt informacji z Bazy danych
        $stmt2 = "SELECT firstName, lastName, email, contestWork from formularz";
        $result2 = $conn->query($stmt2);
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
                    <th>Wiek</th>
                    <th>Praca Konkursowa</th>
                </tr>
                <?php 
                    if($result2->num_rows>0) {
                        while($row = $result2->fetch_assoc()) {
                            echo "<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['contestWork']."</td></tr><br/>";
                        }
                    }
                ?>
                <!-- <tr>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Text</td>
                </tr> -->
            </table>
        </div>
    </div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>