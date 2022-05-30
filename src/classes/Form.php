<?php

    class Form{
        public static function alert($type, $message) {
            if ($type === 'erro') {
                echo '<div>'.$message.'</div>';
                return false;
            } else if($type === 'sucess'){
                echo '<div>'.$message.'</div>';
                return true;
            }
        }

        public static function register($nome, $email, $message) {

            //Se colocar nomes vai entrar em sql injection

            $sql = Mysql::conect()->prepare("INSERT INTO `registers` VALUES (null,?,?,?)"); 
            $sql->execute(array($nome, $email, $message));
        }
    }
?>