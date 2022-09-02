<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doge Rental Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
    th { text-align: left; }
    table, th, td {
        border: 2px solid grey;
        border-collapse: collapse;
    }
    th, td {
        padding: 0.2em;
        }
    </style>
</head>
<body>
<h1>Database test page</h1>

<p>Showing contents of papers table:</p>
<table border="1">
<tr><th>Name</th><th>Dogs</th></tr>

<?php
$db_host   = '192.168.56.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';
$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM bookings");

while($row = $q->fetch()){
  echo "<tr><td>".$row["customer_name"]."</td><td>".$row["dogs"]."</td></tr>\n";
}

?>
</table>
</body>
</html>