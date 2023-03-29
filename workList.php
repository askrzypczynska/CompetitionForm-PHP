<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursPHP</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
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
                <a class="menuBtn" href="#">
                    Regulamin
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="headText">
            Jesienna Poezja: Konkurs Wierszu 2023
            <div class="title">FORMULARZ KONKURSOWY</div>
        </div>
        
    </div>

    <?php

        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $email = $_GET['email'];
        $dateBirth = $_GET['dateBirth'];
        $contestWork = $_GET['contestWork'];

        echo $firstName."<br />";
        echo $lastName."<br />";
        echo $email."<br />";
        echo $dateBirth."<br />";
        echo $contestWork."<br />";
    ?>  

</body>
</html>