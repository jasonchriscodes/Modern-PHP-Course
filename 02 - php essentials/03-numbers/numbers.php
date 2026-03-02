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
        $meaning = 42;
        echo ($meaning * 2) . "\n";
        echo ($meaning / 2) . "\n";
        echo ($meaning + 2) . "\n";
        echo ($meaning - 2) . "\n";

        echo '5' + '6'; // result 11
        echo "\n";
        // echo '5' + 'a6'; // result fatal error
        // echo "\n";
        // echo '5' + '6a'; // result 11, with warning
        // echo "\n";
        echo round(3.33, 1); // result 3.3
        echo "\n";

        $meaning *= 2;
        $meaning /= 2;
        $meaning += 2;
        $meaning -= 2;
        echo $meaning;
    ?></pre>
</body>

</html>