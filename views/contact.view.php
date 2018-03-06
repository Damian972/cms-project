<?php
    $title = 'Contact';
    # Header
    require(TEMPLATES.'header.template.php');
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

<?php
    #Footer
    require(TEMPLATES.'footer.template.php');
?>