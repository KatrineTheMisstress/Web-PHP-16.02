<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    

    <?php
        $year = $_POST["year"];
        
        $arrP = [
            "2023.02.16" => "Праздник кота",
             "2023.02.17" =>"Праздник Собачьей будки",
             "2023.02.18" =>"Праздник горшка",
             "2023.02.19" =>"Праздник котят",
             "2023.02.20" =>"Праздник гороха",
             "2023.02.21" =>"Праздник ухи",
             "2023.02.22" =>"Праздник меда",
             "2023.02.23" =>"Праздник пчел",
             "2023.02.24" =>"Праздник вина",
             "2023.02.25" =>"Праздник бани",
            ];

        $t = date("Y.m.d");
        
        echo "<h1>Сегодня ".$arrP[$t].", поздравляем!!!</h1>";
        
        

        
    ?>
    

</body>
</html>