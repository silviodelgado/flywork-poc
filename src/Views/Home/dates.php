<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DateTime to DB Format Tests</title>
</head>
<body>
    <div>
        <?php
            echo 'Converted: ' . $dt;
        ?>
    </div>
    <hr>
    <ul>
        <li><a href="/home/date?dt=06/08/1976">06/08/1976</a></li>
        <li><a href="/home/date?dt=06/08/1976 20:40">06/08/1976 20:40</a></li>
        <li><a href="/home/date?dt=06/08/1976 20:40:10">06/08/1976 20:40:10</a></li>
        <li><a href="/home/date?dt=1976-08-06">1976-08-06</a></li>
        <li><a href="/home/date?dt=1976-08-06 20:40">1976-08-06 20:40</a></li>
        <li><a href="/home/date?dt=1976-08-06 20:40:10">1976-08-06 20:40:10</a></li>
        <li><a href="/home/date?dt=08/06/1976 08:40 PM">08/06/1976 08:40 PM</a></li>
        <li><a href="/home/date?dt=08/06/1976 08:40:10 PM">08/06/1976 08:40:10 PM</a></li>
        <br>
        <li><a href="/">Return to Home</a></li>
    </ul>
</body>
</html>