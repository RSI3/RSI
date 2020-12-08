<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>profile</title>
    <link href="css1.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.png" />

</head>
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<body>
    <div class="nav-area">
        <input type="checkbox" id="box">
        <label for="box" class="btn-area"><i class="fa fa-bars"></i></label>
        <label class="logo"><img src="logo.PNG"  width="35" height="35" alt=""></label>
        <ul>
      <li><a href="aboutus.php">About</a></li>
      <li><a href="#">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="contact.html">Contact</a></li>
      </ul>
      </div>

      <div class="welcome-text">
        
        <h1>
           <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
             <a href='profile.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.html");
                   }
                }
                            ?>

    </div>

    <div class="footer">
        <small>Copyright © RSI31.com <a href="contact.html" style="color: darkorange;">contact us here</a></small>
      </div>       
</body>
</html>

