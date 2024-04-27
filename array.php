<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //배열
    $arr = array(
        1 => "첫 번째 값", // PHP의 배열에서 키값과 1과 "1"은 같은 값을 나타냄
        "1" => "두 번째 값", // 같은 키값에서 사용하여 두 번 선언했기 때문에 나중에 선언된 "두 번째" 값만 남게됨.
        10 => "세 번째 값",
        -10 => "네 번째 값"
    );
    echo var_dump($arr);
    echo "<br>";
    echo $arr[1];
    echo "<br>";
    echo $arr["1"];
    echo "<br>";
    echo $arr[10];
    echo "<br>";
    echo $arr[-10];
    
    ?>
</body>
</html>