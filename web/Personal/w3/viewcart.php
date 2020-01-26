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
            <h1>View Your Cart</h1>
        </header>
        <?php
        if(isset($_POST["minusShirt"])){
            $_SESSION["shirt"] -= 1;
            // $_SESSION["shirtCost"] = $_SESSION["shirt"] * 7;
        }

        if(isset($_POST["plusShirt"])){
            $_SESSION["shirt"] += 1;
            // $_SESSION["shirtCost"] = $_SESSION["shirt"] * 7;
        }

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
                <form method="post">
                    <div class="row">
                        <?php if($_SESSION["shirt"] > 0) { ?>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Shirt" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Slacks" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>                                    
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Sneakers" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Jacket" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Shorts" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Socks" style="width:100%">
                                    <div class="caption">
                                        <p>
                                            <button type="submit" name="minusShirt">-</button>
                                            <span><?=$_SESSION["shirt"]?></span>
                                            <button type="submit" name="plusShirt">+</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="p2"><a href="browse.php"><button>Keep Shopping</button></a></p>
                <p class="p1"><a href="checkout.php"><button>Proceed to Checkout</button></a></p>
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