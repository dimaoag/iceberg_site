<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p><b>Code error:</b> <?= $errorNumber ?></p>
    <p><b>Text error:</b> <?= $errorMessage ?></p>
    <p><b>File:</b> <?= $errorFile ?></p>
    <p><b>Line:</b> <?= $errorLine ?></p>
</body>
</html>