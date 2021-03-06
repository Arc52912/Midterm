<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users Page</title>
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
      <li><a href="{{url('/')}}">Home</a></li>
      <li class="active"><a href="{{url('/users')}}">Users</a></li>
      <li><a href="{{url('/accounts')}}">Account</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <h3>Users</h3>
    <table class="table table-stripped">
        <tr>
            <td>User ID</td>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Address</td>
        </tr>
        @foreach ($users as $u)
        <tr>
        <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->address}}</td>
        </tr>
        @endforeach
        </table>
</div>

</body>