<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
    

    <form action="login.php" method="post">
     	<h2>WELCOME TO LOGIN FORM </h2>

         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <label>User Name</label>
         <input type="text" name="uname" placeholder="Enter your user Name">

         <label>User Name</label>
         <input type="password" name="password" placeholder=" Enter your password">
         
         <button type="submit">Login</button>
    </form> 
    <button  href="#Home"> back to home page</button>
     	
</body>
</html>