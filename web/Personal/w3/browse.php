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
                                <a href="#" target="_blank">
                                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dstld.com%2Fproducts%2Fmens-white-crew-neck-tee&psig=AOvVaw2NSQMl36kekhDvyXpOurBq&ust=1580092295986000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLCcytacoOcCFQAAAAAdAAAAABAG" alt="Shirt" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="shirt">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.aliexpress.com%2Fi%2F33004747621.html&psig=AOvVaw0bVy0spaA9ZOkP3MtMtSaO&ust=1580092334741000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCODr8facoOcCFQAAAAAdAAAAABAF" alt="Slacks" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="slacks">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.buyma.us%2Fitems%2F087839ea-2e34-46ce-a346-10829c173fdf%2F&psig=AOvVaw2lv0a1jNC-GTjiPRenImHC&ust=1580092802617000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPDv6sOeoOcCFQAAAAAdAAAAABAK" alt="Sneakers" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="sneakers">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Jacket" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="jacket">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Shorts" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="shorts">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Socks" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="socks">Add to Cart</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
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