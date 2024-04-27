<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
       //마법함수

    //__LINE__	파일의 현재 줄 번호를 반환함.
    // __FILE__: 파일의 전체 경로와 이름을 반환함.

    // include 내부에서 사용할 경우 include된 파일명을 반환함.

    //  __DIR__	파일의 디렉터리를 반환함.
    // 포함한 파일 안에서 사용할 경우 포함된 파일의 디렉터리를 반환함.
    // dirname(__FILE__)과 같은 결과를 반환함.

    // __FUNCTION__	함수의 이름을 반환함.
    // __CLASS__	클래스의 이름을 반환함. 클래스 이름은 대소문자를 구분함.

    // __TRAIT__	
    // 트레이트(trait)의 이름을 반환함.

    // 트레이트의 이름은 트레이트를 선언한 네임스페이스를 포함함.

    // __METHOD__	클래스의 메소드 이름을 반환함.
    // __NAMESPACE__	현재 네임스페이스의 이름을 반환함.

    function magic(){
        echo __LINE__ ; // 94
        echo "<br>";
        echo __FILE__; // C:\xampp\htdocs\index.php
        echo "<br>";
        echo __DIR__; // C:\xampp\htdocs
        echo "<br>";
        echo __FUNCTION__; // magic
        echo __CLASS__; // 없음
        echo __TRAIT__;
    }

    magic();

    
    ?>
</body>
</html>