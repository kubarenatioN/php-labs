<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Task 1.</h2>
<?php

    $str = "7+7 ab 7+77 7++7 7-7 77 7++++7 7+++7 abc 567";
    $pattern = "/\s7\+{1,}7\s/";

    $result = preg_match_all($pattern, $str, $matches);

    print_r($matches);

?>

<h2>Task 2.</h2>
<?php

    $password = "zxcqweqwew2_";
    $password2 = "zxcqweqweW_";

    function checkPassword($password) {
        $pattern = "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}/";
        return (preg_match($pattern, $password) === 1 ? "Пароль надежный." : "Пароль не надежный.")."<br>";
    }

    echo checkPassword($password);
    echo checkPassword($password2);

?>

<h2>Task 3.</h2>
<?php

    $number = "a123df";
    $number2 = "a12df";
    $number3 = "a123df_";

    function checkCarNumber($number) {
        $pattern = "/^[a-zA-Z]\d{3}[a-zA-Z]{2}$/";
        return (preg_match($pattern, $number) === 1 ? "Номер правильный." : "Номер не правильный.")."<br>";
    }

    echo checkCarNumber($number);
    echo checkCarNumber($number2);
    echo checkCarNumber($number3);

?>

<h2>Task 4.</h2>
<?php

    function findEmails($text) {
        $pattern = "/\w+@(\w+\.)+(com|ru|by)/";
        preg_match_all($pattern, $text, $res);
        return $res;
    }

    $text = "qwe@zxc.qwe.com and dd@by i @sa.com and asd@qwe.ru aanndd mail@belstu.by";
    $res = findEmails($text);

    print_r($res[0]);

?>

<h2>Task 5.</h2>
<?php

    mb_internal_encoding('utf-8');
    $text = "Привет, ты д у  P     А k!";

    function generatePattern($word) {
        $dictionary = array(
            "д" => "d",
            "а" => "a",
            "x" => "х",
            "e" => "е",
            "у" => "y",
            "р" => "p",
            "o" => "о",
            "c" => "с",
            "к" => "k"
        );
        $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
        $f = array_shift($letters);
        // $pattern = "[".mb_strtolower($f).mb_strtoupper($f)."]";
        $pattern = "";
        $keys = array_keys($dictionary);
        if(in_array($f, $keys)) {
            $pattern .= "[{$f}{$dictionary[$f]}]";
        } else {
            $pattern .= $f;
        }
        foreach ($letters as $k => $v) {
            $pattern .= "\s*";
            if(in_array($v, $keys)) {
                $pattern .= "[{$v}{$dictionary[$v]}]";
            } else {
                $pattern .= $v;
            }
        }
        // echo $pattern."<br>";
        return $pattern;

    }

    $pattern = generatePattern("дурак");
    
    $res = preg_replace("/$pattern/ui", "хороший человек", $text);
    echo $res;
?>


</body>
</html>