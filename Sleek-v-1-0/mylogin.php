<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="mylogin.css">
</head>
<body>
    <form class="login" action="login.php" method="POST">
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <input  type="text" placeholder="username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button>Login</button>
      </form>
</body>
</html>