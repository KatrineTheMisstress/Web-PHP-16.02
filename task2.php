<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    
    <form action="2.php" method="post">
    <p>Year: <input type="text" name="year" /></p>
    <p><input type="submit" /></p>
    </form>
    <?php
     $year = $_POST['year'];
     
     year($year);
     function year($yearNotCheaked)
     {
        if((($yearNotCheaked % 100 == 0) && ($yearNotCheaked % 400 != 0)))
        {
            echo('Не високосный');
        }
        else if(($yearNotCheaked % 4 == 0))
        {
            echo("Високосный");
        }
        else{
            echo('Не високосный');
        }
     }
    
    ?>
    <div>

        
    </div>
</body>
</html>