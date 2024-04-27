<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "$name님의 email주소는 $email 입니다.";
    
    // HTTP 요청 방식
    // 1. GET 방식
    // 2. POST 방식

    // 두 방식 모두 form 요소를 통해 입력받은 데이터를 연관 배열에 담아 전송한다.
    // 이 연관 배열의 키값은 input 요소의 name 속성값이 되며, 값은 사용자가 입력한 데이터가 된다.
    // 또한, 미리 선언된 전역 변수인 슈퍼 글로벌 배열($_GET, $_POST)을 사용하므로, 어디에서든 제약 없이 접근할 수 있다.
    // * $__GET과 $__POST와 같은 슈퍼 글로벌 배열은 PHP 4.1부터 지원된다.




    //GET 방식
    //GET 방식은 주소에 데이터를 추가하여 보내는 방식
    //보안성이 취약함으로 POST 방식을 사용하는게 좋음

    //POST 방식
    //POST 방식은 데이터를 별도로 첨부하여 전달하는 방식
    //POST 방식은 브라우저에 의해 캐쉬되지 않으므로 브라우저 히스토리에 남지 않는다.
    //POST 방식은 GET방식과는 다르게 쿼리 문자열과는 별도로 전송된다.
    //따라서 데이터에 대한 길이도 없기에 GET 방식보다 보안성이 높다.


    
    ?>
<form action="request.php" method="post">
        이름 : <input type="text" name="name"><br>
        이메일 : <input type="text" name="email"><br>
        <input type="submit">
    </form>
   
</body>
</html>