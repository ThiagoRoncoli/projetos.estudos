<?php

include_once("cls.pessoa.php");

class Funcionario extends Pessoa
{

    public $salario;
    public $hrsTrab;
    public $cargo;

    public function __construct($salario = 2000, $hrsTrab = 6, $cargo = "atendente"){

        parent::__construct($salario, $hrsTrab, $cargo);

        $this->salario = $salario;
        $this->hrsTrab = $hrsTrab;
        $this->cargo = $cargo;
    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function getHrsTrab()
    {
        return $this->hrsTrab;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function setHrsTrab($hrsTrab)
    {
        $this->hrsTrab = $hrsTrab;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }
}
