<?php

namespace App\Utils;

/**
 * Configurações globais
 * @package App\Utils
 */
class ConfigGlobal
{
    /**
     * HOST
     *
     * @var string
     */
    private string $host        = "";

    /**
     * USER
     *
     * @var string
     */
    private string $user        = "";

    /**
     * PASSWORD
     *
     * @var string
     */
    private string $pass        = "";

    /**
     * BANCO DE DADOS
     *
     * @var string
     */
    private string $db          = "";

    /**
     * CAMINHO DE ORIGEM
     *
     * @var string
     */
    private string $source      = "";

    /**
     * NOME DO PROJETO
     *
     * @var string
     */
    private string $nameProject = "";

    /**
     * Construtor da classe
     * @return void 
     */
    public function __construct()
    {
        $this->host         = "localhost";
        $this->user         = "root";
        $this->pass         = "";
        $this->db           = "mvc-example";
        $this->source       = "http://localhost/project/mvcExample";
        $this->nameProject  = "MVC Example";
    }


    /**
     * Retorna nome do projeto
     * @return string 
     */
    public function getNameProject()
    {
        return $this->nameProject;
    }

    /**
     * Retorna o host
     * @return string 
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Retorna o user
     * @return string 
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * Retorna a senha
     * @return string 
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * Retorna o banco de dados
     * @return string 
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * Retorna o source
     * @return null|string 
     */
    public function getSource()
    {
        return $this->source;
    }
}
