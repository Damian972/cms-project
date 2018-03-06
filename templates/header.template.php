<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=WEBSITE_NAME.' · '.$title?></title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css"/>
    <!-- Custom -->
    <link rel="stylesheet" href="<?=ASSETS?>css/main.css">
</head>
<body>
    <header>
    <!-- Menu mobile -->
        <nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m" id="menu" uk-navbar style="background-color: var(--navbar-background);">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #menu-mobile">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>
            <div class="uk-navbar-center">
                <a href="/" class="uk-navbar-item uk-logo"><?=$title?></a>
            </div>
        </nav>
        <div class="uk-offcanvas-content">
            <div id="menu-mobile" uk-offcanvas="mode: push;">
                <div class="uk-offcanvas-bar">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav uk-nav-default">
                        <li><a href="<?=BASE_URL?>">Accueil</a></li>
                        <li><a href="<?=BASE_URL?>news.php">News</a></li>
                        <li><a href="<?=BASE_URL?>contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- Menu desktop -->
        <nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-visible@m" id="menu" uk-navbar style="background-color: var(--navbar-background);">
            <div class="uk-navbar-left">
                <a href="<?=BASE_URL?>" class="uk-navbar-item uk-logo"><img src="" alt="<?=WEBSITE_NAME?>"></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-navbar-link"><a href="<?=BASE_URL?>">Accueil</a></li>
                    <li class="uk-navbar-link"><a href="<?=BASE_URL?>news.php">News</a></li>
                    <li class="uk-navbar-link"><a href="<?=BASE_URL?>contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    <!-- Fin menu -->
    </header>