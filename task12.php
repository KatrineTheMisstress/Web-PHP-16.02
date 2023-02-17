<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <p>Year: <textarea name="year"></textarea></p>
    <input value="0" type="radio"  name="no">to eng
    <input value="1" type="radio"  name="no">to rus
    <p><input type="submit" /></p>
    </form>
    <?php
        $year = $_POST["year"];
        $btn1 = $_POST["no"];

        


        function changeStr($str,$check)
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

            $chars2 =[
                 'a' =>'а' ,    
                 'b' =>'б' ,    
                 'v' =>'в' ,    
                 'g' =>'г' ,    
                 'd' =>'д' ,
                 'e' =>'е' ,    
                 'e' =>'ё' ,    
                 'zh' =>'ж' ,   
                 'z' =>'з' ,    
                 'i' =>'и' ,
                 'y' =>'й' ,    
                 'k' =>'к' ,    
                 'l' =>'л' ,    
                 'm' =>'м' ,    
                 'n' =>'н' ,
                 'o' =>'о' ,    
                 'p' =>'п' ,    
                 'r' =>'р' ,    
                 's' =>'с' ,    
                 't' =>'т' ,
                 'y' =>'у' ,    
                 'f' =>'ф' ,    
                 'h' =>'х' ,    
                 'c' =>'ц' ,    
                 'ch' =>'ч' ,
                 'sh' =>'ш' ,   
                 'sch' =>'щ' ,  
                 'u' =>'ы' ,    
                 'e' =>'э' , 
                 'yu' =>'ю' ,
                 'ya' =>'я' ,
                 'A' =>'А' ,    
                 'B' =>'Б' ,    
                 'V' =>'В' ,    
                 'G' =>'Г' ,    
                 'D' =>'Д' ,
                 'Е' =>'Е' ,    
                 'Е' =>'Ё' ,
                 'Zh' =>'Ж' ,   
                 'Z' =>'З' ,    
                 'I' =>'И' ,
                 'Y' =>'Й' ,    
                 'K' =>'К' ,    
                 'L' =>'Л' ,    
                 'M' =>'М' ,    
                 'N' =>'Н' ,
                 'O' =>'О' ,    
                 'P' =>'П' ,    
                 'R' =>'Р' ,    
                 'S' =>'С' ,    
                 'T' =>'Т' ,
                 'U' =>'У' ,    
                 'F' =>'Ф' ,    
                 'H' =>'Х' ,    
                 'C' =>'Ц' ,    
                 'Ch' =>'Ч' ,
                 'Sh' =>'Ш' ,   
                 'Sch' =>'Щ' ,      
                 'Y' =>'Ы' ,    
                 'E' =>'Э' ,    
                 'Yu' =>'Ю' ,   
                 'Ya' =>'Я' ,
            ];
            if($check == 0)
            {
                $str = strtr($str, $chars);
                return $str;
            }
            else{
                $str = strtr($str, $chars2);
                return $str;
            }
            
        }
 
        echo changeStr($year,$btn1);

    ?>
</body>
</html>