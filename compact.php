<?php
include("/Users/havencarty/Sites/grantscott/Views/Index.php");
include("/Users/havencarty/Sites/grantscott/Views/People.php");

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
?>