<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="<?php echo $bundle_css ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo $bundle_js ?>"></script>
</head>
<body>
    <h1>Login</h1>

    <?php
    if (!empty($error)) {
        echo '<div>' . $error . '</div><hr>';
    }
    ?>

    User: <input type="text"><br>
    Password: <input type="text"><br>
    <button onclick="mainApp.login('<?php echo $returnUrl ?>')">Sign-in</button>
</body>
</html>