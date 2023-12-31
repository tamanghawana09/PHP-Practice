<?php
// Parent class
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.<br>";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function bark() {
        echo $this->name . " is barking.<br>";
    }

    // Override the eat method from the parent class
    public function eat() {
        echo $this->name . " the dog is eating dog food.<br>";
    }
}

// Create an instance of the child class
$dog = new Dog("Buddy");

// Call methods from both parent and child classes
$dog->eat(); // This will call the overridden eat method in the Dog class
$dog->bark();

?>