<?php

namespace App\Helpers;

class CarrinhoDao
{

    private object $carrinhoModel;

    public function __construct()
    {
        $this->carrinhoModel = new \App\Models\CarrinhoModel();
    }
    public function insert($idProduto,$idCliente)

    {
        $clientCart = $this->carrinhoModel->verifyCart($idCliente);
        if (sizeof($clientCart) > 0) {

            $this->carrinhoModel->update($idCliente, $idProduto);
            
        }
        $this->carrinhoModel->insert($idCliente, $idProduto);
       


    }
    public function getIdCart()
    {
        # code...
    }
    public function getProducts($id)
    {
        $clientCart = $this->carrinhoModel->verifyCart($id);
        if (sizeof($clientCart) > 0) {

            $idProduto = $clientCart[0]["idProduto"];
            $products = $this->getMyProducts($id, $idProduto);
            return $products;
        }
        return "false";
    }
    private function getMyProducts($id, $idProduto)
    {
        $clientCart = $this->carrinhoModel->getMyProducts($id, $idProduto);
        return $clientCart;
    }
}
