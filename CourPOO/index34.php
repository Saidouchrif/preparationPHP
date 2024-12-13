<?php
// POO 
// method cour 64 video 65
class Index34{
    function __construct($name,$age){
        if($age>19&&$name=="said"){
            echo "welcome said";
        }else{
            echo "not valid !";
        }
    }
}
$app= new Index34("said",18);
// methode
class App{
    private $pass;
    public $name;
    public $age;
    public $city;
    function __construct(){
        $this->city='casa';
        $this->name='said';
        $this->age=18;
        $this->change();
    }
    public function change(){
        $this->name='said2';
        $this->city="rabat";
    }
    public function getPass(){
        $this->pass="123";
        return $this->pass;
    }
    public function print(){
        echo "<h1>". $this->name ."</h1>";
        echo "<h1>". $this->age ."</h1>";
        echo "<h1>". $this->city ."</h1>";
    }
}
$app2= new App();
$app2->print();
echo "<h1>". $app2->getPass() ."</h1>";
?>