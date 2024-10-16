
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
    <script src="js/alb.js"defer></script>
    <style>
        .album {
            margin: 10px;
            display: inline-block;
            text-align: center;
        }
        .album p {
            margin: 5px 0;
            }
    

    </style>

</head>
<body>

    <header>
        <h1>Welcome to the Album Area</h1>
    </header>
    <form action="" method="get">
    <fieldset>
        <legend>Search Albums/Photos</legend>
        <input type="search" placeholder="Search for album" id="searchInput">
        <button type="submit" id="search">Search</button>
        <div id="albumContainer"></div>
    </fieldset>
</form>
    <main>
        <p>Explore various albums and share your favorite moments.</p>
        <a href="index.php">Home</a>
    </main>
    <footer>
        <p>&copy; Web-App</p>
    </footer>
</body>
</html>

