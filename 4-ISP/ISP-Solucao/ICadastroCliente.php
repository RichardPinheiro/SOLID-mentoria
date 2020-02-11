<?php

require_once('ICadastro.php');

interface ICadastroCliente extends ICadastro
{
    public function enviarEmail();
}