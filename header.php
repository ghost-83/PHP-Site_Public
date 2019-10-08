
<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top ">
        <a class="navbar-brand" href="index.php"><ya-tr-span data-index="0-0" data-value="Fixed navbar" data-type="trSpan"><?php echo $configs['title']; ?></ya-tr-span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключение навигации" wfd-id="14">
            <span class="navbar-toggler-icon" wfd-id="10"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" wfd-id="3">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="news.php">Проекты<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Связаться</a>
                </li>
                <?php if ($_COOKIE['log'] != ''): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="article.php">Добавить статью </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="password.php">Изменить пароль</a>
                    </li>              
                <?php endif; ?>
            </ul>
        </div>
    </nav>

</header>