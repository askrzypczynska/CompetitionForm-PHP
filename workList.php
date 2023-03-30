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

    <?php 

    require_once "connect.php";
    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    $email = $_GET['email'];
    $check = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

    if(preg_match($check, $email)){
         header('Location: workList.php');    
    } else{ 
        header('Location: index.php');
        $message = "Nieprawidłowy Email - Spróbuj ponownie";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }


    if($connect->connect_errno!=0){
    } else {
        $fistName = $_GET['firstName'];
        $age = $_GET['dateBirth'];
        $contestWork = $_GET['contestWork'];

        $connect->close();
    }


    ?>  
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
                <tr>
                    <td>Adaś</td>
                    <td>14</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at aliquam lorem. Aliquam tincidunt magna leo, ut cursus ante lacinia id. Cras velit dui, cursus nec viverra non, egestas a nibh. Proin tempus risus in lacus faucibus condimentum. Duis non interdum erat, at sagittis elit. Phasellus efficitur eleifend augue sit amet viverra. Cras fermentum eleifend maximus. Donec eu sapien et augue pellentesque rutrum. Curabitur mattis eu nisi sit amet volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar, enim non tincidunt suscipit, mauris justo posuere quam, eget congue lectus diam congue nulla. Nulla iaculis velit ac mi congue, sit amet cursus ante porta. Ut egestas quis eros at pellentesque. Etiam at lacus a tellus volutpat auctor bibendum eget leo. Donec posuere auctor porta.
                        Integer cursus dolor id tellus interdum, dapibus congue sem blandit. Phasellus varius porta risus, sit amet fermentum erat. Curabitur posuere mauris a efficitur tincidunt. Nunc.
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Text</td>
                </tr>
                <tr>
                    <td>Basia</td>
                    <td>15</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Hania</td>
                    <td>19</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>10</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Mojżesz</td>
                    <td>9</td>
                    <td>Italy</td>
                </tr>
                <tr>
                    <td>Test</td>
                    <td>0</td>
                    <td>Italy</td>
                </tr>

            </table>
        </div>
    </div>

</body>
</html>