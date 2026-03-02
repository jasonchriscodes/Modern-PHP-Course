<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <pre><?php

var_dump(!true); // bool(false)
var_dump(!false); // bool(true)

$number = 5;
var_dump($number !== 5); // bool(false)
var_dump(!($number === 5)); // bool(false)

echo "-----\n";
var_dump(true && true); // bool(true)
var_dump(false && true); // bool(false)
var_dump(true && false); // bool(false)
var_dump(false && false); // bool(false)
/*
$views = 50000;
if ($views >= 10000 && $views <= 100000) {
    echo 'This is a medium performing video'; 
}
*/
echo "-----\n";
var_dump(true || true); // bool(true) || called double pipe
var_dump(false || true); // bool(true)
var_dump(true || false); // bool(true)
var_dump(false || false); // bool(false)

echo "-----\n";
var_dump(true xor true); // bool(false), either or
var_dump(false xor true); // bool(true)
var_dump(true xor false); // bool(true);
var_dump(false xor false); // bool(false)



    ?></pre>
</body>

</html>