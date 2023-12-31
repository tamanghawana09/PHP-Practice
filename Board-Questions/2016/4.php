<?php
    #Access modifiers in php
    class MyClass {
        public $publicVar = "I am public";
        private $privateVar = "I am private";
        protected $protectedVar = "I am protected";
    
        public function publicMethod() {
            echo $this->publicVar;
        }
    
        private function privateMethod() {
            echo $this->privateVar;
        }
    
        protected function protectedMethod() {
            echo $this->protectedVar;
        }
    }
    
    $obj = new MyClass();
    
    echo $obj->publicVar; // Accessible
    $obj->publicMethod(); // Accessible
    
    // Below lines will cause errors because private and protected members cannot be accessed directly from outside the class.
    // echo $obj->privateVar;
    // $obj->privateMethod();
    // echo $obj->protectedVar;
    // $obj->protectedMethod();
    
?>