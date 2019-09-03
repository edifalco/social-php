<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social You - PHP Excersice</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>Social You - PHP Excersice</h1>
        <p>To list all movies GET request to /movies or click <a href="/movies">here</a></p>

        <p>To Add a movie GET request to /addmovie/{title}/{releaseYear} or click <a href="/addmovie/Jaws/1975">here</a> to add the movie Jaws.</p>

        <p>Click the above link twice to see the error message displayed when a movie wants to be added twice to the DB.</p>

        <p>To Remove a movie GET request to /removemovie/{title} or click <a href="/removemovie/Jaws">here</a> to remove the movie Jaws.</p>

        <p>Click the above link twice to see the error message displayed when a movie wants to be deleted, but it is not in the DB.</p>
    </body>
</html>
