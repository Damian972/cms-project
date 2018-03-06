
{include file='_partials/header.tpl' title='Login'}

    <div class="uk-container"><br>
        
        {if !empty($smarty.session.notification.message)}
            <div uk-alert class="uk-alert-{$smarty.session.notification.type}">
                <a class="uk-alert-close" uk-close></a>
                <p><span uk-icon="icon: info"></span> {$smarty.session.notification.message}</p>
            </div>
        {/if}
        <form class="uk-form-stacked" method="post">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Votre email" name="email" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Mot de passe</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="password" placeholder="Votre mot de passe" name="password" required>
                </div>
            </div>
            
            <div class="uk-margin">
                <button class="uk-button uk-button-primary" type="submit" name="login_form">Envoyer</button>
            </div>
        </form>
    </div>

{include file='_partials/footer.tpl'}
