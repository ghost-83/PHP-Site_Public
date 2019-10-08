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
						$page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;
						$on_page = (int) $configs['news_size'];
						$shift = ($page - 1) * $on_page;
						$news = get_news_all($shift, $on_page);
						foreach ($news as $new): 
							$category = get_category_id((int) $new['category_id']);
						?>

								<div class="alert alert-secondary g_shadow">
									<img class="rightimg" src="media/img/<?php echo $new['img']; ?>" width="300">
									<h4><?php echo $new['title']; ?></h4>
									<p><?php echo mb_substr($new['text'], 0, 150, 'utf-8').'...'; ?></p>
									<span class="text-muted">Публикация: <?php echo date("Y-m-d H:i", strtotime($new['date'])); ?></span>
									<p><b>Категория: <img src="media/icon/<?php echo $category['img']; ?>" alt="<?php echo $category['img']; ?>" width="30"> </b><mark><?php echo $category['category']; ?></mark></p>
									<span class="badge badge-dark">Просмотров: <?php echo $new['views'] ?></span>
								</div>
								<a href="list_news.php?id=<?php echo $new['id']; ?>" class="btn btn-secondary g_shadow mb-5">Читать далее</a>

						<?php endforeach; ?>
						
				</div>
				
				<hr>

				<?php
					$result = get_pages();
					$count = $result["all_news"];
					$pages = ceil($count / $on_page);
				?>
				<div class="row justify-content-center">
					<?php
					for ($i = 1; $i <= $pages; $i++) {
							// если текущая старница
							if($i == $page){
								echo "<small class='h5 text-muted ml-1'>[$i]</small> ";
							} else {
								echo "<a class='h5 text-dark ml-1' href='news.php?page=$i'>$i</a> ";
							}
						}
					?>
				</div>
					
			</div>
			<?php include 'aside.php' ?>
		</div>
        
	</main>
	
	<?php include 'footer.php' ?>
