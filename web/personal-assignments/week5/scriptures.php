<?php 
// $db = new pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=");
$user = 'postgres';
$password = '';
$db = new PDO('pgsql:host=localhost;dbname=postgres', $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $result = pg_query($db, "SELECT * FROM scriptures");
// $row =pg_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scripture Resources</title>
</head>
<body>
    <h1>Scripture Resources</h1>
    <div>
        <!-- <h3>
            <?php
                while ($row = pg_fetch_row($result)) {
                echo "$row[1] $row[2]:$row[3]<br> <i>$row[4]</i><br><br>";
                }
            ?>
        </h3> -->
        <?php foreach ($db->query('
        SELECT * FROM scriptures') as $row) {
            print "$row[1] $row[2]:$row[3]<br> <i>$row[4]</i><br><br>";
        }
        ?>
    </div>
</body>
</html>