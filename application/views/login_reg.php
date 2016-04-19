<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LoginRegistration</title>
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
</head>
<body>
  <h1>Welcome to The Wall!</h1>
  <?php echo validation_errors(); ?>
  <p><?php
  if($this->session->flashdata('loggin_error')) {
      echo $this->session->flashdata('loggin_error');
  }
  ?></p>
    <form class="pure-form pure-form-aligned" action="register" method="post">
<fieldset>
  <legend><strong>Register</strong></legend>
      <div class="pure-control-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div class="pure-control-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>
        <div class="pure-control-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="pure-control-group">
            <label for="password">Password</label>
            <input class="pure-input-1-2" type="password" name="password" placeholder="Password">
        </div>
        <div class="pure-control-group">
            <label for="confirm_password">Confirm Password</label>
            <input class="pure-input-1-2" type="password" name="confirm_password" placeholder="Confirm Password">
        </div>
            <button type="submit" class="pure-button pure-button-primary" value="resister">Register</button>
          </fieldset>
</form>
<p><?php
if($this->session->flashdata('registration_error')) {
  echo $this->session->flashdata('registration_error');
}
?></p>
<form class="pure-form" action="login" method="post">
  <fieldset>
    <legend><strong>Login</strong></legend>
      <input type="email" name="email" placeholder="email">
      <input class="pure-input-1-2" type="password" name="password" placeholder="Password">
      <button type="submit" class="pure-button pure-button-primary" value="login">Login</button>
<!-- <button class="button-error pure-button"><a href="logout.php">Destroy session</a></button> -->
</fieldset>
</form>
</body>
</html>
