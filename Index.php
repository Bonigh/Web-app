<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/db.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
   <body>
    
    <div class = "container mt-3">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="Home.php" class="nav-link px-2">Home</a></li>
          <li><a href="Album.php" class="nav-link px-2">Album</a></li>
          <li><a href="Users.php" class="nav-link px-2">Users</a></li>
          <li><a href="Photos.php" class="nav-link px-2">Photos</a></li>
        </ul>

    </div>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
     
        <p><a href="signout.php">Log out</a></p>
        
    <?php else: ?>
        <div class = "container mt-3" > 
         <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></s>
         
         
        
        
        </div>
    <?php endif; ?>
  
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    