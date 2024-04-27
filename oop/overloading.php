<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // 오버로딩(overloading) => 
    // 다른 대부분의 객체 지향 프로그래밍 언어에서 오버로딩(overloading)은 매개변수의 개수와 타입을 달리하여 같은 이름의 메소드를 중복하여 정의하는 것을 의미한다.
    // 하지만 PHP에서는 다른 언어와는 달리 프로퍼티나 메소드를 동적으로 '생성한다'는 의미로 오버로딩을 사용한다.
    // 이렇게 동적으로 생성된 멤버는 해당 클래스의 매직 메소드(magic method)를 통해 다양한 형태로 처리할 수 있다.
    // 이때 오버로딩되는 메소드는 반드시 public으로 정의되어야만 한다.

    // PHP에서는 접근 불가 프로퍼티(inaccessible property)를 오버로딩하기 위해 다음과 같은 매직 메소드를 구현해야 한다.

    // 매직 메소드의 원형
    // 1. public void __set(string $name, mixed $value)

    // 2. public mixed __get(string $name)

    // 3. public bool __isset(string $name)

    // 4. public bool __unset(string $name)

 

    // 1. __set() 메소드는 접근 불가 프로퍼티의 값을 설정할 때 호출된다.

    // 2. __get() 메소드는 접근 불가 프로퍼티의 값을 읽을 때 호출된다.

    // 3. __isset() 메소드는 접근 불가 프로퍼티에 대해 isset() 함수나 empty() 함수가 호출될 때 호출된다.

    // 4. __unset() 메소드는 접근 불가 프로퍼티에 대해 unset() 함수가 호출될 때 호출된다.


    class propertyOverloading
    {
        private $data = array(); // 오버로딩된 변수가 저장될 배열
        public $declared = 10; // public으로 선언된 프로퍼티
        public $hidden = 20; // private로 선언된 프로퍼티

        public function __set($name, $value)
        {
            echo "$name 프로퍼티를 {$value}의 값으로 생성합니다.<br>";
            $this ->data[$name] = $value;
        }

        public function __get($name)
        {
            echo "$name 프로퍼티의 값을 읽습니다.<br>";
            if(array_key_exists($name, $this->data)){
                return $this->data[$name];
            } else {
                return null;
            }
        }

        public function __isset($name)
        {
            echo "$name 프로퍼티가 설정되어있는지 확인합니다.<br>";
            return isset($this->data[$name]);
        }

        public function __unset($name)
        {
            unset($this->data[$name]);
        }

        

    }

    $object = new propertyOverloading(); // propertyOverloading 객체 생성

    $object->prop = 1; //동적 프로퍼티 생성
    echo $object->prop; //동적 프로퍼티에 접근
    var_dump(isset($object->prop)); //동적 프로퍼티로 isset()함수 호출
    unset($object->prop); //동적 프로퍼티로 unset() 함수 호출
    echo $object-> declared; // 선언된 프로퍼티는 오버로딩을 사용하지 않음.
    echo $object-> hidden; // private로 선언된 프로퍼티는 클래스 외부에서 접근할 수 없으므로 오버로딩을 사용함.
    echo "<br>";
    


    //메소드 오버로딩
    //php에서는 접근불가 메소드를 오버로딩 하기 위해 매직 메소드를 구현해야한다.
    // 1. __call() 메소드는 클래스 영역에서 접근 불가 메소드를 호출할 때 사용된다.
    // 2. __callStatic() 메소드는 정적(static) 영역에서 접근 불가 메소드를 호출할 때 호출된다.

    class methodOverloading
    {
        public function __call($name, $arguments)
        {
            echo join(",",$arguments)."에서 접근 불가 메소드를 호출합니다.<br>";
        }
        public static function __callStatic($name, $arguments)
        {
            echo join(",",$arguments)."에서 접근 불가 메소드를 호출합니다.<br>";
        }
    }

    $obj = new methodOverloading(); // methodOverloading 객체 생성

    $obj -> testMethod("클래스 영역"); // 클래스 영역에서 접근 불가 메소드 호출
    methodOverloading::testMethod("정적 영역"); //정적 영역에서 접근 불가 메소드 호출
    ?>
</body>
</html>