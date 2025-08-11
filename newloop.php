<?php

//best for arrays better then other loops
$users =["Ayush", "Anil", "Anish", "Abhi"];
//use count to count tje length of arr

foreach ($users as $x) {
    echo "$x <br/>";
    //use if and break to stop
}

//another way for foreach

foreach ($users as $x):
    echo "$x <br/>";
endforeach;