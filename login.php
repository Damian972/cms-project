<?php
   
    define('ROOT',__DIR__.DIRECTORY_SEPARATOR);
    require(ROOT.'config'.DIRECTORY_SEPARATOR.'config.php');
    require(INC.'Database.php');
    require(INC.'Utils.php');

    # Start session
    session_start();

    # Redirect user if already logged
    if(isset($_SESSION['user'])) header('Location: '.BASE_URL);

    # Treatments
    if(isset($_POST['login_form'])){
        extract($_POST);
        if(!empty($email) && mb_strlen($email) > 5){
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(!empty($password) && mb_strlen($password) > 5){
                    $bdd = new Database();
                    $bdd->bind('email', htmlspecialchars($email));
                    $user_account = $bdd->query('SELECT * FROM users WHERE email = :email');
                    if(!empty($user_account)){
                        $user_account = $user_account[0];
                        if(Utils::encryptData(htmlspecialchars($password)) === $user_account['password']){
                            # Set user's session
                            $_SESSION['user'] = array(
                                'name' => $user_account['name'],
                                'email' => $user_account['email'],
                                'is_admin' => intval($user_account['is_admin']),
                            );
                        }else{
                            Utils::setFlash('Mot de passe incorrect','danger');
                        }
                    }else{
                        Utils::setFlash('Votre compte n\'existe pas','danger');
                    }
                }else{
                    Utils::setFlash('Mot de passe incorrect','danger');
                }
            }else{
                Utils::setFlash('Votre email est invalide','danger');
            }
        }else{
            Utils::setFlash('Votre email est invalide','danger');
        }
        #Redirect user on same page to unset $_POST
        header('Location: '.$_SERVER['PHP_SELF']);
        exit();
    }


    # Views
    require(VIEWS.'login.view.php');

    #Clear Session notifications
    if(!empty($_SESSION['notification']['message'])) Utils::clearFlash();