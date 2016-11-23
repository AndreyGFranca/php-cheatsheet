<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23/11/16
 * Time: 13:11
 */

$cars = array("Toyota", "BMW", "Volvo");
/* The var_dump function displays structured information about
 variables/expressions including its type and value. Arrays are
 explored recursively with values indented to show structure.
 It also shows which array values and object properties are references.*/
var_dump($cars);

/*The print_r() displays information about a variable in a way that's
 readable by humans. array values will be presented in a format that
 shows keys and elements. Similar notation is used for objects. */
print_r($cars);