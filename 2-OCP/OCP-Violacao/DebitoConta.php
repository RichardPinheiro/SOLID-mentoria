<?php

class DebitoConta
{
    const Corrente = 1;
    const Poupanca = 2;
    public function debitar(float $valor, string $conta, int $tipo)
    {
        if ($tipo == self::Corrente) {
            // Debita Conta Corrente
        }
        if ($tipo == self::Poupanca) {
            // Valida Aniversário da Conta
            // Debita Conta Poupança
        }
    }
}
