<?php
//universal color changefor all h2 in the bottom
$h2_color="yellow";

echo "Hello World<br/>"; echo "I Am Ayush<br/>";
echo "As a function<br/>";
// variable
$name = "Ayush Rana <br/>";
echo $name;
$_a=5;
$b=9;
$multi=$_a*$b;
echo $multi; 
//using html tags in php
echo "<h1 style='color:green'> php with html</h1>";
echo "<h3 style='color:red'> php with html</h3>";
?>
<?php
//can use separate tags
$name="Ayush Rana";
echo "<h1 style='color:blue'>I am $name</h1>";
?>


<!-- php in html -->

<h1 style="color:red">
    I am a Software Developer And I am <?php echo $name; ?>
</h1>

<h2 style="color:<?php echo $h2_color?>">
    I am <?php echo $name; ?>
</h2>
<h2 style="color:<?php echo $h2_color?>">
    I am <?php echo $name; ?>
</h2>

<?php

const data=20;
// const data=40; wont work basically the same as js
//another way to make ini constants
define("data1", "Hi is this is Ayush");
echo data1;
echo "<br/>";

$a= 20;
$a= 20;
echo $a=30;
echo "<br/>";
echo var_dump($a);
echo "<br/>";
?>

<?php
//conactination in string for all data types

$name= "Ayush Rana";
$age= 20;
//not recc
echo "My name is ".$name. " and my age is".$age;
echo "<br/>";

//alternatively

echo "My name is $name";
echo "<br/>";

//alternate with concat operator
$str1= "Hello How you doin ";
$str2= "My name is Ayush";
$str1.=$str2;
echo $str1;
?>