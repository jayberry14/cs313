<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Team Activity</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='PHP.css'>
    <link rel="stylesheet" type="text/css" href="PHP-Team-Activity-W02Thurs.css">
</head>
<body>
<?php
    echo "<h1>PHP Team Activity</h1>";

    create();
?>

</body>
</html>
<?php
    function create(){
        for ($x = 0; $x < 10; $x++) {
            if ($x%2 != 0) {
                echo "<div>This is div #$x</div>";
            }
                
            else if ($x%2 == 0) {
                echo "<div class=\"evenDiv\">This is div #$x</div>";
            }
        }
    }
?>