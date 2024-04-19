<?php
namespace App\Src;
class ADC implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'ADCarry(Atirador)';
        $nome = 'Ashe';
        $regiao = 'FRELJORD';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}