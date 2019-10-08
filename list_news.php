<?php 
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
		<div class="row pt-5">
			<div class="col-md-8 bg-light rounded g_shadow mb-3">
				<div class="text-dark">
					<h1 class="text-center"><?php echo $new['title']; ?></h1>
					<?php echo str_replace("\n", '<br>', $new['text']); ?>
					<br>
					<hr>
					<span class="text-muted">Публикация: <?php echo date("Y-m-d H:i", strtotime($new['date'])); ?></span>
					<span class="badge badge-dark">Просмотров: <?php echo $new['views'] ?></span>
					<p><b>Категория: </b><mark><?php echo $category['category']; ?></mark></p>
					<a class="btn btn-secondary text-white mt-2 mb-2" onclick="history.back();">Вернуться назад</a>
				</div>
			</div>
			<?php include 'aside.php' ?>
		</div>
	</main>
	
	<?php include 'footer.php' ?>

