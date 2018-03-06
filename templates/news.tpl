
{include file='_partials/header.tpl' title='News'}

    <div class="uk-container"><br>
        
        {foreach $news as $item}
        <div>
            <h1><a href="{$smarty.const.BASE_URL|cat: 'news.php?id='}{$item.id}">{$item.title}</a></h1>
            <p>{$item.content}</p>
            <small>Created at {$item.created_at} by {$item.author}</small>
        </div><hr>
        {/foreach}
        
    </div>

{include file='_partials/footer.tpl'}
