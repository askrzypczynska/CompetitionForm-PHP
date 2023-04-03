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

    <?php 
        
        $all_ok = true;

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $dateBirth = $_POST['dateBirth'];
        $contestWork = $_POST['contestWork'];

        $checkMail = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

        //Sprawdzanie imienia
        if(empty($firstName)){
            $all_ok = false;
            $name_error = "Imię jest niezbędne.";
        } else if (!preg_match ("/^[a-zA-zążśźęćńółĄŻŚŹĘĆŃÓŁ]*$/", $firstName) ){
            $all_ok = false;
            $name_error = "Imię powinno zawierać tylko litery.";
        } else {
            $_SESSION['firstName'] = $firstName;
        }

        //Sprawdzanie nazwiska
        if(empty($lastName)){
            $all_ok = false;
            $lastName_error = "Nazwisko jest niezbędne.";
        } else if (!preg_match ("/^[a-zA-zążśźęćńółĄŻŚŹĘĆŃÓŁ]*$/", $lastName) ){
            $all_ok = false;
            $lastName_error = "Nazwisko powinno zawierać tylko litery.";
        } else {
            $_SESSION['lastName'] = $lastName;
        }

        //Sprawdzanie maila
        if(empty($email)){
            $all_ok = false;
            $email_error = "Email jest niezbędny.";
        } else if (!preg_match($checkMail, $email)){
            $all_ok = false;
            $email_error = "To nie wygląda jak email.";
        } else {
            $_SESSION['email'] = $email;
        }

        //Sprawdzanie daty
        if(empty($dateBirth)){
            $all_ok = false;
            $dateBirth_error = "Wybierz date urodzenia.";
        } 
        // else if($age <= 3){
        //     $all_ok = false;
        //     $dateBirth_error = "Musisz mieć przynajmniej 3 lata";
        // } Dodać obliczanie wieku - - - -
        else {
            $_SESSION['dateBirth'] = $dateBirth;
        }
     

        //Sprawdzanie pracy konkursowej
            if(empty($contestWork)){
                $all_ok = false;
                $contestWork_error = "Wpisz swoją pracę konkursową.";
            } else if (strlen($contestWork) < 9){
                $all_ok = false;
                $contestWork_error = "Twoja praca konkursowa powinna mieć conajmniej 9 znaków.";
            } else {
                $_SESSION['contestWork'] = $contestWork;
            }
        
        //Sprawdzanie czy jest jakiś błąd w formularzu
        if($all_ok == false){
            include('index.php');
        } else{
            //Brak błędów Wyslij do bazy danych i przejdz na stron
            include('workList.php');
            //Wyslij do bazy danych
        }


        // //Sprawdzanie wieku
        // $dateBirth = $_POST['dateBirth'];
        // $todayDate = date("Y-m-d");
        // $diff = date_diff(date_create($dateBirth), date_create($todayDate));
        // if(($diff->format('%y')) < 3){
        //     $all_ok = false;
        //     $message = "Uczestnik konkursu powinien mieć conajmniej 3 lata";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        // }
    
    ?>  

    
</body>
</html>