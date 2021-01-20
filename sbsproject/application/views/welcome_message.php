<!DOCTYPE html> 
<html>
<head>
	<title>login</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/bootstrap.min.css")?>">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assests/css/login.css") ?>">
<script src="<?php echo base_url('assests/script/bootstrap.min.js') ?>"></script>

</head>
<body>
<div class="container-fluid">

<!-- this is the login section  -->
<section>
<div class="loginform">

<!--  login form	 -->
<form method="post"action="<?php echo base_url();?>index.php/manage/logincheck">
  <div class="form-group">
    <label for="exampleInputEmail1">      </label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">      </label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Password"required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

<!-- 	login form end -->

</div>
</section>
<!-- login section end -->

	
</div>
</div>
</body>
</html>