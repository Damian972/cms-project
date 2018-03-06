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
                            # Define string status
                            $strStatus = '';
                            switch(intval($user_account['status'])){
                                case 1;
                                    $strStatus = 'Rédacteur';
                                    break;
                                case 2;
                                    $strStatus = 'Modérateur';
                                    break;
                                case 3;
                                    $strStatus = 'Administrateur';
                                    break;
                                case 4;
                                    $strStatus = 'Fondateur';
                                    break;
                                default:
                                    $strStatus = 'Membre';
                                    break;
                            }
                            # Set user's session
                            $_SESSION['user'] = array(
                                'pseudo' => $user_account['pseudo'],
                                'email' => $user_account['email'],
                                'status' => intval($user_account['status']),
                                'strStatus' => $strStatus
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