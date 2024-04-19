<?php
require 'vendor/autoload.php';
use App\Src\Personagem;
use App\Src\Mago;
use App\Src\Lutador;
use App\Src\ADC;
use App\Src\Assasino;
use App\Src\Suporte;
use App\Src\Tanque;

$Mago = new Mago();
$Mago->Atacar("Prisão de Runa", "70");

$Lutador = new Lutador();
$Lutador->Atacar("A Espada Darkin", "Sem Custo");

$ADC = new ADC();
$ADC->Atacar("Flecha de Cristal Encantada", "100");

$Assasino = new Assasino();
$Assasino->Atacar("Golpe dos Cinco Pontos", "110");

$Suporte = new Suporte();
$Suporte->Atacar("Infusão Astral", "45");

$Tanque = new Tanque();
$Tanque->Atacar("A Maldição da Múmia Triste", "200");