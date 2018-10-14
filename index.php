<!DOCTYPE html>
<!--
Brandon Abbenhuis
Robbert Remie
Simon Gharnagharyan
Date: 3-10-2018
-->
<?php
        function DateProcessor($stringWithDate){
            if ($stringWithDate == "21-03") {
            return "$stringWithDate Ram";
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

            <div id="mainBlok">
                    <div id="header">
                     <h1>De horoscoop</h1>
                    </div>
                    <div id="content">
                    <?php

                    ?>
                    <form action="index.php" method="post">
                        Name: <input type="text" name="name"><br>
                        Geboorte datum: <input type="date" name="birthDate"><br>
                        Type horoscoop: <select><option>Dag</option><option>Week</option></select><br>
                        <input value="Haal mijn horoscoop op" type="submit">
                    </form>
                    </div>
                    <div id="footer">
                    </div>
            </div>

    </body>
</html>
