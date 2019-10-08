<?php 
	
	if ($_COOKIE['log'] == '') {
		header('Location: /index.php');
		exit();
	}
	require_once 'config.php';
	include 'db.php'; 
	include 'head.php';
	views_update((int) $_GET['id']);
	$new = get_new_id((int) $_GET['id']);
	$category = get_category_id((int) $new['category_id']);
?>

<body>
	<?php include 'header.php'; ?>
	<main class="container mt-5">
		<div class="row pt-5 justify-content-center align-items-center">
			<div class="col-md-5 bg-light rounded g_shadow mb-3">
				<div class="text-dark">
					<h4 class="text-center">Изменить пароль</h4>
					<form action="pass.php" method="post">
						<label for="password">Новый пароль:</label>
						<input type="password" name="password" id="password" class="form-control">
						<button type="submit" class="btn btn-success mt-3 mb-2">Изменить</button>
					</form>
				</div>
			</div>
		</div>
	</main>
	
	<?php include 'footer.php' ?>