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
    <p>Year: <input type="date" name="year" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
        $year = $_POST["year"];
        
        $yourDate = date($year);
        $nowY = date("Y");
        $nowM = date("m");
        $nowD = date("d");


        $t = strtotime($year);
        $yourYear = idate("Y",$t);
        $yourMonth = idate("m",$t);
        $yourDay = idate("d",$t);


        if($nowY < $yourYear)
        {
            echo("Err");
        }
        else{
            $result = $nowY - $yourYear;
            if($yourMonth > $nowM)
            {
                $result--;
                echo($result);
            }
            else if($yourDay > $nowD)
            {
                $result--;
                echo($result);
            }
            else
            {
                echo($result);
            }
        }

    ?>
    

</body>
</html>