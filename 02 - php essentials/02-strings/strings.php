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

$greeting = "I'm learning PHP!";
echo "{$greeting}_!";

echo '<br />';

echo 'double quotes vs single quotes';

echo '<br />';

$name = 'Jason';
$subject = 'PHP';

echo "I'm {$name} and I'm learning {$subject}.";
echo '<br />';
echo 'I"m {$name} and I"m learning {$subject}.';

    echo "\n";

    echo "new line";

    echo '<br />';
    echo "\t-";
    echo "tabbed in";
    ?></pre>

    <!-- browser turn into line break -->
    <p>A first line of text. <?php echo '<br />'; ?>A second line of text</p>
    <!-- browser ignore this line break -->
    <p>A first line of text. <?php echo "\n"; ?>A second line of text</p>

    <?php
    $abc = 'abc'; ?>

    <!-- choose single quote if you do not need access variable -->
    <p><?php echo 'My last echo, $abc'; ?></p>
    <!-- choose double quote if you need access variable -->
    <p><?php echo "My last echo, ${abc}"; ?></p>

</body>

</html>