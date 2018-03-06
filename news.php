<?php
    define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
    require(ROOT.'config'.DIRECTORY_SEPARATOR.'config.php');
    require(INC.'Database.php');

    # Code

    $bdd = new Database();

    if(isset($_GET['id'])){
        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        if(!$id){
           die('404 not found [0]');
        }else{
            if($id > 0){
                $bdd->bind("id",$id);
                $resp = $bdd->query('SELECT * FROM news WHERE id = :id');
                if(!empty($resp)){
                   $resp = $resp[0];
                   require(VIEWS.'news.read.view.php');
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
    require(VIEWS.'news.view.php');