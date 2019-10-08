<aside class="col-lg-4">
    <div class="bg-secondary text-white p-3 mb-3 g_shadow rounded">
        <h3><b>Интересные статьи</b></h3>

        <ul>

            <?php $all_links = get_links_all(); 
            foreach ($all_links as $links): ?>

            <li><a class='text-white' href="<?php echo $links['links']; ?>"><?php echo $links['title']; ?></a></li>

            <?php endforeach; ?>
        </ul>

    </div>
    <div class="p-3 mb-3">
        <img class='g_shadow' src="media/img/desktopwallpapers.jpg" width="200">
    </div>
    <div class="bg-secondary text-white p-3 mb-3 g_shadow rounded">
        <h3><b>Категории</b></h3>
        <ul>

            <?php $all_categories = get_category_all(); 
            foreach ($all_categories as $categories): ?>

            <li><a class='text-white'  href="categories.php?id=<?php echo $categories['id']; ?>"><img src="media/icon/<?php echo $categories['img']; ?>" alt="<?php echo $categories['img']; ?>" width="20"> <?php echo $categories['category']; ?></a></li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="bg-dark text-white rounded g_shadow p-3 mb-3">
        <p>@ СПРАВОЧНИК @<br>   © <i>Сайт не является обучающем. На сайте любительские проекты, которые могут заинтересовать читателя :) </i></p>
    </div>
</aside>
