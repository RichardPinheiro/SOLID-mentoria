<?php
require_once('Quadrado.php');
require_once('Retangulo.php');

class CalculoArea
{
    
    public static function calcular()
    {
        $quad = new Quadrado();
        $quad->setLargura(10);
        $quad->setAltura(5);
        print_r($quad);
        CalculoArea::obterAreaRetangulo($quad);
    }
    
    public static function obterAreaRetangulo(Retangulo $ret)
    {
        echo "\n Calculo da área do Retangulo";
        echo "\n Altura -> " . $ret->altura;
        echo "\n Largura -> " . $ret->largura;
        echo "\n Area -> " . $ret->area();
    }
}