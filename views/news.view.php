<?php
    $title = 'News -'.$item['title'];
    require(TEMPLATES.'header.template.php');
?>

    <!-- ICI DU html -->
    <div>
    <?php foreach ($news as $item) { ?>
        <div>
            <h1><?=$item['title'] ?></h1>
            <p><?=$item['content'] ?></p>
            <small>Created at <?=$item['created_at'] ?> by <?=$item['author'] ?> </small>
        </div>
        <hr>
    <?php } ?>
    </div>
<?php
    require(TEMPLATES.'footer.template.php');
