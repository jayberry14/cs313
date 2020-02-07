<?php
   require “dbConnect.php”;
   $db = get_db();
   $rides = $db->prepare(“SELECT * FROM rides”);
   $rides->execute();
   while ($row = $rides->fetch(PDO::FETCH_ASSOC))
   {
      $location = $row["location"];
      $destination = $row["destination"];
      $date = $row["date"];
      $time = $row["time"]
      echo "Your trip begins at $location<br>and is going to $destination.<br>";
      echo "Please be at your pickup location at $time on $date.<br>";
   }
?>