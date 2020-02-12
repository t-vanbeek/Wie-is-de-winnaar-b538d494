<!DOCTYPE html>
<?php session_start(); ?>
<html class="backgroundcolor">
<head>
    <link rel="stylesheet" href="style.css">
    <title>
        steen_papier_schaar
    </title>
</head>

<body class="color">
    <h1>
        Steen_Papier_Schaar!
    </h1>

    <?php
            if(isset($_POST['steen'])){
                $_SESSION['player:1'] = 'steen';
            }
            if(isset($_POST['papier'])){
                $_SESSION['player:1'] = 'papier';
            }
            if(isset($_POST['schaar'])){
                $_SESSION['player:1'] = 'schaar';
            }
            if(isset($_POST['steen2'])){
                $_SESSION['player:2'] = 'steen';
            }
            if(isset($_POST['papier2'])){
                $_SESSION['player:2'] = 'papier';
            }
            if(isset($_POST['schaar2'])){
                $_SESSION['player:2'] = 'schaar';
            }
    ?>

    <div>
            <?php 
            if(isset($_SESSION['player:1']) && isset($_SESSION['player:2'])){
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['input'])){
                    echo "Gelijk_Spel";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['input'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['input'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['input'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['input'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['input'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['input'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
            }
                

            ?>
    </div>

    <div>
        <?php 
        if(isset($_POST['input'])) {
            echo "Speler 1:". $_SESSION['player:1'];
        }else{
            echo "Speler 1:";
        }
        ?>
        <br>
        <br>
        <?php if(isset($_POST['input'])) {
        echo "Speler 2:". $_SESSION['player:2'];
        }else{
            echo "Speler 2:";
        }
        ?>
    </div>

<form  method="POST">
    <div>
        <h3>Speler_1</h3>
        <?php
            if(isset($_POST['steen'])) {
                echo ("Keuze gemaakt");
            }
            elseif(isset($_POST['papier'])){
                echo ("Keuze gemaakt");
            }
            elseif(isset($_POST['schaar'])){
                echo ("Keuze gemaakt");
            }
            elseif(isset($_SESSION['player:1'])){
                echo ("Keuze gemaakt");
            }
             else {  
        ?>
            <input name="steen" type="submit" value="steen">
            <input name="papier" type="submit" value="papier">
            <input name="schaar" type="submit" value="schaar">
            <?php }
            ?>
    </div>
    <div>
        <h3>Speler_2</h3>
        <?php
            if(isset($_POST['steen2'])) {
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['steen2'])){
                    echo "Gelijk_Spel <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['steen2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['steen2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['steen2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['steen2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['steen2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['steen2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
            }
            elseif(isset($_POST['papier2'])){
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['papier2'])){
                    echo "Gelijk_Spel <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['papier2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['papier2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['papier2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['papier2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['papier2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['papier2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
            }
            elseif(isset($_POST['schaar2'])){
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['schaar2'])){
                    echo "Gelijk_Spel <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['schaar2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['schaar2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['schaar2'] )){
                    echo "Player:2 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['schaar2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['schaar2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>" . PHP_EOL;
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['schaar2'] )){
                    echo "Player:1 Heeft_Gewonnen <br>";
                    echo "Speler 1: " . $_SESSION['player:1'] . "<br>";
                    echo "Speler 2: " . $_SESSION['player:2'] . "<br>";
                }
            }
            elseif(!isset($_SESSION['player:1'])){
                echo "Wachten op speler 1";
            }
             else {  
                 ?>
            <input name="steen2" type="submit" value="steen">
            <input name="papier2" type="submit" value="papier">
            <input name="schaar2" type="submit" value="schaar">
             <?php } ?>
    </div>
    <div>
            <h3>Winaar_weergeven</h3>
            <input name="input" type="submit" value="Winnaar_Weergeven">
    </div>
</form>
</body>

</html>