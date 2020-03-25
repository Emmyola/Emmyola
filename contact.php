
<html>
<head>

</head>
<title>MY PHP Tutorial Startng</title>
<body>


  <h2>HTML Forms</h2>

  <form action="submit.php"  method="POST">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" required><br><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" required><br><br>
    <label for="lname">Email:</label><br>
    <input type="text" id="lname" name="email" required><br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    <label for="female">Description:</label><br>
   <textarea name="message" rows="12" cols="40"></textarea><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
