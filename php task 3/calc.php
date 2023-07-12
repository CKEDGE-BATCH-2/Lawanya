<?php

class Calculator{
private $_lavs,$_darzll;
public function __construct( $lavs, $darzll ) {
$this->_lavs=$lavs;
$this->_darzll=$darzll;
    }
    public function add(){
        return $this->_lavs+$this->_darzll;
       }
    public function subtract() {
        return $this->_lavs - $this->_darzll;
        }
    public function multiply() {
        return $this->_lavs* $this->_darzll;
        }
    public function divide() {
        return $this->_lavs/ $this->_darzll;
        }
    }
    $calc = new Calculator(30, 10); 
    echo $calc-> add()."<br>"; 
    echo $calc-> multiply()."<br>"; 
    echo $calc-> subtract()."<br>"; 
    echo $calc-> divide()."<br>"; 
?>