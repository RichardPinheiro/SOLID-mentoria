<?php

use Email;
use Cpf;

class Customer
{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $cpf;

    public function __construct(String $name, String $lastname, String $email, String $cpf) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->cpf = $cpf;
    }
  
    public function isValid()
    {
         if (!Email::emailValidation($this->email)) {
            return [
                "status"  => false, 
                "message" => "Cliente com e-mail inválido"
            ];
         }
        
        if (!Cpf::cpfValidation($this->cpf)) {
            return [
                "status"  => false, 
                "message" => "Cliente com CPF inválido"
            ];
        }

        return true;
    }

}
