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
        $q = 
        [
            "1" => 
            [
                "Вопрос" => "Как тебя зовут?",
                "Ответ" => "Аркаша"
            ],
            "2" => 
            [
                "Вопрос" => "2?",
                "Ответ" => "2"
            ],
            "3" => 
            [
                "Вопрос" => "8?",
                "Ответ" => "8"
            ]
            
        ];


        if (isset($_POST["enter"])) {
            foreach ($q as $key => $value) {
                $question = $value['Вопрос'];
                $userAnswer = $_POST["$key"];
                $trueAnswer = $value['Ответ'];
                $for1 = "
                    <div>
                        <p>$question</p>
                        <p style='color: green;'>Ваш ответ: $userAnswer</p>
                        <p>Верно</p>
                    </div>
                ";
                if($userAnswer == $trueAnswer){
                    echo $for1;
                }
                else
                {
                    echo "
                    <div>
                        <p>$question</p>
                        <p style='color: red;'>Ваш ответ: $userAnswer</p>
                        <p>не верно</p>
                    </div>
                ";
                }
            }
        }

    ?>
    <form action="task13.php" method="post">
        <?php 
        if (!isset($_POST["enter"])) {
            foreach ($q as $key => $value) {
                $question = $value['Вопрос'];
                echo "
                    <div>
                        <p>$question</p>
                        <input type='text' name='$key'>
                    </div>
                ";
            }
        }
        ?>
        <p><input name='enter' type="submit" /></p>
    </form>
</body>
</html>