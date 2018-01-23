<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php if (isset($greeting)) { ?>
        <h1><?= $greeting ?></h1>
    <?php } else { ?>
        <h1>Hello world!</h1>
    <?php } ?>
</body>
</html>
