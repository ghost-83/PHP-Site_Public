<?php 
	require_once 'config.php'; 
	include 'db.php'; 
	include 'head.php'; 
?>

<body class='fon'>
	<?php include 'header.php'; ?>
	<main class="container mt-5">
		<div class="row pt-5">
			<div class="col-lg-8 text-dark">
				<div class="row">

					<?php  

						$news = get_news_categor((int) $_GET['id']);
						foreach ($news as $new): 
							$category = get_category_id((int) $new['category_id']);
						?>

								<div class="col-lg-5 alert alert-secondary ml-5 g_shadow">
								<a class='text-dark' href="list_news.php?id=<?php echo $new['id']; ?>"><h6><?php echo $new['title']; ?></h6></a>
									<span class="text-muted">Публикация: <?php echo date("Y-m-d H:i", strtotime($new['date'])); ?></span>
									<span class="badge badge-dark">Просмотров: <?php echo $new['views'] ?></span>
								</div>

						<?php endforeach; ?>
						
				</div>
				
				<hr>
					
			</div>
			<?php include 'aside.php' ?>
		</div>
        
	</main>
	
	<?php include 'footer.php' ?>
