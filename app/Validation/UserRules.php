<?php namespace App\validation;

use App\Models\UtilisateurModel;

class UserRules {
    public function validateUser(string $str, string $fields, array $data){
        $model = new UtilisateurModel();
        $user = $model  ->where('email', $data['email'])
                        ->first();
        if(!$user)
            return false;

        return password_verify($data['mot_de_passe'], $user['mot_de_passe']);
    }
}