<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		/* Custom theme colors */
		:root {
			--bs-primary: #6a0dad; /* Purple accent color */
			--bs-body-bg: #f7f3f9; /* Light purple background */
			--bs-body-color: #4b0082; /* Darker purple text */
			--bs-border-color: #b19cd9; /* Border with a lighter purple shade */
		}

		body {
			font-family: "Arial", sans-serif;
			background-color: var(--bs-body-bg);
			color: var(--bs-body-color);
		}

		h1 {
			color: var(--bs-primary);
		}

		.form-control {
			font-size: 1.2em;
			width: 100%;
			max-width: 300px; /* Limits input field width */
			margin-bottom: 15px;
			border: 1px solid var(--bs-border-color);
		}

		/* Button customization */
		.btn-primary {
			background-color: var(--bs-primary);
			border-color: var(--bs-primary);
		}

		.btn-primary:hover {
			background-color: #7a1faf;
			border-color: #7a1faf;
		}
	</style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
	<div class="text-center">
		<?php if (isset($_SESSION['message'])) { ?>
			<h2 style="color: blue;"><?php echo $_SESSION['message']; ?></h1>
		<?php } unset($_SESSION['message']); ?>
	</div>
	<div class="text-center">
		<h1>Login Now!</h1>
		
		<form action="core/handleForms.php" method="POST" class="mt-4">
			<div>
				<label for="username" class="form-label">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div>
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" name="loginUserBtn" class="btn btn-primary mt-3">Login</button>
		</form>
		
		<p class="mt-3">Don't have an account? You may register <a href="register.php">here</a></p>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>