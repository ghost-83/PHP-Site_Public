<?php 
	require_once 'config.php'; 
	include 'db.php'; 
	include 'head.php'; 
?>

<body class='fon'>
	<?php include 'header.php'; ?>
	<main class="container mt-5">
		<div class="row pt-5">
			<div class="col-lg-8">
				<div class="col-lg-10 bg-light rounded g_shadow mb-3">
					<div class="text-dark">
						<h4 class="text-center">Обратная связь</h4>
						<form action="reg.php" method="post">
							<label for="username">Имя:</label>
							<input type="text" name="username" id="username" class="form-control">
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" class="form-control">
							<label for="theme">Тема:</label>
							<input type="theme" name="theme" id="theme" class="form-control">
							<label for="mess">Сообщение:</label>
							<textarea name="mess" id="mess" class="form-control h-100" rows=10></textarea>
							<div class="alert alert-danger mt-2" id="errorBlock"></div>
							<button type="button" id="mess_send" class="btn btn-success mt-3 mb-2">Отправить</button>
						</form>
					</div>
				</div>
			</div>
			<?php include 'aside.php' ?>
		</div>
        
	</main>
	
	<?php include 'footer.php' ?>
	
	<script>
	
		$('#mess_send').click(function () {
			var name = $('#username').val();
			var email = $('#email').val();
			var theme = $('#theme').val();
			var mess = $('#mess').val();

			$.ajax({
				url: 'mail.php',
				type: 'POST',
				cache: 'false',
				data: {'username' : name, 'email' : email, 'theme' : theme, 'mess' : mess},
				dataType: 'html',
				success: function(data) {
					if(data == 'Готово') {
						$('#mass_send').text('Сообщение отправлетто');
						$('#errorBlock').hider(data);
						$('#username').vl('');
						$('#email').vl('');
						$('#theme').vl('');
						$('#mess').vl('');
					} else {
						$('#errorBlock').show();
						$('#errorBlock').text(data);
					}
				}
			})
		})

	</script>
</body>
</html>