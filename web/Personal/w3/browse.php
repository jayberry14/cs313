<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
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
    </head>
    <body>
        <header>
            <h1>Browse to your heart's content!</h1>
        </header>
        <?php 
        $_SESSION["shirt"];
        $_SESSION["slacks"];
        $_SESSION["sneakers"];
        $_SESSION["jacket"];
        $_SESSION["shorts"];
        $_SESSION["socks"];
        ?>
        <?php
        if(isset($_POST["shirt"]))
            $_SESSION["shirt"] += 1;
        if(isset($_POST["slacks"]))
            $_SESSION["slacks"] += 1;
        if(isset($_POST["sneakers"]))
            $_SESSION["sneakers"] += 1;
        if(isset($_POST["jacket"]))
            $_SESSION["jacket"] += 1;
        if(isset($_POST["shorts"]))
            $_SESSION["shorts"] += 1;
        if(isset($_POST["socks"]))
            $_SESSION["socks"] += 1;
        ?>
        <section>
            <nav>
            <h2><u><strong>Quick Cart</strong></u></h2>
                <ul>
                    <?php if($_SESSION["shirt"] > 0) { ?>
                        <li># of Shirts: <?=$_SESSION["shirt"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["slacks"] > 0) { ?>
                        <li># of Slacks: <?=$_SESSION["slacks"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["sneakers"] > 0) { ?>
                        <li># of Sneakers: <?=$_SESSION["sneakers"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["jacket"] > 0) { ?>
                        <li># of Jackets: <?=$_SESSION["jacket"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["shorts"] > 0) { ?>
                        <li># of Shorts: <?=$_SESSION["shorts"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["socks"] > 0) { ?>
                        <li># of Socks: <?=$_SESSION["socks"]?></li>
                    <?php } ?>
                </ul>
            </nav>
            <article>
                <p class="p2"><a href="viewcart.php"><button>View your cart</button></a></p>
                <form method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/whiteT.png" alt="Shirt" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="shirt">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/slacks.jpg" alt="Slacks" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="slacks">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/sneakers.jpg" alt="Sneakers" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="sneakers">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/jacket.jpg" alt="Jacket" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="jacket">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/shorts.jpg" alt="Shorts" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="shorts">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="../../Files/socks.jpg" alt="Socks" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="socks">Add to Cart</button></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php if($_SESSION["shirt"] > 0 ||
                         $_SESSION["slacks"] > 0 ||
                         $_SESSION["sneakers"] > 0 ||
                         $_SESSION["jacket"] > 0 ||
                         $_SESSION["shorts"] > 0 ||
                         $_SESSION["socks"] > 0) { ?>
                <div class="col-md-1 p3"><a href="checkout.php"><button>Checkout</button></a></div>
                <?php } ?>
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