<?php
   
    define('ROOT',__DIR__.DIRECTORY_SEPARATOR);
    require(ROOT.'config'.DIRECTORY_SEPARATOR.'config.php');
    require(INC.'Database.php');
    require(INC.'Utils.php');

    # Start session
    session_start();

    # Treatments
    if(isset($_POST['contact_form'])){
        extract($_POST);
        if(!empty($name) && mb_strlen($name) > 5){
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(!empty($content) && mb_strlen($content) > 10){
                    if(!empty($content_type)){
                        $bdd = new Database();
                        $bdd->bindMore([
                            'author' => htmlspecialchars($name),
                            'email' => htmlspecialchars($email),
                            'content_type' => htmlspecialchars($content_type),
                            'content' => htmlspecialchars($content)
                        ]);
                        $req = $bdd->query("INSERT INTO mails(author_name,email,content_type,content) VALUES(:author,:email,:content_type,:content)");
                        if($req > 0){
                            Utils::setFlash('Votre message a bien été enregisté','success');
                        }else{
                            Utils::setFlash('Une erreur s\'est produite, merci de contacter l\'administrateur du site','danger');
                        }
                    }else{
                        Utils::setFlash('Vous devez selectionner une option','danger');
                    }
                }else{
                    Utils::setFlash('Votre message doit contenir au moins 10 caractères','danger');
                }
            }else{
                Utils::setFlash('Votre email est invalide','danger');
            }
        }else{
            Utils::setFlash('Votre nom ne doit pas être inférieur à 5 caractères','danger');
        }
        #Redirect user on same page for unset $_POST
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }


    # Views
    require(VIEWS.'contact.view.php');

    #Clear Session notifications
    if(!empty($_SESSION['notification']['message'])) Utils::clearFlash();
    