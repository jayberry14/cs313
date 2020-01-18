<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--JQERRY--><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--?--><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--BOOTSTRAP--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <header class="headerBox">
    <?php session_start(); ?>
        <h1>The Homepage for Joshua Mayberry</h1>
    </header>
    <div class="container-fluid">
        <div class="row buttonBox btn-group" id="navBar">
            <div class="col buttonBox button">
                <button onclick="navigate('assignmentsBut')" class=" row btn btn-primary" type="button" id="assignmentsBut">Assignments</button>
                <button onclick="navigate('aboutBut')" class=" row btn btn-primary" type="button" id="aboutBut">About Me</button>
            </div>
        </div>
        <img src="self-portrait.jpg" alt="Me">
    </div>
</body>
</html>

