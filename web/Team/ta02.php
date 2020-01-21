<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="ta02POST.php" method="post">
            <div>
                <label for="name">Name</label>
                <input name="nameForPHP" type="text" class="form-control" placeholder="Enter name">
                <label for="email">Email</label>
                <input name="emailForPHP" type="text" class="form-control" placeholder="Enter email">
            </div>
            <br>
            <div>
                <input type="radio" name="majorForPHP" value="CS"> Computer Science<br>
                <input type="radio" name="majorForPHP" value="WDD"> Web Design and Development<br>
                <input type="radio" name="majorForPHP" value="CIT"> Computer Information Technology<br>
                <input type="radio" name="majorForPHP" value="CE"> Computer Engineering
            </div>
            <br>
            <div>
                <label for="comments">Comments:</label>
                <br>
                <textarea name="comments" rows="4" cols="50" placeholder="Comments Here..."></textarea>
            </div>
            <div>
                <label for="visited countries">Select the countries you have visited before:</label>
                    <input type="checkbox" name="visitedCountries[]" value="North America"> North America <br>
                    <input type="checkbox" name="visitedCountries[]" value="South America"> South America <br>
                    <input type="checkbox" name="visitedCountries[]" value="Europe"> Europe <br>
                    <input type="checkbox" name="visitedCountries[]" value="Asia"> Asia <br>
                    <input type="checkbox" name="visitedCountries[]" value="Australia"> Australia <br>
                    <input type="checkbox" name="visitedCountries[]" value="Africa"> Africa <br>
                    <input type="checkbox" name="visitedCountries[]" value="Antartica"> Antartica <br>                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>