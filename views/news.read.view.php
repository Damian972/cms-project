<?php
    $title = 'News';
    # Header
    require(TEMPLATES.'header.template.php');
?>
    
    <div class="uk-container"><br>
        <div>
            <h2 id="title"><?=$resp['title']?></h2>
            <hr class="uk-divider-icon">
            <div class="uk-text-meta" id="meta">
                <span>Par <?=$resp['author']?> le <span class="uk-text-bold"><?=date_format(date_create($resp['created_at']), 'j M, Y')?></span>.</span>
            </div><br>
            <div class="uk-width-4-5@m" id="content">
                <?=$resp['content']?>
            </div>
        </div>
    </div>

<?php
    #Footer
    require(TEMPLATES.'footer.template.php');
