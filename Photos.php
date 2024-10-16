
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
    <!--<script src="js/alb.js" defer></script>-->
</head>
<body>
    
    <header>
        <h1>Welcome to the Photos Area</h1>
    </header>
    <input type="text" id="searchInput" placeholder="Search...">
     <ul id="itemList"></ul>
     <button onclick="request()">Request Data</button>
    <main>
        <p>Explore various Photos and share your favorite moments.</p>
        <a href="index.php">Home</a>
    </main>
    <script>
        function request(){
            fetch('https://jsonplaceholder.typicode.com/photos')
           .then(response => response.json())
           .then(json => console.log(json))
        }
    </script>
    
    <footer>
        <p>&copy; Web-App</p>
    </footer>
</body>
</html>

