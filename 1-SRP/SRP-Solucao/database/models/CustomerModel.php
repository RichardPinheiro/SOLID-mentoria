<?php

use databse\Connection;

class CustomerModel
{
    static public function insert(Customer $customer)
    {
        $query = "INSERT INTO CLIENTE (name, lastname, email, cpf) VALUES (:name, :lastname, :email, :cpf)";
        $stmt = connection::pdo($query);
    
        $stmt->bindParam(':name', $customer->name, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $customer->lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $customer->email, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $customer->cpf, PDO::PARAM_STR);
        
        return $stmt->execute();
    }
}