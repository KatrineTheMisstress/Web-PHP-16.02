<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action="index.php" method="post">
    <p>Year: <input type="text" name="year" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
        $year = $_POST["year"];
        
        list($day, $month) = explode(".", $year);

        $arrSigns = ["Овен","Телец","Близнецы","Рак","Лев","Дева","Весы",
        "Скорпион","Стрелец","Козерог","Водолей","Рыбы"];

        
        echo($arrSigns[yourSign($month,$day)]);

        function yourSign($mo,$da)
        {
            if(($da >= 21 and ($mo == "03" or $mo == 3)) or
             (($da >=20 and($mo == "04" or $mo == 4))))
             {
                return 0;
             }
             if(($da >= 21 and ($mo == "04" or $mo == 4)) or
             (($da <=21 and($mo == "05" or $mo == 5))))
             {
                return 1;
             }
             if(($da >= 22 and ($mo == "05" or $mo == 5)) or
             (($da <= 21 and($mo == "04" or $mo == 4))))
             {
                return 2;
             }
             if(($da >= 22 and ($mo == "06" or $mo == 6)) or
             (($da <=22 and($mo == 07 or $mo == 7))))
             {
                return 3;
             }
             if(($da >= 23 and ($mo == "07" or $mo == 7)) or
             (($da <= 23 and ($mo == "08" or $mo == 8))))
             {
                return 4;
             }
             if(($da >= 24 and ($mo == "08" or $mo == 8)) or
             (($da <=22 and($mo == "09" or $mo == 9))))
             {
                return 5;
             }
             if(($da >= 23 and ($mo == "09" or $mo == 9)) or
             (($da <=23 and($mo == 10))))
             {
                return 6;
             }
             if(($da >= 24 and ($mo == 10)) or
             (($da <=22 and($mo == 11))))
             {
                return 7;
             }
             if(($da >= 23 and ($mo == 11)) or
             (($da <=21 and($mo == 12))))
             {
                return 8;
             }
             if(($da >= 22 and ($mo == 12)) or
             (($da <=20 and($mo == "01" or $mo == 1))))
             {
                return 9;
             }
             if(($da >= 21 and ($mo == "01" or $mo == 1)) or
             (($da <=18 and($mo == "02" or $mo == 2))))
             {
                return 10;
             }
             if(($da >= 19 and ($mo == "03" or $mo == 3)) or
             (($da <=20 and($mo == "03" or $mo == 3))))
             {
                return 11;
             }
             
        }
    ?>
    

</body>
</html>