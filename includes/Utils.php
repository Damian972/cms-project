<?php

    class Utils{

        public static function setFlash($message,$type = ''){
            $_SESSION['notification']['message'] = ucfirst(strtolower($message));
            $_SESSION['notification']['type'] = strtolower($type);
        }

        public static function clearFlash(){
            unset($_SESSION['notification']);
        }

        public static function encryptData($data){
            return hash_hmac('sha512', SALT_KEY, $data);
        }
    }