<?php
    define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
    require(ROOT.'config'.DIRECTORY_SEPARATOR.'config.php');
    require(INC.'Database.php');
    require(INC.'Smarty.class.php');

    # Code

    $bdd = new Database();
    $smarty = new Smarty();
    $smarty->setTemplateDir(TEMPLATES);

    if(isset($_GET['id'])){
        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        if(!$id){
           die('404 not found [0]');
        }else{
            if($id > 0){
                $bdd->bind("id",$id);
                $resp = $bdd->query('SELECT * FROM news WHERE id = :id');
                if(!empty($resp)){
                    $smarty->assign('news', $resp[0]);
                    $smarty->display('news.read.tpl');
                   exit();
                }else{
                    die('404 not found [1]');
                }
            }else{
                die('404 not found [2]');
            }
        }
    }else{
        $news = $bdd->query('SELECT * FROM news');
    }
    

    # Views
    $smarty->assign('news', $news);
    $smarty->display('news.tpl');
