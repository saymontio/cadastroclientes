<?php

class Clientes
{
    private $id;
    private $nome;
    private $aniversario;
    private $cpf;
    private $email;
    private $telefone;
    private $celular;
    private $endereco;
    private $cidade;
    private $estado;
    private $cep;

    /**
     * Clientes constructor.
     * @param $id
     * @param $nome
     * @param $aniversario
     * @param $cpf
     * @param $email
     * @param $telefone
     * @param $celular
     * @param $endereco
     * @param $cidade
     * @param $estado
     * @param $cep
     */
    public function __construct($id, $nome, $aniversario, $cpf, $email, $telefone, $celular, $endereco, $cidade, $estado, $cep)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->aniversario = $aniversario;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getAniversario()
    {
        return $this->aniversario;
    }

    /**
     * @param mixed $aniversario
     */
    public function setAniversario($aniversario)
    {
        $this->aniversario = $aniversario;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }


}