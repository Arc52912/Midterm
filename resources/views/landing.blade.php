<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
</style>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IPT Midterm Project</a>
    </div>
    <ul class="container nav navbar-nav pull-right" style="width: 300px;">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Account</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <div align="center">
        <h2>Main Menu</h2>
        <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#news">Users</a></li>
        <li><a href="#contact">Account</a></li>
        </ul>
    </div>
</div>

</body>
</html>