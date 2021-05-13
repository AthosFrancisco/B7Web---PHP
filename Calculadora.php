<?php

class Calculadora
{
    private float $valor = 0;

    public function add(float $valor)
    {
        $result = $this->getValor()+$valor;
        $this->setValor($result);
    }

    public function sub(float $valor)
    {
        $result = $this->getValor()-$valor;
        $this->setValor($result);
    }

    public function multiply(float $valor)
    {
        $result = $this->getValor()*$valor;
        $this->setValor($result);
    }

    public function divide(float $valor)
    {
        $result = $this->getValor()/$valor;
        $this->setValor($result);
    }

    public function clear()
    {
        $this->setValor(0);
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

}