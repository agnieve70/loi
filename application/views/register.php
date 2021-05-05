<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('support/bootstrap.min.css')?>">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<br><br>
			<h1>Create Account</h1>
			<form action="<?=base_url('user/registerUser')?>" method="post">

				<div class="form-group">
					<label for="firstname">Firstname</label>
					<input type="text" name="firstname" id="firstname" class="form-control">
				</div>

				<div class="form-group">
					<label for="lastname">Lastname</label>
					<input type="text" name="lastname" id="lastname" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>

				<div class="form-group">
					<label for="user_type">Usertype</label>
					<select name="user_type" id="user_type" class="form-control">
						<option value="user">User</option>
						<option value="admin">Admin</option>
					</select>
				</div>

				<input class="btn btn-primary btn-block" type="submit" value="Register">
				Already a Member? <a href="<?=base_url("user/login")?>">Click Here</a>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
