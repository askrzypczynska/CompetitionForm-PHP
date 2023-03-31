<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursPHP</title>
    <link rel="stylesheet" type="text/css" href="form.css" />
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
            <div class="title">FORMULARZ KONKURSOWY</div>
        </div>

        <!-- Formularz zostaje wysyłany do bazy danych w action="connect.php" 
        na czas pracy nad walidacja formularza zostaje odpięty od formularza -->

        <form method="post" action="result.php"> 
            <div class="user-details">
                <div class="input-box">
                    <span class="details line">Imię</span>
                    <div class="error line">  
                        <?php if(isset($name_error)){ echo $name_error; } ?>
                    </div>
                    <input type="text" class="icon" placeholder="Wpisz swoje imię" name="firstName" maxlength="50" 
                        value="<?php
								if (isset($_SESSION['firstName']))
								{
									echo $_SESSION['firstName'];
									unset($_SESSION['firstName']);
								}
							?>">

                </div>
                <div class="input-box">
                    <span class="details line">Nazwisko</span>
                    <div class="error line">  
                        <?php if(isset($lastName_error)){ echo $lastName_error; } ?>
                    </div>
                    <input type="text" class="icon" placeholder="Wpisz swoje nazwisko" name="lastName" maxlength="50" 
                        value="<?php
								if (isset($_SESSION['lastName']))
								{
									echo $_SESSION['lastName'];
									unset($_SESSION['lastName']);
								}
							?>">
                </div>
                <div class="input-box">
                    <span class="details line">Adres email</span>
                    <div class="error line">  
                        <?php if(isset($email_error)){ echo $email_error; } ?>
                    </div>
                    <input type="text" class="icon" placeholder="Wpisz swój adres email" name="email" 
                        value="<?php
								if (isset($_SESSION['email']))
								{
									echo $_SESSION['email'];
									unset($_SESSION['email']);
								}
							?>">
                </div>
                <div class="input-box">
                    <span class="details line">Data urodzenia</span>
                    <div class="error line">  
                        <?php if(isset($dateBirth_error)){ echo $dateBirth_error; } ?>
                    </div>
                    <input type="date" name="dateBirth" 
                        value="<?php
								if (isset($_SESSION['dateBirth']))
								{
									echo $_SESSION['dateBirth'];
									unset($_SESSION['dateBirth']);
								}
							?>">
                </div>
            </div>
            <div class="user-work">
                <span class="details line">Twoja praca konkursowa</span>
                <div class="error line">  
                        <?php if(isset($contestWork_error)){ echo $contestWork_error; } ?>
                </div>
                <textarea type="text" class="icon" placeholder="Wpisz swoją pracę konkursową, jej długość nie może przekraczać 150 znaków." name="contestWork" maxlength="150"><?php if (isset($_SESSION['contestWork'])){echo $_SESSION['contestWork']; unset($_SESSION['contestWork']);}?></textarea>
                <input type="checkbox" class="statuteCheckbox" required>
                <label for="">Akceptuje <a href="rule.php">Regulamin Konkursu</a></label><br>
            </div>
            <div class="buttonSubmit">
                <input type="submit" value="Wyślij">
            </div>
        </form>
    </div>

    <?php

    ?>


</body>
</html>
