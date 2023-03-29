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
        <form action="workList.php" methode="get">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Imię</span>
                    <input type="text" class="icon" placeholder="Wpisz swoje imię" name="firstName" required>
                </div>
                <div class="input-box">
                    <span class="details">Nazwisko</span>
                    <input type="text" class="icon" placeholder="Wpisz swoje nazwisko" name="lastName" required>
                </div>
                <div class="input-box">
                    <span class="details">Adres email</span>
                    <input type="text" class="icon" placeholder="Wpisz swój adres email" name="email" required>
                </div>
                <div class="input-box">
                    <span class="details">Data urodzenia</span>
                    <input type="date" name="dateBirth" required>
                </div>
            </div>
            <div class="user-work">
                <span class="details">Twoja praca konkursowa</span>
                <textarea type="text" class="icon" placeholder="Wpisz swoją pracę konkursową, jej długość nie może przekraczać 500 znaków." name="contestWork" required maxlength="500"></textarea>
                <input type="checkbox" class="statuteCheckbox" required>
                <label for="">Akceptuje regulamin konkursu</label><br>
            </div>
            <div class="buttonSubmit">
                <input type="submit" value="Wyślij">
            </div>
        </form>
    </div>

    <?php
        // if(isset($_GET['firstName']) and isset($_GET))
    ?>  

</body>
</html>