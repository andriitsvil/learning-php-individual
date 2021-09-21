<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
  </head>
  <body>
    <form action="register.php" method="post">
      <p>Name:</p>
      <input type="text" name="name" required placeholder="Enter your name">
      <p>Email:</p>
      <input type="email" name="email" required placeholder="Enter your email">
      <p>Phone</p>
      <input type="tel" name="phone" required placeholder="Enter your phone number">
      <br>
      <br>
      <input type="Submit">
    </form>
    <hr>
    <?php 
      require('list.php');
    ?>
    <style>
      input {
        display: block;
        margin: 10px auto;
        height: 30px;
        padding: 5px;
      }
      p {
        text-align: center;
        font-weight: 500;
      }
    </style>
  </body>
</html>