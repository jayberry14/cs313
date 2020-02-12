<?php
	require("dbConnect.php");
    $db = get_db();
    
    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topic = $_POST['topic'];
    var_dump($topic);
    
    try 
    {
        $query = 'INSERT INTO scriptures (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)';	
        $statement = $db->prepare($query);
        $statement->bindValue(':book', $book);
	    $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':content', $content);
        $statement->execute();
    }

    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: addScripture.php");
    die();
?>