<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <link rel="icon" type="image/ico" href="https://cdn3.iconfinder.com/data/icons/round-icons-vol-2/512/j-512.png">
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
    <h1>The Homepage of Josh Mayberry</h1>
    <div class="container-fluid bg-1 text-center">
        <img src="self-portrait.jpg" alt="Me" class="img-circle img-1">
        <div>
            <p>
                I am a dynamic figure often seen crushing noobs or playing chess.
                I once conquered an entire classroom of students, becoming their Project Manager
                by using only my laptop and sheer unstoppable willpower. 
                I spend my off-time defending your credit cards to the death and whipping the
                Wi-Fi back into shape in the on-campus IT Security Office.
                I don't get stressed.
                On weekends I pamper myself with the sounds of pain exiting my body as the bench
                press ascends and descends in my arms
                Jack Wilder, from the hit blockbuster "Now You See Me" wishes he could throw
                playing cards as well as I do.
            </p>
        </div>
    </div>
</body>
</html>

