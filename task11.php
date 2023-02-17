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
    <p>Year: <textarea name="year"></textarea></p>
    <p><input type="submit" /></p>
    </form>


    <?php
        $year = $_POST["year"];

        function changeStr($str)
        {
            $chars =[
                'а' => 'a',    
                'б' => 'b',    
                'в' => 'v',    
                'г' => 'g',    
                'д' => 'd',
                'е' => 'e',    
                'ё' => 'e',    
                'ж' => 'zh',   
                'з' => 'z',    
                'и' => 'i',
                'й' => 'y',    
                'к' => 'k',    
                'л' => 'l',    
                'м' => 'm',    
                'н' => 'n',
                'о' => 'o',    
                'п' => 'p',    
                'р' => 'r',    
                'с' => 's',    
                'т' => 't',
                'у' => 'y',    
                'ф' => 'f',    
                'х' => 'h',    
                'ц' => 'c',    
                'ч' => 'ch',
                'ш' => 'sh',   
                'щ' => 'sch',  
                'ь' => '',     
                'ы' => 'u',    
                'ъ' => '',
                'э' => 'e', 
                'ю' => 'yu',
                'я' => 'ya',
                'А' => 'A',    
                'Б' => 'B',    
                'В' => 'V',    
                'Г' => 'G',    
                'Д' => 'D',
                'Е' => 'Е',    
                'Ё' => 'Е',
                'Ж' => 'Zh',   
                'З' => 'Z',    
                'И' => 'I',
                'Й' => 'Y',    
                'К' => 'K',    
                'Л' => 'L',    
                'М' => 'M',    
                'Н' => 'N',
                'О' => 'O',    
                'П' => 'P',    
                'Р' => 'R',    
                'С' => 'S',    
                'Т' => 'T',
                'У' => 'U',    
                'Ф' => 'F',    
                'Х' => 'H',    
                'Ц' => 'C',    
                'Ч' => 'Ch',
                'Ш' => 'Sh',   
                'Щ' => 'Sch',  
                'Ь' => '',     
                'Ы' => 'Y',    
                'Ъ' => '',
                'Э' => 'E',    
                'Ю' => 'Yu',   
                'Я' => 'Ya',
            ];
        
            $str = strtr($str, $chars);
            return $str;
        }
 
        echo changeStr($year);

    ?>
    

</body>
</html>