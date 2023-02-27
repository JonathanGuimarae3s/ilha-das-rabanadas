<?php

namespace App\Controllers;

use Core\ConfigView;

class Adm
{
    private object $produtoDao;
    private array $datas;
    private object $pedidoDao;

    public function __construct()
    {
        $this->produtoDao = new \App\Helpers\ProdutoDao(); //instanciando a class model
        $this->pedidoDao = new \App\Helpers\PedidoDao(); //instanciando a class model

    }
    public function index()
    {
        $dashboard = new ConfigView("Adm/Dashboard");
        $dashboard->renderizar();
    }
    public function pedidos()
    {
        $this->datas['request'] = $this->pedidoDao->listOrders();
        $pedido = new \Core\ConfigView('Adm/Pedidos',$this->datas);
        $pedido->renderizar();
    }
    public function produtos()
    {
        $this->datas['products'] = $this->produtoDao->listProducts();
        $Produtos = new ConfigView("Adm/Produtos", $this->datas);
        $Produtos->renderizar();
    }
    public function cadastrarproduto()

    {
        $Produtos = new ConfigView("Adm/CadastrarProduto");
        $Produtos->renderizar();
    }
    public function atualizarProduto()
    {
        $id = $_GET["id"];
        $this->datas["informations"]  = $this->produtoDao->selectById($id);

        $formAtualizar = new ConfigView("Adm/AtualizarProduto", $this->datas);
        $formAtualizar->renderizar();
    }
}
