<?php
$time = 16;
$message = "";

if (($time < 12) && ($time >= 1)){
    $message = ("Hi there! It is currently " . $time . ":00. Good morning!");
} elseif (($time >= 12) && ($time < 19)){
    $message = ("Hi there! It is currently " . $time . ":00. Good afternoon!");
} elseif (($time >= 19) && ($time <= 24)) {
    $message = ("Hi there! It is currently " . $time . ":00. Good night!");
};


echo '<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>TITLE</title>
    </head>
    <body>

        <header>
            <h1>Time Report</h1>
        </header>

        <main>
            <p>' . $message . '</p>
        </main>

    </body>
</html>';
?>