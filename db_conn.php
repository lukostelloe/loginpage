<?php

$sname = "localhost";
$uname = "id17446269_loginpage";
$password = "?JJKqXevx5QqanHr";

$db_name = "id17446269_login";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
  echo "Connection failed!";
}