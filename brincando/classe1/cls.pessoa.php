<?php

class Pessoa
{

    public $id;
    public $nome;
    public $data_nasci;
    public $genero;

    public $gmail;

    public function __construct($id = NULL, $nome = NULL, $data_nasci = NULL, $genero = NULL, $gmail = NULL)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->data_nasci = $data_nasci;
        $this->genero = $genero;
        $this->gmail = $gmail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDataNasci()
    {
        return $this->data_nasci;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getGmail()
    {
        return $this->gmail;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDataNasci($data_nasci)
    {
        $this->data_nasci = $data_nasci;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }


    public function setGmail($gmail)
    {
        $this->gmail = $gmail;
    }
}
