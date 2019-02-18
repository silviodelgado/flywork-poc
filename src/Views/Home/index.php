<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flywork - PoC</title>
</head>
<body>
    
    <h1>Home > Index</h1>
    
    <?php
    if (!empty($success)) {
        echo '<div>' . $success . '</div><hr>';
    }
    ?>

    <p>This is a view example</p>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/home">Home (alternative 2)</a></li>
        <li><a href="/home/index">Home (alternative 2)</a></li>
        <li><a href="/home/test">Home Test</a></li>
        <li><a href="/home/other-test">Other Home Test</a></li>
        <br>
        <li><a href="/home/invalid">Invalid (throws an Exception)</a></li>
        <br>
        <li><a href="/test/">Test (other controller)</a></li>
        <br>
        <li><a href="/session-test">Session Test</a></li>
        <li><a href="/session-test/set-session">Session Test - Set Session</a></li>
        <li><a href="/session-test/check">Session Test - Check Session</a></li>
        <li><a href="/session-test/remove">Session Test - Remove Session</a></li>
        <br>
        <li><a href="/users">Users</a></li>
        <li><a href="/users/add">Users - Add</a></li>
        <li><a href="/users/edit/1">Users - Edit 1</a></li>
        <br>
        <li><a href="/login">Login</a></li>
        <li><a href="/login/logout">Logout</a></li>
        <br>
        <li><a href="/language-test">Language</a></li>
        <li><a href="/language-test/english">Language - en-us</a></li>
        <li><a href="/language-test/portuguese">Language - pt-br</a></li>
        <br>
        <li><a href="/cache-test">Cache - Set</a></li>
        <li><a href="/cache-test/get">Cache - Get</a></li>
        <li><a href="/cache-test/remove">Cache - Remove</a></li>
    </ul>

    <hr>
    <em>&copy;2019 Silvio Delgado</em>

</body>
</html>