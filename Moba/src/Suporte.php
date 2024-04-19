<?php
namespace App\Src;
class Suporte implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Suporte';
        $nome = 'Soraka';
        $regiao = 'TARGON';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}