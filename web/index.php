<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
</head>
<body>
    <?php include 'header.php';?>
    <?php session_start(); ?>
    <div class="container-fluid bg-1 text-center">
        <img src="self-portrait.jpg" alt="Me" class="img-circle img-1">
    </div>
</body>
</html>

