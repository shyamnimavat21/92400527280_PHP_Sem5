<?php
// Types of Function
// 1. Built-in Functions
// 2. UDF
// String Function are built-in functions.

$str1 = "Shyam";
$str2 = "Nimavat";

echo "echo" . " " . $str1 . " " . $str2 ;
echo "<br>";
print("print" . " " . $str1 . " " . $str2);
echo "<br>";
echo strlen($str1 . $str2 . 12);
echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str1);
echo "<br>";
echo "Before trim";
echo strlen($str1 . $str2);
echo "<br>";
$timmedstring = rtrim($str1);

echo "After trim";
echo strlen($timmedstring . $str2);
echo "<br>";
echo str_replace($str1,"Nimavat","$str1");

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strcmp("Hello","Hello");

echo "<br>";
echo ucwords("I am Student in Marwadi University");

echo "<br>";
echo ucfirst("I am Student in Marwadi University");

echo "<br>";
echo strstr($str1,"h");

echo "<br>";
echo stristr($str1,"y");
//stristr() i stand for case sensitive data
?>