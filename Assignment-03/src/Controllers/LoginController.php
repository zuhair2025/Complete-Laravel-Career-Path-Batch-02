<?php

namespace App\Controllers;

class LoginController
{
    public function login($data)
    {
        $file = fopen('registrations.txt','r');
        $login = false;

        while(!feof($file)){
            $user = fgets($file);
            $array = explode(',',$user);
            if($data['email'] == $array[1] && $data['password'] == $array[2])
            {
                $login = true;
            }
        }

        if($login)
        {
            echo "You are logged In";
        }else{
            echo "Credentials do not match";
        }

        fclose($file);
    }
}