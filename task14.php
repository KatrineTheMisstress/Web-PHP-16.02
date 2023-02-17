<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="task14.php" method="post">
    <input name="f" type="number" min="1" max="31" >
    <select name="s" id="">
        <option value="1">янв</option>
        <option value="2">фев</option>
        <option value="3">апр</option>
        <option value="4">март</option>
        <option value="5">май</option>
        <option value="6">авг</option>
        <option value="7">июнь</option>
        <option value="8">июль</option>
        <option value="9">сен</option>
        <option value="10">окт</option>
        <option value="11">ноя</option>
        <option value="12">дек</option>
    </select>
    <input name="t" type="number" min="1990" max="2025" >
    <p><input name="getit" type="submit" /></p>
</form>
<?php
    $first = $_POST["f"];
    $second = $_POST["s"];
    $th = $_POST["t"];

    
    $months = [
        'янв' =>'1',
        'фев' =>'2',
        'апр' =>'3',
        'март' =>' ',
        'май' =>'5',
        'авг' =>'6',
        'июнь' =>'7',
        'июль' =>'8',
        'сен' =>'9',
        'окт' => '10',
        'ноя' => '11',
        'дек' => '12'
    ];
    $days = array(1 => "пт",
      2 => "вт",
        3 => "ср",
        4 => "чт",
        5 => "пт",
        6 => "сб",
        7 => "вс");


    
    if($second <= 9){
        $second = 0 . $second;
    }
    if($first <= 9){
        $first = 0 . $first;
    }
    

    $date = $th.$second.$first;
    $day = idate("w",strtotime($date) );
    //echo($date);
    echo($days[$day]);
?>
</body>
</html>