<?php

namespace Formulario\Elementos;

class Submit extends \Formulario\Elemento implements \Formulario\Interfaces\Submit{

    public function __construct($titulo){

        //valida os argumentos
        if(!is_string($titulo)){
            throw new \InvalidArgumentException("Argumento do tipo inválido! (String 1)");
        }

        $this->html = "<button type='submit' class='btn btn-default'>{$titulo}</button> ";
        $this->html;
    }
} 