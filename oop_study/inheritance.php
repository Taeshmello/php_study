<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //상속(inheritance) => 기존의 클래스의 기능을 추가하거나 재정의하여 새로운 클래스를 만드는 것

    //자식(child) 클래스는 부모(parent)클래스의 모든 public, protected 멤버를 상속받게 된다

    //예제: A클래스를 상속받는 B클래스

    // class B extends A
    // {
    //     B클래스만의 프로퍼티와 메서드;
    // }


    //오버라이딩(overriding) => 이미 정의된 메서드를 같은 이름의 메서드로 다시 정의하는 것.
    // 메서드 오버라이딩은 상속받은 부모의 메서드를 재정의하여 사용하는것.

    class A
    {
        public $property = "class A";
        public function showProperty(){
            echo $this -> property."<br>";
        }
    }

    class B extends A    //클래스 A를 상속받음.
    {
        public $property = "class B";
        public function showProperty() //클래스 A의 메소드를 오버라이딩
        {
            echo "hello". $this->property."<br>";
        }
    }


    $a = new A();
    $a->showProperty(); //클래스 A의 메서드를 호출
    $b = new B();
    $b->showProperty() // 클래스 B의 메서드를 호출




   
  
 




    
    ?>
</body>
</html>