
{include file='_partials/header.tpl' title='News'}

    <div class="uk-container"><br>
        <div>
            <h2 id="title">{$news.title}</h2>
            <hr class="uk-divider-icon">
            <div class="uk-text-meta" id="meta">
                <span>Par {$news.author} le <span class="uk-text-bold">{$news.created_at|date_format: 'j M, Y'}</span>.</span>
            </div><br>
            <div class="uk-width-4-5@m" id="content">
                {$news.content}
            </div>
        </div>
    </div>

{include file='_partials/footer.tpl'}
