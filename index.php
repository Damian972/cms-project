<?php
    define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
    require(ROOT.'config'.DIRECTORY_SEPARATOR.'config.php');

    require(INC.'Smarty.class.php');

    $smarty = new Smarty();
    $smarty->setTemplateDir(TEMPLATES);
    $smarty->assign('test', 'Hello wolrd');
    $smarty->display('index.tpl');
