<?php
namespace App\Src;
class Lutador implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Lutador';
        $nome = 'Aatrox';
        $regiao = 'RUNETERRA';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}