<!DOCTYPE html>
<html class="no-js">
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
    <link rel='stylesheet' type='text/css' media='screen' href='layout.css'>
    <script src=checkout.js></script>
    <script>
			// prevents refresh from submitting form and clears out unneeded variables
            // Thank you Brother Birch for this section of JS!
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
    </head>
    <body>
    <?php session_start(); ?>
        <header>
            <h1>Browse to your heart's content!</h1>
        </header>
        <section>
            <nav>
                <ul>
                    <li>Choice 1</li>
                    <li>Choice 2</li>
                    <li>Choice 3</li>
                </ul>
            </nav>
            <article>
                <p class="p2"><a href="viewcart.php"><button onclick="addItems()">View your cart</button></a></p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Nature" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Fjords" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Nature" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                            <img src="#" alt="Fjords" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="p1"><a href="checkout.php"><button>Checkout</button></a></p>
            </article>
        </section>
        <footer>
        <?php
            // set default timezone
            echo "<br>";
            date_default_timezone_set('America/Boise'); // MST

            $info = getdate();
            $date = $info['mday'];
            $month = $info['mon'];
            $year = $info['year'];
            $hour = $info['hours'];
            $min = $info['minutes'];
            $sec = $info['seconds'];

            $current_date = "$date/$month/$year";
            $current_time = "$hour:$min:$sec";
            echo "$current_date";
            echo "<br>";
            echo "$current_time";
        ?>
        </footer>
    </body>
</html>