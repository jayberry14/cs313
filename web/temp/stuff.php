<?php
    require "dbConnect.php";
    $db = get_db();

    $family_members = $db->prepare("SELECT * FROM w5_family_members");
    $family_members->execute();

    while($frow = $family_members->fetch(PDO::FETCH_ASSOC))
    {
        $first_name = $frow["first_name"];
        $last_name = $frow["last_name"];
        $relationship_id = $frow["relationship_id"];
    }

    echo "<p>$first_name $last_name is my $relationship_id</p>";
?>