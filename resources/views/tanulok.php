<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tanulók</h1>
    <ul>
    <?php
        // var_dump($tanulok);

        foreach ($tanulok as $key => $value) {
            echo '<li>' . $key . ':' . $value . '</li>';
        }
    ?>
    </ul>
</body>
</html>