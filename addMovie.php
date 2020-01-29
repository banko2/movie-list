<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Favorite Movies</h1>

        <h3>Add your favorite movie</h3>
        <form action="postMovie.php" method="post"> 
            <label for="new-movie-title">Movie Title</label>
            <input type="text" name="newMovie" id="new-movie-title" placeholder="The Godfather">
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html>