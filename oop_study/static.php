<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     // static 키워드
    // 클래스를 정의할때 static 키워드를 사용한 프로퍼티와 메소드는 해당 클래스의 인스턴스를 생성하지 않아도 접근 가능.



    //정적 멤버 특징
    // 1. static 키워드로 선언된 정적 프로퍼티는 인스턴스화된 객체에서는 접근할 수 없다

    // 2. static 키워드로 선언된 정적 메소드는 인스턴스화된 객체에서도 접근할 수 있다

    // 3. 정적 메소드 내에서는 $this 의사 변수를 사용할 수 없다

    class staticMember
    {
        public static $staticProperty = "static property";
        public static function showProperty(){
        // self => 키워드는 코드가 선언된 곳의 클래스
            echo self::$staticProperty."<br>";

        }


    }

    echo staticMember::showProperty(); //호출 가능
    echo staticMember::$staticProperty; //접근 가능

    $var = new staticMember();
    echo $var -> showProperty(); //호출 가능
    // echo $var -> $staticProperty; //접근 불가능

    //범위 지정 연산자(::) => 단순히 클래스의 정의 내에서 프로퍼티나 메소드를 사용하고 싶을 때는 범위 지정 연산자(::)를 사용

    // 범위 지정 연산자(::)는 클래스의 상수, 정적(static) 멤버 또는 재정의된 멤버에 접근할 수 있게 해준다.
    // 클래스의 정의 외부에서 위와 같은 멤버에 접근할 때는 클래스의 이름을 사용해야 한다.

    //예제
    
    // echo OtherClassName::CONSTANT

    


    
    
    
    
    ?>
</body>
</html>