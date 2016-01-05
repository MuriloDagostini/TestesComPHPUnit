<?php

namespace Formulario\Elementos;


class Text extends \Formulario\Elemento implements \Formulario\Interfaces\Text{

    public function __construct($id_nome,$titulo){

        //valida os argumentos
        if(!is_string($id_nome) OR !is_string($titulo)){
            throw new \InvalidArgumentException("Argumentos do tipo inválido! (String 1, String 2)");
        }

        $this->html = "<div class='form-group'>";
        $this->html .= "    <input type='text' name='$id_nome' id='$id_nome' placeholder='{$titulo}' class='form-control' /> ";
        $this->html .= "</div>";
        $this->html;
    }
} 