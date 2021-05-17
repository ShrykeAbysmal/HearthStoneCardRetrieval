<? /* Main php file */ 
session_start() ;

require("./includes/class.php") ;

// Look for existing user name
if(isset($_SESSION["username"])){
    echo "<p>Logged in as </p>"
    echo "</p>".$_SESSION["username"]."</p>" ;
    echo "<p><a href='.?logout'>Log Out</a></p>" ;
    die();
} 

// user name not set already
if(!isset($_SESSION['username']) || !isset($_SESSION["myToken"])) {
    $_SESSION["myToken"] = newAccessToken("ebafdc636b4a4f688592ffa5d25d37f8","Nha334izrGfC389o5mcmFjAyp5qI2caM")
  }


?>
<html>
<head>
<title>Hearthstone Card Retrieval</title>
</head>
<body bgcolor="FFFFFF">
<h1>Welcome to Hearthstone Card Retrieval</h1>
<br>
<br>
Here is your information:<br>
<br><?=$_SESSION["myToken"];?>
</body>
</html>