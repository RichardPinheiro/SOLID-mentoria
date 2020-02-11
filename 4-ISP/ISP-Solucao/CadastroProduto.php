<?php
require_once "ICadastro.php";
    
class CadastroProduto implements ICadastro
{
    public function validarDados()
    {
        // Validar valor
        echo "\n validar dados";
    }

    public function salvarBanco()
    {
        // Insert tabela Produto
        echo "\n salvar banco";
    }
}
