<?php
namespace App\Libraries;
class Hash{
    public static function make($input){
        return password_hash($input, PASSWORD_BCRYPT);
    }

    public static function check($entered_passsword, $db_password){
        if(password_verify($entered_passsword, $db_password)){
            return true;
        }else{
            return false;
        }
    }
}
?>