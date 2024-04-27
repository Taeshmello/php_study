<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      //정수
      echo "integer 타입의 크기는 ".PHP_INT_SIZE."입니다.<br>";
      echo "integer 타입이 표현 할 수 있는 가장 큰 크기는 ".PHP_INT_MAX."입니다.<br>";
      $int_01 = 100;
      $int_02 = 2147483647;
      $int_03 =  2147483648;
  
      //php에선 변수에 정수의 최대 범위를 넘는 값이 대입되면 그 변수는 자동으로 실수(float)형으로으로 인식됨.
  
      //실수
      echo "float 타입이 표현 할 수 있는 가장 큰 크기는 ".PHP_FLOAT_MAX."입니다.";
      $float_01 = 3.14;
      $float_02 = 1.23e-4;
      $float_03 = 1.8E307;
      $float_04 = 1.8E308;
  
  
      //문자열
      $str_01 = "PHP";
      $str_02 = "엄준식";
      echo "<br>";
      
      // echo strlen($str_01);
      // echo "<br>";
      // echo strlen($str_02);
  

    
    ?>
</body>
</html>