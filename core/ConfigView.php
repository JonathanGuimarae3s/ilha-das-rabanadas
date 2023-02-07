<?php

namespace Core;



class ConfigView
{
    private string $nome;
    private  $dados;
    public function __construct($nome, array $dados = null)
    {
        $this->nome = $nome;
        $this->dados = $dados;
    }
    public function renderizar()
    {
        if (file_exists('app/Views/' . $this->nome . '.php')) {
            // verifica se o arquivo existe
            include 'app/Views/' . $this->nome . '.php';
        } else {
            echo "error ao carregar: ";
            echo 'app/Views/' . $this->nome . '.php';
        }
    }
}