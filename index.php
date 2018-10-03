<!DOCTYPE html>
<!--
Brandon Abbenhuis
Robbert Remie
Simon Gharnagharyan
Date: 3-10-2018
-->
<?php
        function DateProcessor($stringWithDate){
            return "";
        }
        //Call this with your horoscope sign and the type (day ,week, year), it returns your current horoscope
        function CallAPI($horoscopeSign, $hType){
            
            return "";
        }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Horoscoop project</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        
        ?>
        <h1>De horoscoop</h1>
        <div>Welcome to our horoscope website, please enter your date of birth and select the type of horoscope you would like to receive.</div>
        <div>
            <form action="welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
