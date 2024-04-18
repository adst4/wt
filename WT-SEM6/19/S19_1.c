//S19.1
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
  </head>
  <body>
    <form name="loginForm" onsubmit="return validateForm()">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>
 
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>
 
      <input type="submit" value="Submit">
    </form>
 
    <script>
      function validateForm() {
        // Get the values of the username and password input fields
        var username = document.forms["loginForm"]["username"].value;
        var password = document.forms["loginForm"]["password"].value;
 
        // Validate the username and password
        if (username == null || username == "") {
          alert("Please enter a username.");
          return false;
        } else if (password == null || password == "") {
          alert("Please enter a password.");
          return false;
        } else {
          return true;
        }
      }
    </script>
  </body>
</html>