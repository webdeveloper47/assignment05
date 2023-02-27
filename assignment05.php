<?php

class Person{


    private $name;
    private $email;


    function __construct($name="", $email=""){
        $this->name = $name;
        $this->email = $email;


    }


    function get_name(){
        return $this->name;
    }


    function set_name($name){
        $this->name = $name;
    }




    
    function get_email(){
        return $this->email;
    }


    function set_email($email){
        $this->email = $email;
    }




    function personAllDetails(){
        echo "Person name is: {$this->get_name()}";
        echo "Person email is: {$this->get_email()}";
    }
}



$persondetails= new Person();
$persondetails->set_name("Md Mirajul Islam\n");
$persondetails->set_email("mirajulislam0724@gmail.com");
$persondetails->personAllDetails();
