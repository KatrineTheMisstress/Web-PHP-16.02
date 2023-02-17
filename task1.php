<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <?php
        $yourDate = (mktime(0, 0, 0,12,31,date("Y")));
        $dateNow = (mktime(0, 0, 0,date("m"),date("d"),date("Y")));
    ?>
    <h1><?php echo(($yourDate - $dateNow)/60/60/24)  ?></h1>
</body>
</html>