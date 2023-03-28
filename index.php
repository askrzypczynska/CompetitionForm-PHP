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
    <div class="container">
        <div class="headText">
            Jesienna Poezja: Konkurs Wierszu 2023
            <div class="title">FORMULARZ KONKURSOWY</div>
        </div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Imię</span>
                    <input type="text" class="icon" placeholder="Wpisz swoje imię" required>
                </div>
                <div class="input-box">
                    <span class="details">Nazwisko</span>
                    <input type="text" class="icon" placeholder="Wpisz swoje nazwisko" required>
                </div>
                <div class="input-box">
                    <span class="details">Adres email</span>
                    <input type="text" class="icon" placeholder="Wpisz swój adres email" required>
                </div>
                <div class="input-box">
                    <span class="details">Data urodzenia</span>
                    <input type="date" required>
                </div>
            </div>
            <div class="user-work">
                <span class="details">Twoja praca konkursowa</span>
                <textarea type="text" class="icon" placeholder="Wpisz swoją pracę konkursową, jej długość nie może przekraczać 500 znaków." required maxlength="500"></textarea>
                <input type="checkbox">
                <label for="">Akceptuje regulamin konkursu</label><br>
            </div>
            <div class="button">
                <input type="submit" value="Wyślij">
            </div>
        </form>
    </div>

    <?php

    ?>

</body>
</html>