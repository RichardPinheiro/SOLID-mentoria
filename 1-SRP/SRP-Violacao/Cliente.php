<?php

use Email;

class Cliente
{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $cpf;

    public function adicionarCliente()
    {
        if (!strpos($this->email, '@')) {
            return "Cliente com e-mail inválido";
        }

        if (strlen($this->cpf) != 11) {
            return "Cliente com CPF inválido";
        }

        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        $sql  = "INSERT INTO CLIENTE (name, lastname, email, cpf) VALUES (:name, :lastname, :email, :cpf)";
        $stmt = $DB->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        
        $stmt->execute();

        $Email = new Email($config);
        $Email->destinatario($this->name, $this->email);
        $Email->assunto('Bem Vindo.');
        $Email->mensagem('Parabéns! Você está cadastrado.');
        $Email->enviar();

        return "Cliente cadastrado com sucesso!";
    }
}
