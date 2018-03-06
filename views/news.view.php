<?php
    $title = 'News';
    # Header
    require(TEMPLATES.'header.template.php');
?>

    <div class="uk-container"><br>
    <?php foreach ($news as $item) { ?>
        <div>
            <h1><a href="<?=BASE_URL.'news.php?id='.$item['id'] ?>"><?=$item['title'] ?></a></h1>
            <p><?=$item['content'] ?></p>
            <small>Created at <?=$item['created_at'] ?> by <?=$item['author'] ?> </small>
        </div>
        <hr>
    <?php } ?>
    </div>

<?php
    # Footer
    require(TEMPLATES.'footer.template.php');
