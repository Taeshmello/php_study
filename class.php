<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //클래스 => 함수는 기능을 포장하는 기술 이라면 클래스는 그렇게 만들어진 변수와 함수 중 연관있는 변수와 함수를 선별해 포장하는것.

    //객체 => 인스턴스의 다른 말

    //프로퍼티 => 클래스 내부에 만드는 변수
    
    //메서드 => 클래스에서 만드는 함수(멤버함수)


    //생성자 => 객체 생성될때 호출되는 것

    class A {
        // 메소드 앞에 __ 가 붙으면 magic method임.
        // __construct를 사용한다
        public function __construct() //<= 매개변수1, 매개변수2
        {
            echo __METHOD__."생성<br>";
        }

        public function __destruct()
        {
            echo __METHOD__."소멸<br>";
        }

        
    };
    
    //인스턴스(new 키워드를 사용하여 인스턴스 생성)
    $a = new A();


    //클래스 멤버 접근(->)

    // $객체이름 -> 프로퍼티(클래스 내부에 만드는 변수)이름;
    // %객체이름 -> 메소드이름;


    //또한 객체 내부에서 해당 인스턴스의 프로퍼티의 접근하고 싶을땐 특별한 변수인 this 를 사용한다.
    // $this -> 프로퍼티이름;


    //접근 제어

    //public => 어디서나 직접 접근 가능
    //private => 해당 클래스의 멤버에서만 접근 가능
    //protected => 상위 클래스에 대해선 public처럼 사용 가능, 외부에선 private 멤버로 취급


    class newClass
    {
        public $publicVar;
        private $privateVar;
        protected $protectedVar;

        public function __construct()
        {
            $this -> publicVar = "public<br>";
            $this -> privateVar = "private<ba>";
            $this -> protectedVar = "protected<br>";

        }

        public function publicMethod(){
            echo "public method<br>";
        }
        private function privateMethod(){
            echo "private method<br>";
        }
        protected function protectedMethod(){
            echo "protectedMethod<br>";
        }
    }


    $object = new newClass();

    // echo $object -> publicVar(); <- 접근가능
    // echo $object -> privateVar(); <- 접근불가
    // echo $object -> protectedVar(); <- 접근불가

    // echo $objcet -> publicMethod(); <- 접근가능
    // echo $object -> privateMethod(); <- 접근불가
    // echo $object -> protectedVar(); <- 접근불가


    //정보 은닉

    //private나 protected를 사용하면 외부에서 접근 할 수가 없지만 public메소드를 사용하면 접근할 수 있다.

    class secondClass
    {
        private $privateV;

        public function __construct()
        {
            $this -> privateV = "private property";
        }

        public function gValue(){
            return $this -> privateV;
        }

        public function sValue($value){
            $this -> privateV = $value;
        }


    }

    $objcet_02 = new secondClass();
    $objcet_02 -> sValue("privateV값 변경<br>"); //setValue를 통해 $private의 값을 변경 가능
    echo $objcet_02 -> gValue();

    



    

    
    
    ?>
</body>
</html>