<?php
// BASIC OF CREATING OBJECTS, CLASSES AND METHODS AND CALLING METHODS

# echo "Hello World!"; Just for test
class calculation { # This is a "Class"

    public $a, $b, $c; # This are called "Properties"
    
    function sum() { # This are called "Methods"
        $this->c = $this->a + $this->b;
        return $this->c; 
    }

    function sub() { # This are called "Methods"
        $this->c = $this->a - $this->b;
        return $this->c; 
    }

}

$c1 = new calculation(); # Assigning a new "Object"
# "$c1" is a new object following calculation class

$c1->a = 10; # Assigning value of "a"
$c1->b = 20; # Assigning value of "b"

echo $c1->sum() . "<br>"; # Calling a "sum" method

class person {
    public $name;
    function show() {
        echo "Your Name: " . $this->name;
    }
}
$p1 = new person();
$p1->name = "Jugal K. Das";
$p1->show() . "/n";

// Ends Here

// PHP OOP "construtcor" FUNCTION

# constructor function -> automatacally call saves time
# Here is the modified version of the later example

class person1 {
    public $name, $age;
    function __construct($n, $a)
    {
        $this->name = $n; # Here the function automatacally run and the value of
        # "$n" initiallize as the value of "$name"
        $this->age = $a;
    }
    function show() {
        echo "Your Name: " . $this->name . "\n";
        echo "Your Age: " . $this->age . "\n";
    }
}
$p2 = new person1("Jugal Kishor Das", 20); # Here the value of "$n" is already passed
$p2->show();

// Ends Here

// PHP OOPS INHERITANCE



// Ends Here