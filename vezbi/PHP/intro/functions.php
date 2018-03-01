<?php 

    # Function - Block of code that can be repeatedly called

    /* 
    Camel Case - myFunction();
    */

    function simpleFunction(){
        echo "Hello World";
    }
    simpleFunction();

    function sayHello($name = "World"){
        echo "Hello $name<br/>";
    }
    // sayHello("Joe")  Hello Joe
    // sayHello(); Hello World

    
?>