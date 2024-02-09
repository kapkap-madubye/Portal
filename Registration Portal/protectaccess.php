<?php
$name = $_POST["name"];
$IDnumber = $_POST["IDnumber"];
$pw = $_POST["pw"];
if (
    !preg_match("[a-zA-Z]", $name)
    || strlen($IDnumber) == 12
    || !preg_match("/^\d{3}[-]?\d{3}[-]?\d{3}[-]?\d{3}$/", $IDnumber)
    || !preg_match("/., +, *, ?, ^, $, (, ), [, ], {, }, |, \./", $pw)
) {
    print("<h1>Access Denied Invalid Data.</h1>");
} else {
    print("<h1>Successful.</h1>");
}
$IDnumber = preg_replace("/-/", "", $IDnumber);
$pw = preg_replace("/./", "*", $pw);
print "<p>$name, $pw, $IDnumber</p>";

?>