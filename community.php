<!DOCTYPE html>
<html>
<head>
<!-- Head tag -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  <!-- body start -->
  
<!-- Adding navbar from menu.php -->
<?php include 'menu.php'; ?>

<h1>Whats on your mind?</h1>
<h3>Post your feelings in the community </h3>

<form action="/action_page.php" id="usrform">
  Name: <input type="text" name="usrname">
  
</form>
<br>
<textarea rows="4" cols="50" name="comment" form="usrform">

Enter text here...</textarea><br>
<a href="#" class="btn btn-success"> POST </a>

<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?> 

</body>
</html>