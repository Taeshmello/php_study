<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //함수

    function myTest(){
        $um = 5;
         
         echo "변수 gl의 출력값: $um";
         echo "<br>";
     }
 
     myTest();
 
 
     $umm = 5;
 
     function stTest(){
       global $umm;
       echo "umm의 값: ($umm)<br>";
     }
 
     stTest();
 
     function counter() {
         static $count = 0;
         
         echo "함수 내부에서 호출한 static 변수 count의 값은 {$count}입니다.<br>";
         ++$count;
         
     }
     counter();
     counter();
     counter();
    
    
    ?>
</body>
</html>