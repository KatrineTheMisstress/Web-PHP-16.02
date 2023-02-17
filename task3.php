<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    
    <form action="index.php" method="post">
    <p>Year: <input type="date" name="year" /></p>
    <p><input type="submit" /></p>
    </form>
    <?php
     $year = $_POST['year'];
     $t = strtotime($year);
     $day = idate("w",$t);
     $days = array(1 => "пт",
      2 => "вт",
        3 => "ср",
        4 => "чт",
        5 => "пт",
        6 => "сб",
        7 => "вс");

     echo($days[$day]);
    ?>
    <div>

        
    </div>
</body>
</html>