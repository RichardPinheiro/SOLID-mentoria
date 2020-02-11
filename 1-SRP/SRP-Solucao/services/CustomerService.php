<?php

use Email;
use database\models\CustomerModel;

class CustomerService
{
    /**
     * add a new Customer
     *
     * @return String
     */
    public function addNewCustomer(Customer $customer)
    {
        $isValid = $customer->isValid();

        if (!$isValid['status']) {
            return $isValid['message'];
        }
        
        $this->save($customer);
        
        Email::sendEmailNewRegister($customer->name, $customer->email);

        return "Cliente cadastrado com sucesso!";
    }
    
    /**
     * Save a new customer
     *
     * @param Object $customer
     * @return void
     */
    private function save(Customer $customer)
    {
        return CustomerModel::insert($customer);
    }
}
