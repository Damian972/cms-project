<?php
    $title = 'News';
    # Header
    require(TEMPLATES.'header.template.php');
?>
    <br>
    <div class="uk-container">
        <div class="">
            <h2 id="title"><?=$resp['name']?></h2>
            <hr class="uk-divider-icon">
            <div class="uk-text-meta" id="meta">
                <span>Par <?=$resp['author']?> le <span class="uk-text-bold"><?=date_format(date_create($resp['created_at']), 'j M, Y')?></span>.</span>
            </div><br>
            <div class="uk-width-4-5@m" id="content" style="border: 1px solid red;">
                <?=$resp['content']?>
            </div>
        </div>
    </div>

<?php
    #Footer
    require(TEMPLATES.'footer.template.php');
