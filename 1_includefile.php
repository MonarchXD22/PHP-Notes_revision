<?php
echo "included file below";
echo "<br/>";

//so now i want to add another file say goto.php in this so lets do it

// include("./goto.php");

//so sometimes you want to add the code/file only once and since it can be added in multiple pages for use it can also be used in loop that but the loops may run 100 times and cause it to spam while it might be needed only once for that we have include_once.
//for ex.
// for($i=0;$i<10;$i++){
//     include_once("./goto.php");
// }
//include gives warning while require that does the same work gives fatal error and so is require_once.
require("./goto.php");