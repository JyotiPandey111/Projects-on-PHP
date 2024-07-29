<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 { background-color: pink;}
        .body-2 { background-color: greenyellow;}
        .body-3 { background-color: yellow;}
        .body-4 { background-color: blueviolet;}
        .body-5 { background-color: yellowgreen;}
        .body-6 { background-color: aqua;}
    </style>
</head>

<body class = "body-<?php echo rand(1,6) ?>">
    <?php echo '<h1>Hello from Jyoti!</h1>'; ?>
    <?php echo 'Using style, body class and rand function'; ?>
</body>
</html>