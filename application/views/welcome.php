<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Product</title>
    <style>
      form {
        width: 30%;
        margin: 50px;
      }
    </style>
  </head>
  <body>
    <a href="logout">Log Off</a>
    <h3>Welcome <?= $info['first_name'];?> !<h3>
    <form>
      <fieldset>
        <legend>User Information</legend>
        <p>First Name: <?= $info['first_name']; ?></p>
        <p>Last Name: <?= $info['last_name']; ?></p>
        <p>Email address: <?= $info['email']; ?></p>
      </fieldset>
    </form>
  </body>
</html>
