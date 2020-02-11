<?php

use ContaCorrente;
use ContaPoupanca;

$contaCorrente = new ContaCorrente();
$contaCorrente->debitar(100, '1');

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->debitar(1000, '3');