<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 07/03/2018
 * Time: 18:05
 */

require "Usuario.php";
require "Lance.php";
require "Leilao.php";
require "Acaliador.php";

class AvaliadorTeste extends  PHPUnit_Framework_TestCase
{
    public function test()
    {
        $leilao = new Leilao("PS 4");

        $renan = new Usuario("Renan");
        $felipe = new Usuario("Felipe");
        $caio = new Usuario("Caio");

        $leilao->propoe(new Lance($renan, 400));
        $leilao->propoe(new Lance($felipe, 350));
        $leilao->propoe(new Lance($caio, 250));

        $leiloeiro = new Acaliador();
        $leiloeiro->avalia($leilao);

        $maiorEsperado = 400;
        $menorEsperado = 250;

        $this->assertEquals($leiloeiro->getMaiorLance(), $maiorEsperado);
        $this->assertEquals($leiloeiro->getMenorLance(), $menorEsperado);
    }
}