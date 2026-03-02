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
       
var_dump(true); // bool(true)
var_dump(false); // bool(false)

$value = true;
var_dump($value);// bool(true) 

echo "----\n";

$meaning = 42;
var_dump($meaning > 13); // bool(true)
// var_dump(42 > 13);
// var_dump((40 + 2) > 13);
var_dump($meaning < 13); // bool(false)
var_dump(((40 + 2)) >= 13); // bool(true)
var_dump($meaning <= 13); // bool(false)

var_dump(13 <= 13); // bool(true)
var_dump(13 < 13); // bool(false)

echo "----\n";

$name = 'Jason'; 
var_dump($name === 'Jason'); // bool(true)
var_dump($name !== 'Jason'); // bool(false)
$age = 30;
var_dump($age === 30); // bool(true)
var_dump($age === '30'); // bool(false), type check

var_dump($age == '30'); // bool(true), value check isntead of type
var_dump($age != '30'); // bool(false)

    ?></pre>
</body>

</html>