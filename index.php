<?php
// BASIC OF CREATING OBJECTS AND CLASSES

// echo "Hello World!"; Just for test
class calculation { // This is a "Class"

    public $a, $b, $c; // This are called "Properties"
    
    function sum() { // This are called "Methods"
        $this->c = $this->a + $this->b;
        return $this->c; 
    }

    function sub() { // This are called "Methods"
        $this->c = $this->a - $this->b;
        return $this->c; 
    }

}

$c1 = new calculation(); // Assigning a new "Object"
// "$c1" is a new object following calculation class

$c1->a = 10; // Assigning value of "a"
$c1->b = 20; // Assigning value of "b"

echo $c1->sum() . "<br>"; // Calling a "sum" method

class person {
    public $name;
    function show() {
        echo "Your Name: " . $this->name;
    }
}
$p1 = new person();
$p1->name = "Jugal K. Das";
$p1->show();