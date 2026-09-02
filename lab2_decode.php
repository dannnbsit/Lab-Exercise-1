
<?php

$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// JSON to PHP Object
$object = json_decode($json);

// JSON to PHP Associative Array
$array = json_decode($json, true);

echo "Object Name: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br>";

echo "Array Name: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"] . "<br>";

?>

