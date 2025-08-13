<!-- cookies is a small piece of data that can be stored for user for convinience of user by you for ex name, email etc -->
<?php
setcookie("fruit", "apple", time() + (86400));
setcookie("color", "red", time() + (86400));
if (isset($_COOKIE['fruit'])) {
    echo "current cookie is " . $_COOKIE['fruit'];
} else {
    echo "no cookie set";
}
echo "<br>";
if (isset($_COOKIE['color'])) {
    echo "current cookie is " . $_COOKIE['color'];
} else {
    echo "no cookie set";
}
