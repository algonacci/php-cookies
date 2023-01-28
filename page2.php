<?php
// setcookie("username", "Frank", time() - 3600);

if (count($_COOKIE) > 0) {
 echo "There are " . count($_COOKIE) . " cookies saved <br>";
} else {
 "There are no cookies set <br>";
}

if (isset($_COOKIE["username"])) {
 echo "User " . $_COOKIE["username"] . " is set <br>";
} else {
 "User is not set";
}
