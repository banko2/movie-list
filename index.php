<?php
    session_start();

    if (!isset($_SESSION['movieList'])) {
        $_SESSION['movieList'] = array();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Favorite Movies</h1>

        <a class="button" href="addMovie.php">Add movie</a>

        <ul class="movie-list">
            <?php
                foreach ($_SESSION['movieList'] as $movieName) {
                    echo "<li>$movieName</li>";
                }
            ?>
        </ul>

    </div>
</body>
</html>