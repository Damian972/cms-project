<?php
    $title = 'Login';
    # Header
    require(TEMPLATES.'_header.main.template.php');
   # $error = ['type'=>'warning','message' => 'A text message']
?>

    <div class="uk-container"><br>
        <?php if(!empty($_SESSION['notification']['message'])){?>
            <div uk-alert class="uk-alert-<?=$_SESSION['notification']['type']?>">
                <a class="uk-alert-close" uk-close></a>
                <p><span uk-icon="icon: info"></span> <?=$_SESSION['notification']['message']?></p>
            </div>
        <?php } ?>
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

<?php
    #Footer
    require(TEMPLATES.'_footer.main.template.php');
?>