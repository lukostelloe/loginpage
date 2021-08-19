<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGN UP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <form action="signup-check.php" method="post">
    <h2>SIGN UP</h2>
    <?php if (isset($_GET["error"])) { ?>
      <p class="error"><?php echo $_GET["error"]; ?></p>
    <?php } ?>

    <?php if (isset($_GET["success"])) { ?>
      <p class="success"><?php echo $_GET["success"]; ?></p>
    <?php } ?>

    <label>Name</label>
    <?php if (isset($_GET["name"])) { ?>
      <input type="text" 
              name="name" 
              placeholder="Name"
              value="<?php echo $_GET["name"]; ?>"><br>
    <?php } else{ ?>
      <input type="text" 
              name="name" 
              placeholder="Name"><br>
      <?php }?>

      <label>User Name</label>
    <?php if (isset($_GET["uname"])) { ?>
      <input type="text" 
              name="uname" 
              placeholder="User Name"
              value="<?php echo $_GET["uname"]; ?>"><br>
    <?php } else{ ?>
      <input type="text" 
              name="uname" 
              placeholder="User Name"><br>
      <?php }?>


    
   

    <label>Password</label>
    <input id="pass"
           type="password" 
           name="password" 
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
           placeholder="Password"><br>
           <small>password must have...</small><br>
           <small>a lowercase and uppercase letter</small><br>
           <small>a number</small><br>
           <small>a special character</small><br>
           <small>at least 8 characters</small><br>
           <br>
           <br>

    <label>Re Password</label>
    <input type="password" 
           name="re_password"
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
           placeholder="Re_Password"><br>

    <button type="submit">Sign Up</button>
    <a href="index.php" class="ca">Already have an account?</a>
  </form>
</body>
</html>