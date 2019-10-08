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

<body class='fon'>
	<?php include 'header.php'; ?>
	<main class="container mt-5">
		<div class="row pt-5">
			<div class="col-lg-8 mb-3">
				<div class="text-dark">
					<h4 class="text-center alert alert-success g_shadow">Добавление статьи</h4>
					<form action="add_article.php" method="post">
						<label class="alert alert-success g_shadow" for="theme">Заголовок:</label>
						<input type="theme" name="theme" id="theme" class="form-control g_shadow mb-2">
						<label class="alert alert-success g_shadow" for="text">Текст:</label>
						<textarea name="text" id="text" class="form-control h-100 g_shadow mb-3" rows=20></textarea>
						<div class="input-group mb-3">
							<select class="custom-select g_shadow" id="inputGroupSelect01" name="categ">
								<option selected>Тег...</option>
								<?php $all_categories = get_category_all(); 
									foreach ($all_categories as $categories): ?>

										<option id="categ" value="<?php echo $categories['id']; ?>"><?php echo $categories['category']; ?></option>

								<?php endforeach; ?>
							</select>
						</div>

							<div class="form-group g_shadow alert-success">
								<input name="img" type="file" accept="image/*,image/jpeg" class="form-control-file " id="exampleFormControlFile1">
							</div>

						<button type="submit" id="mess_news" class="btn btn-success g_shadow mt-3 mb-2 g_shadow">Добавить</button>
					</form>
				</div>
			</div>
			<?php include 'aside.php' ?>
		</div>
        
	</main>
	
	<?php include 'footer.php' ?>
	
</body>
</html>