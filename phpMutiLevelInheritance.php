<?php

/*

PHP support single and multilevel inheritance but not support multiple inheritance.

*/

class first{

	 function show(){
		echo 'class first';
	 }
 
}

class second{

	 function display(){
		first::show();
		echo '<br>class second';
	 }
 
}

class third{

	 function prints(){
		second::display();
		echo '<br>class third';
	 }
 
}

$obj = new third();
$obj->prints();


?>
