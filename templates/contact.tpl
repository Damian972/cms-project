
{include file='_partials/header.tpl' title='Contact'}

    <div class="uk-container"><br>
        
        {if !empty($smarty.session.notification.message)}
            <div uk-alert class="uk-alert-{$smarty.session.notification.type}">
                <a class="uk-alert-close" uk-close></a>
                <p><span uk-icon="icon: info"></span> {$smarty.session.notification.message}</p>
            </div>
        {/if}
        <form class="uk-form-stacked" method="post">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Nom</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Votre nom" name="name">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Votre email" name="email">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Message</label>
                <div class="uk-form-controls">
                <textarea class="uk-textarea" rows="5" placeholder="Entrez ici votre message" name="content"></textarea>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Type</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select" name="content_type">
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>
            </div>
            
            <div class="uk-margin">
                <button class="uk-button uk-button-primary" type="submit" name="contact_form">Envoyer</button>
            </div>
        </form>
    </div>

{include file='_partials/footer.tpl'}
