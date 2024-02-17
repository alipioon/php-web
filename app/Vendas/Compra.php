<?php

namespace App\Vendas;

class Compra 
{

    public $id, $produtos, $usuario;
    
    public function cadastrar(array $produtos, Usuario $usuario){
        $this->id = rand(1,1000);
        $this->produtos = $produtos;
        $this->usuario = $usuario;
    }

    public function imprimir(){
        $r = 'Compra id: ' . $this->id . '<hr>';
        $r.= 'Produtos: ' . '</br>';
        
        foreach($this->produtos as $produto){
            $r .= $produto->imprimir(0);
        }

        $r.= '<hr>';
        $r.= $this->usuario->imprimir();
        
        return $r;

    }

}
