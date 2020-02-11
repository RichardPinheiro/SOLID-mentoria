<?php

class CpfService
{
    /**
     * Cpf validation
     *
     * @param [String] $cpf
     * @return Bolean
     */
    static public function cpfValidation($cpf)
    {
        return  (strlen($cpf) != 11);
    }
}