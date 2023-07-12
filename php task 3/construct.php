<?php
class student {
     function __construct(){
            echo "I'm a Developer. ";
            $this->name = "lavs ";
        }
        function __destruct(){
            echo "Im a designer, " ;
            $this->name ="suba";
        }
    }
$obj = new student();
?>