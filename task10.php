<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="10.php" method="post">
    <textarea name="text" placeholder="">dasasdas</textarea>
    <input type="submit">
</form>
    

    <?php

if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = mb_strlen($str);
    $valuesCount = array_count_values(str_split($str));
    foreach ($valuesCount as $key => $item) {
        $x = 100 / $strLen * $item;
        echo '"'.$key.'" - "'.round($x, 2).'"<br>';
    }
}
?>
    <div>

        
    </div>
</body>
</html>