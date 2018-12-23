<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "templates/head.php"; ?>
</head>
<body>
	<div class="page_wrap">
		<!-- <?php require_once "templates/preloader.php"; ?> -->
		<header>
			<div class="custom_header_wrap registraion_wrap">
				<?php require_once "templates/header.php"; ?>
			</div>
		</header>
		<main>
			<button class="back_to_main"><a href="index.php">Назад</a></button>
			<div class="container">
				<div class="row main_content">
					<div class="form_wrap">
					<form action="reg.php" method="POST">
					<fieldset>
					<legend>Registration</legend>
					<table>
						<tr>
							<td><label for="name">Name:</label></td>
							<td><input type="text" id="name" required></td>
						</tr>
						<tr>
							<td><label for="password">Password:</label></td>
							<td><input type="password" id="password" minlength="8" required></td>
						</tr>
						<tr>
							<td><label for="confirm_password">Confirm password:</label></td>
							<td><input type="password" id="confirm_password" minlength="8" required></td>
						</tr>
						<tr>
							<td><label for="age">Age:</label></td>
							<td><input type="number" id="age" required></td>
						</tr>
						<tr>
							<td><label for="male">Gender:</label></td>
							<td>
								<input type="radio" class="gender" name="gender" id="male" value="male" required>
								<label for="male">male</label>
								<input type="radio" class="gender" name="gender" id="female" value="female" required>
								<label for="female">female</label>
							</td>
						</tr>
						<tr>
							<td><label for="skills">Skills(the last one is main):</label></td>
							<td><input type="text" id="skills" required></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="submit" value="Submit">
							</td>
						</tr>
					</table>
					</fieldset>
					</form>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script type="text/javascript" src='src/scripts/registration.js'></script>
</body>
</html>