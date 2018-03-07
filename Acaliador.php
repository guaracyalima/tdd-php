<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 07/03/2018
 * Time: 17:52
 */

class Acaliador
{
    public $maiorValor =  -INF;
    public $menorValor = INF;

    public function avalia( Leilao $leilao)
    {
        foreach ($leilao->getLances() as $lance)
        {
            if($lance->getValor() > $this->maiorValor)
            {
                $this->maiorValor = $lance->getValor();
            }else if($lance->getValor() < $this->maiorValor){
                $this->menorValor = $lance->getValor();
            }
        }
    }

    public function getMaiorLance(){
        return $this->maiorValor;
    }

    public function getMenorLance()
    {
        return $this->menorValor;
    }
}