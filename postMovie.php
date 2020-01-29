<?php
    session_start();

    $movieName = $_POST['newMovie'];

    array_push($_SESSION['movieList'], $movieName);

    header('Location: /movie-list');
?>